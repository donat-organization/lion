<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\User\Repository\UserRepository;

class UserController extends Controller
{
     
    public function getAllUser(Request $request)
    {

        $userRepo = new UserRepository();
        return response()->json($userRepo->getAll());
    }

     
    
}
