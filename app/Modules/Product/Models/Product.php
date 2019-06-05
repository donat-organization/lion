<?php

namespace App\Modules\Product\Models;
 
use Illuminate\Database\Eloquent\Model;

class Product extends Model { 
    
    public function user() {
        return $this->belongsTo('App\Modules\User\Models\User');
    } 
}
