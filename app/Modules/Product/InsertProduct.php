<?php
namespace App\Modules\Product;

use App\Modules\Product\Models\Product;

class InsertProduct{

    public function insert($data) {
        $product = new Product();
        $product->user_id = $data['user_id'];
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->save();
    }

}
