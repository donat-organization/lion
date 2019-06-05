<?php
namespace App\Modules\User;

use App\Modules\User\Repository\UserRepository;

class UserValidator {
 
    public function userIsExists($userId) {
        $userRepo = new UserRepository;
        return !!$userRepo->getByUserId($userId);
    }

}
