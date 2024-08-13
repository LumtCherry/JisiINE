<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    //レシピに対するリレーション
    public function recipes(){
    //1つのタグを複数のレシピが使用。
    return $this->belongsToMany(Recipe::class);
    }
}
