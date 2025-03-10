<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{   protected $guarded =null; 
    protected $fillable = [
        'capacity',
        'rom',
        'front_camera',
        'back_camera',
        'capteur',
        'reference',
    ];
    use HasFactory;
    public function products(){
        return $this->hasMany(Product::class,'phones_id');
    }

}
