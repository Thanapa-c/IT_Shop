<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
        protected $table = 'products';
        protected $primaryKey = 'id';
        protected $guarded = [];
        public function productType()
        {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
