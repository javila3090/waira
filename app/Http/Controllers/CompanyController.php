<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\CompanyInfo;

class CompanyController extends Controller
{
	public function index(){

		$company = CompanyInfo::first();

		if(count($company)>0){
			return view('admin.company.edit',compact('company'));
		}

		return view('admin.company.index');
	}

	public function store(){

		$rules = array(
			'name' => 'required',
			'phone_1' => 'required',
            'email_1' => 'required|string|email|max:255',		
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			$messages = $validator->messages();
			return redirect('admin/company')->withErrors($messages);

		}else{

			$file = Input::file('logo');

			if($file != ""){
                //Creamos una instancia de la libreria instalada   
				$image = Image::make(Input::file('logo'));
                //Ruta donde queremos guardar las imagenes
				$path = public_path().'/uploads/logo/';
                // Guardar
				$image->save($path.$file->getClientOriginalName());
			}
            //Guardamos nombre y nombreOriginal en la BD
            $company = new Company();
			$company->name = Input::get('name');
			$company->phone_1 = Input::get('phone_1');
			$company->phone_2 = Input::get('phone_2');
			$company->email_1 = Input::get('email_1');
			$company->email_2 = Input::get('email_2');
			$company->address = Input::get('address');
			$company->review = Input::get('review');
			if($file != ""){
				$company->logo = 'uploads/logo/'.$file->getClientOriginalName();
			}
			$company->save(); 
		}

		return redirect('admin/company')->with('message', '¡Registro guardado con éxito!');

	}	

	public function update($id){

		$company = CompanyInfo::find($id);

		$rules = array(
			'name' => 'required',
			'phone_1' => 'required',
            'email_1' => 'required|string|email|max:255',		
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			$messages = $validator->messages();
			return redirect('admin/company')->withErrors($messages);

		}else{

			$file = Input::file('logo');

			if($file != ""){
                //Creamos una instancia de la libreria instalada   
				$image = Image::make(Input::file('logo'));
                //Ruta donde queremos guardar las imagenes
				$path = public_path().'/uploads/logo/';
                // Guardar
				$image->save($path.$file->getClientOriginalName());
			}
            //Guardamos nombre y nombreOriginal en la BD
			$company->name = Input::get('name');
			$company->phone_1 = Input::get('phone_1');
			$company->phone_2 = Input::get('phone_2');
			$company->email_1 = Input::get('email_1');
			$company->email_2 = Input::get('email_2');
			$company->address = Input::get('address');
			$company->review = Input::get('review');
			if($file != ""){
				$company->logo = 'uploads/logo/'.$file->getClientOriginalName();
			}
			$company->update(); 
		}

		return redirect('admin/company')->with('message', '¡Registro actualizado con éxito!');

	}
}
