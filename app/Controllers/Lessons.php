<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Lessons extends BaseController{
    public function index(){
        $data = [];
        echo view('template/lessons-nav-header.php',$data);
        echo view('lessons/Chapter1/chapter-1-flow.php');      
        echo view('template/lessons-nav-footer.php');  
    }
}

?>