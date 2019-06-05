<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Product\InsertProduct;
use App\Modules\User\UserValidator;

class ProductController extends Controller
{
    
    //chain of responsibility
    /*
    $pipeline = new pipeline();
    $pipeline->add(UserValidator::class)
    $pipeline->add(InsertProduct::class)
    $res = $pipeline->execute($request->all())
    return $response($res->data, $res->statusCode)
    */

    /*

    class UserInserter implements TaskExecutor {
        public function run() {
            
        }
    }


    class pipeline {
        private $arr = [];

        public function add($class) {
            $arr[] = $class;
        }

        public function execute($data) {
            foreach ($arr as $c) {
                $res = $c->run($data);
                $data = array_merge($data, $res);
            }
        }
    }

    */



    public function insertProduct(Request $request) {
        //validation
        $userValidator = new UserValidator;
        $userExists = $userValidator->userIsExists($request->input('user_id'));
        if (!$userExists) {
            return response(null, 400);
        }

        $ip= new InsertProduct;
        $ip->insert($request->all());
        return response(null, 200);
    }

 

}

