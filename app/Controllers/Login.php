<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		return view('Umum/Login');
	}
	public function register()
	{
		return view('Umum/Register');
	}

	//--------------------------------------------------------------------

}
