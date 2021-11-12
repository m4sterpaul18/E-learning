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

    public function chapter4(){
        $data = array(
            'title' => 'Chapter 4'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-4');
        echo view('chapters/templates/chapter-footer');
    }

    public function chapter5(){
        $data = array(
            'title' => 'Chapter 5'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-5');
        echo view('chapters/templates/chapter-footer');
    }

    public function chapter6(){
        $data = array(
            'title' => 'Chapter 6'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-6');
        echo view('chapters/templates/chapter-footer');
    }

    public function chapter7(){
        $data = array(
            'title' => 'Chapter 7'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-7');
        echo view('chapters/templates/chapter-footer');
    }

    public function chapter8(){
        $data = array(
            'title' => 'Chapter 8'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-8');
        echo view('chapters/templates/chapter-footer');
    }

    public function chapter9(){
        $data = array(
            'title' => 'Chapter 9'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/chapter-9');
        echo view('chapters/templates/chapter-footer');
    }
    
}

?>