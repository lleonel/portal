<?php

class LoginController extends BaseController {
	

	public function postLogin(){

		$rules 	=  array(
		//'g-recaptcha-response' => 'required|captcha',
		'username' => 'required',
		'password' => 'required'
		); 

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
			return Redirect::back()->withErrors($validator)->withInput();

		if (Ldapsearch::auth(Input::get('username'), Input::get('password')))
		{	
			$user = User::where('username', '=', Input::get('username'))->first();

			if(empty($user))
			{
				return Redirect::back()->withErrors('No tienes acceso a esta sección.');
			}

			Auth::login($user);

			return Redirect::to('');				
		
		} else {
			
			return Redirect::back()->withErrors('Usuario invalido !')->withInput();
		}


	}

	public function getLogin() {

	  	return View::make('login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}


	/*
		if(Auth::attempt(['username'=>Input::get('username'), 'password'=>Input::get('password')]))
		{
			$user = User::where('username', '=', Input::get('username'))
			->first();

			if (empty($user))
			{
				Auth::logout();
				return Redirect::back()->withErrors('No tienes acceso a esta sección.');
			}
			
			return Redirect::to('/');
		}
		else
		{
			return Redirect::back()->withErrors('Error al validar.');
		}
*/
		//if (!Auth::check()) {	

			/*$user 		= 'admin@admin.com';
			$password 	= '123456';

			if (Auth::attempt(['email' => $user,'password' => $password])) {	
				return "ok";
			}*/
		//	return View::make('login');
		//}

		//return Auth::User()->profile();


		//	return View::make('login');

		/*return dd(Auth::user()->profiles()->modulos);
			
			//$modulo = Auth::user();

			//return $modulo;

			//return View::make('login');

	//	} else {

			return View::make('login');
	//	}

		//Auth::logout();

*/
}