<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $primaryKey = 'car_id';
    use HasFactory;

    public function brands(){
        return $this->belongsToMany(Brand::class,'brand_by_car','car_id','brand_id');
    }

    protected $fillable = ['model','description','price','mileage'];
}
