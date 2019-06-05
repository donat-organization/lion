<?php

namespace App\Modules\User\Repository;

use App\Modules\User\Models\User;

Class UserRepository {
    
    private $model;

    public function __construct() {
        $this->model=new User();
    }

    public function getAll() {
        return $this->model->get();
    }

    public function getByEmail($email) {
        return $this->model->where('email', $email)->first();
    }

    public function getByUserId($userId) {
        return $this->model->where('id', $userId)->first(); 
    }

}










