<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Lessons extends BaseController{
    public function chapter1(){
        $data = array(
            'title' => 'Chapter 1'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-1');
        echo view('chapters/templates/chapter-footer');
    }

    public function chapter2(){
        $data = array(
            'title' => 'Chapter 2'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-2');
        echo view('chapters/templates/chapter-footer');
    }

    public function chapter3(){
        $data = array(
            'title' => 'Chapter 3'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-3');
        echo view('chapters/templates/chapter-footer');
    }
}

?>