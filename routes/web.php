<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;//Recipeコントローラーの宣言
use App\Http\Controllers\LikeController;//Likeコントローラーの宣言

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})/*->middleware('auth')*/;
/*
//レシピ一覧表示
Route::get('/recipes_updated', [RecipeController::class, 'index']);

//レシピ作成
Route::get('/recipes/create', [RecipeController::class, 'create']);
Route::post('/recipes', [RecipeController::class, 'store']);

//レシピ詳細表示
Route::get('/recipes/{recipe}', [RecipeController::class,'show']);
// '/recipes/{対象データのID}'にGetリクエストが来たら、RecipeControllerのshowメソッドを実行する

//レシピ編集
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit']);
Route::put('/recipes/{recipe}', [RecipeController::class, 'update']);

//レシピ削除
Route::delete('/recipes/{recipe}', [RecipeController::class,'delete']);
*/
//ここから下は一旦放置

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(RecipeController::class)->/*middleware('auth')->*/group(function(){
    Route::get('/' , 'updated_welcome')->name('recipes_updated_welcome');//レシピの新着表示(5件)
    Route::get('/recipes_updated', 'updated')->name('recipes_updated');//レシピの新規表示(10件)
    Route::post('/recipes', 'store')->name('recipe_store');//レシピの新規作成
    Route::get('/recipes/create', 'create')->name('recipe_create');//レシピの新規作成
    Route::get('/recipes/{recipe}', 'show')->name('recipe_show');//レシピの詳細表示
    Route::put('/recipes/{recipe}', 'update')->name('recipe_update');//レシピの編集
    Route::delete('/recipes/{recipe}', 'delete')->name('recipe_delete');//レシピの削除
    Route::get('/recipes/{recipe}/edit', 'edit')->name('edit');//レシピの編集
    Route::post('/recipes/{recipe}/like', 'like')->name('like');//レシピのいいね機能
    Route::delete('/recipes/{recipe}/like', 'unlike')->name('unlike');//レシピのいいね取り消し機能
});

Route::controller(LikeController::class)->middleware('auth')->group(function(){
    Route::post('/recipes/{recipe}/like', [LikeController::class, 'like'])->name('recipe_like');
    Route::delete('/recipes/{recipe}/like', [LikeController::class, 'unlike'])->name('recipe_unlike');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
