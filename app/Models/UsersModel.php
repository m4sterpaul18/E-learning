<?php

namespace App\Models;
use CodeIgniter\Model;

class UsersModel extends Model{
    // users table in the database
    protected $table = 'users';
    // allowed fields only to be manipulated 
    protected $allowedFields = ['firstname','lastname','section','student-id','password'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    //things to do before you insert data to database
    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    //function to hash/encrypt the password 
    protected function passwordHash(array $data){
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
        }
        return $data;
    }
}

?>