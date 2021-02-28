<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model{
    
    public function brands(){
        return $this->hasMany(Brand::class);
    }

    public function products(){
        return $this->hasMany(Category::class);
    }

    public $fillable = [
        'name',
        'description',
        'image'
    ];

}
    