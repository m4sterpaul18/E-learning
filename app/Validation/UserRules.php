<?php

namespace App\Validation;
use App\Models\UsersModel;

class UserRules extends UsersModel{

    public function validateUser(string $str, string $fields, array $data){
        $model = new UsersModel();
        $user = $model->where('student-id',$data['student-id'])
                      ->first();

        if(!$user){
            return false;
        }

        return password_verify($data['password'],$user['password']);

    }

}

?>