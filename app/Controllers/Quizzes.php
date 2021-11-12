<?php
namespace App\Controllers;

class Quizzes extends BaseController{
    public function quiz1(){
        $data = array(
            'title' =>'Quiz 1'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-1-quiz');
        echo view('chapters/templates/chapter-footer');
    }

    public function quiz2(){
        $data = array(
            'title' =>'Quiz 2'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-2-quiz');
        echo view('chapters/templates/chapter-footer');
    }

    public function quiz3(){
        $data = array(
            'title' =>'Quiz 3'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-3-quiz');
        echo view('chapters/templates/chapter-footer');
    }

    public function quiz4(){
        $data = array(
            'title' =>'Quiz 4'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-4-quiz');
        echo view('chapters/templates/chapter-footer');
    }

    public function quiz5(){
        $data = array(
            'title' =>'Quiz 5'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-5-quiz');
        echo view('chapters/templates/chapter-footer');
    }

    public function quiz6(){
        $data = array(
            'title' =>'Quiz 6'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-6-quiz');
        echo view('chapters/templates/chapter-footer');
    }

    public function quiz7(){
        $data = array(
            'title' =>'Quiz 7'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-7-quiz');
        echo view('chapters/templates/chapter-footer');
    }

    public function quiz8(){
        $data = array(
            'title' =>'Quiz 8'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-8-quiz');
        echo view('chapters/templates/chapter-footer');
    }

    public function quiz9(){
        $data = array(
            'title' =>'Quiz 9'
        );
        echo view('chapters/templates/chapter-header',$data);
        echo view('chapters/quizzes/chapter-9-quiz');
        echo view('chapters/templates/chapter-footer');
    }
}
?>