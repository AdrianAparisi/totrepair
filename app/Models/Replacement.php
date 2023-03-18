<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replacement extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'product_id', 'product_id');
    }
}
