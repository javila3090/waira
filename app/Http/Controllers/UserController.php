<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){

		$users = User::all();
		return view('admin.users.index',compact('users'));
	}

	public function create(){

		return view('admin.users.add');
	}

    public function edit($id){

        $user = User::find($id);

        return view('admin.users.edit',compact('user'));
    }

    protected function store()
    {
        $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return redirect('admin/user/add')->withErrors($messages);

        }else{

            $user = new User();
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            $user->save();
        }

        return redirect('admin/user')->with('message', '¡Registro guardado con éxito!');

    }

    protected function update($id)
    {

        $user = User::findOrFail($id);

        $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return back()->withErrors($messages);

        }else{

            $user->name = Input::get('name');
            $user->email = Input::get('email');

            $user->update();
        }

        return redirect('admin/user')->with('message', '¡Registro actualizado con éxito!');

    }

    public function change_pass (){

        $rules = array(
            'password' => 'required|string|min:6|confirmed',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return back()->withErrors($messages);

        }else{
            
            $id=Input::get('id');
            
            $user = User::findOrFail($id);
            $user->password = Hash::make(Input::get('password'));

            $user->update();

            return redirect('admin/user')->with('message', 'Su contraseña ha cambiado');
        }        
    }

    public function reset_pass ($id){

        $user = User::findOrFail($id);
        $user->password = Hash::make("12345678");

        $user->update();

        return response()->json(['message' => 'Ok']);

    }

    public function destroy ($id){
    try {
      $user = User::findOrFail($id);
      $user->delete();

      return response()->json(['message' => 'Ok']);
    }
    catch (\Exception $e) {
      return response()->json(['message' => $e]);
    }
  }
}
