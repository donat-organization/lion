<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {  
    
    public function products() {
        return $this->hasMany('App\Modules\Product\Models\Product');
    } 
}
