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
}
?>