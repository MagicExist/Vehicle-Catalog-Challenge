<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function brands(){
        return $this->belongsToMany(Brand::class,'brand_by_car');
    }

    protected $fillable = ['model','description','price','mileage'];
}
