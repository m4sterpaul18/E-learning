<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [];

		// form helper for form validation
    	helper(['form']);

		echo view('template/header',$data);
		echo view('homepage');
		echo view('template/footer');
	}

	public function login()
	{
		$data = [];

		// form helper for form validation
    	helper(['form']);

		echo view('template/header',$data);
		echo view('loginpage');
		echo view('template/footer');
	}


	public function register()
	{
		$data = [];

		// form helper for form validation
    	helper(['form']);

		echo view('template/header',$data);
		echo view('registerpage');
		echo view('template/footer');
	}
	


	
	
}
