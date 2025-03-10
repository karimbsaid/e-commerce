<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $guarded =null;
    public function products(){
        return $this->hasMany(Product::class,'laptops_id');
    }

}
