<?php

namespace App\Controllers;
use App\Models\UsersModel;


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

		if($this->request->getMethod()== 'post'){
			//rules for validation
			$rules = [
				'fname' => 'required|min_length[4]|max_length[50]',
				'lname' => 'required|min_length[4]|max_length[50]',
				'section' => 'required',
				'student-id' => 'required|is_unique[users.student-id]|min_length[10]|max_length[10]',
				'password' => 'required|min_length[8]|max_length[50]',
				'confirmPassword' => 'required|matches[password]'
			];
			//checks if validations is success
			if(! $this->validate($rules)){
				$data['validation'] = $this->validator;
			}
			else{
				// load model
				$model = new UsersModel();

				//data to be inserted
				$newData = [
					'firstname' => $this->request->getVar('fname'),
					'lastname' => $this->request->getVar('lname'),
					'section' => $this->request->getVar('section'),
					'student-id' => $this->request->getVar('student-id'),
					'password' => $this->request->getVar('password'),
				];

				$model->save($newData);

				//flash data for success registration
				$session = session();
				$session -> setFlashData('success','Successfully Registered!');

			}
		}
		else{
			// 
		}

		echo view('template/header',$data);
		echo view('registerpage');
		echo view('template/footer');
	}
	


	
	
}
