<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\Banner;
use App\BannerType;
use App\Section;
use App\SectionType;

class BannerController extends Controller
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

		$banners = Banner::all();
		return view('admin.banner.index',compact('banners'));
	}

	public function create(){
		$banner_types = BannerType::pluck('name','id');
		$sections = SectionType::pluck('name','id');
		return view('admin.banner.add',compact('banner_types','sections'));
	}

	public function store(Request $request){

		$rules = array(
			'title' => 'required',
			'banner_type_id' => 'required',
			'image' => 'mimes:jpeg,jpg,png,gif',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			$messages = $validator->messages();
			return redirect('admin/banner/add')->withErrors($messages);

		}else{

			$file = Input::file('image');

			if($file != ""){
                //Creamos una instancia de la libreria instalada   
				$image = Image::make(Input::file('image'));
                //Ruta donde queremos guardar las imagenes
				$path = public_path().'/uploads/banners/';
                // Guardar Original
                //$image->save($path.$file->getClientOriginalName());
                // Cambiar de tamaño
			//$image->resize(300,500);
                // Guardar
				$image->save($path.$file->getClientOriginalName());
			}
            //Guardamos nombre y nombreOriginal en la BD
			$banner = new Banner();
			$banner->title = Input::get('title');
			$banner->subtitle = Input::get('subtitle');
			$banner->caption = Input::get('caption');
			$banner->button = Input::get('button');
			$banner->button_target = Input::get('button_target');
			$banner->banner_type_id = Input::get('banner_type_id');
			if($file != ""){
				$banner->image = 'uploads/banners/'.$file->getClientOriginalName();
			}
			$banner->save(); 
		}
		return redirect('admin/banner')->with('message', '¡Registro guardado con éxito!');
	}

	public function edit($id){

		$banner = Banner::find($id);
		$banner_types = BannerType::pluck('name','id');
		$selected_banner = BannerType::where('id',$banner->banner_type_id)->pluck('name','id');
		$sections = SectionType::all();
		$selected_button_target = SectionType::where('id',$banner->button_target)->pluck('name','id');
		return view('admin.banner.edit',compact('banner','banner_types','selected_banner','sections','selected_button_target'));
	}

	public function update($id){

		$banner = Banner::find($id);

		$rules = array(
			'title' => 'required',
			'banner_type_id' => 'required',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			$messages = $validator->messages();
			return redirect('admin/banner')->withErrors($messages);

		}else{

			$file = Input::file('image');

			if($file != ""){
                //Creamos una instancia de la libreria instalada   
				$image = Image::make(Input::file('image'));
                //Ruta donde queremos guardar las imagenes
				$path = public_path().'/uploads/banners/';
                // Guardar Original
                //$image->save($path.$file->getClientOriginalName());
                // Cambiar de tamaño
			//$image->resize(300,500);
                // Guardar
				$image->save($path.$file->getClientOriginalName());
			}
            //Guardamos nombre y nombreOriginal en la BD
			$banner->title = Input::get('title');
			$banner->subtitle = Input::get('subtitle');
			$banner->caption = Input::get('caption');
			$banner->banner_type_id = Input::get('banner_type_id');
			$banner->button = Input::get('button');
			$banner->button_target = Input::get('button_target');
			if($file != ""){
				$banner->image = 'uploads/banners/'.$file->getClientOriginalName();
			}
			$banner->update(); 
		}

		return redirect('admin/banner')->with('message', '¡Registro actualizado con éxito!');

	}

	public function destroy ($id){
		try {
			$banner = Banner::findOrFail($id);
			$banner->delete();

			unlink(public_path('/'.$banner->image));

			return response()->json(['message' => 'Ok']);
		}
		catch (\Exception $e) {
			return response()->json(['message' => $e]);
		}
	}
}
