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
}

?>