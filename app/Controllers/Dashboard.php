<?php

namespace App\Controllers;

class Dashboard extends BaseController{
    public function index(){
        $data = [];
        echo view('template/sidenav',$data);
		echo view('dashboard/dashboardpage');
		echo view('template/footer');
        
    }

    public function ranking(){
        $data = [];
        echo view('template/sidenav',$data);
		echo view('dashboard/rankpage');
		echo view('template/footer');
    }

    public function profile(){
        $data = [];
        echo view('template/sidenav',$data);
		echo view('dashboard/profilepage');
		echo view('template/footer');
    }

    public function lesson(){
        $data = [];
        echo view('template/sidenav',$data);
		echo view('dashboard/lessonspage');
		echo view('template/footer');
    }

    public function game(){
        $data = [];
        echo view('template/sidenav',$data);
		echo view('dashboard/gamespage');
		echo view('template/footer');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('/e-learning/public/login'));
    }
}

?>