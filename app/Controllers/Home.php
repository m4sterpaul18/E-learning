<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('template/header');
		echo view('homepage');
		echo view('template/footer');
	}
	public function login()
	{
		echo view('template/header');
		echo view('loginpage');
		echo view('template/footer');
	}
	public function register()
	{
		echo view('template/header');
		echo view('registerpage');
		echo view('template/footer');
	}
	
}
