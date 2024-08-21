<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    
    //いいね機能
    //userへの１対１
    public function user() {
    return $this->belongsTo(User::class);
    }
    
    //Recipeへの１対１
    public function recipe() {
    return $this->belongsTo(Recipe::class);
    }
    //いいね機能ここまで
}
