<?php


namespace App\Controllers;

class Profiles extends BaseController{
    public function search($studentId="2018-01918"){
        $db = db_connect();
        $builder = $db->table('users');

        $query = $builder->getWhere(['student-id' => $studentId]);

        // print_r($query->getResult());

        if(!empty($query->getResult())){
            // echo 'success';
            $row = $query->getRow();      
            $data = [
                "firstname" => $row->firstname,
                "lastname" => $row->lastname,
                "section" => $row->section,
                "studentId" =>$row->{'student-id'}
            ];
        }else{
            // echo 'id not found';
            $data = [
                "error" => "Student Not Found!"
            ];
        };

        // print_r($data);

        echo view('template/sidenav',$data);
		echo view('dashboard/searchprofile');
		echo view('template/footer');
    }
}