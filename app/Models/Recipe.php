<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//DELETEリクエストのための宣言

class Recipe extends Model
{
    use HasFactory;
    use SoftDeletes;//DELETEリクエストのための宣言
    
    //新着順の並び替え
    public function getPaginateByLimit(int $limit_count = 10)//10個表示
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);//ページネーション
    }
    
    //Welcome画面での新着順の並び替え
    public function getPaginateByLimit_welcome(int $limit_count = 5)//10個表示
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);//ページネーション
    }
    
    //fillableの定義　これで指定したカラムをレシピ作成の際にDBに登録できる
    protected $fillable = [
    'title',
    'ingredients',
    'recipe',
    'introduction',
    'image_path',
    ];
    
    //タグに対するリレーション
    public function tags(){
    ///レシピは多数のタグを持っている
    return $this->belongsToMany(Tag::class);
    }
}
