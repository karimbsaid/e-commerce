<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded =null; 
    
    use HasFactory;
    public function magaziner(){
        return $this->belongsTo(User::class);
    }
    public function laptops(){
        return $this->belongsTo(Laptop::class);
    }
    public function Phones(){
        return $this->belongsTo(Phone::class);
    }


}
