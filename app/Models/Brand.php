<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory;

    public function brands(){
        return $this->belongsToMany(Car::class,'brand_by_car');
    }

    protected $fillable = ['name'];
}
