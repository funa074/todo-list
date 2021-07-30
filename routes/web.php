<?php

use App\Http\Controllers\HomeController;
use Facade\Ignition\Http\Controllers\HealthCheckController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/hello', [HomeController::class, 'top']); 
// helloでリクエストがきた時に、Home コントローラーの top アクションへ処理を流す。

Route::get('/hello/{id}', [HomeController::class, 'show'])->where('id', '[0-9]+');
// ->where('id', '[0-9]+')をつけることで、idには整数値が入ることを明示している。
// ('id', '[0-9]+');は1桁以上の数字しかidに入らない様にしている。（セキュリティ対策）

Route::get('/hello/new', [HomeController::class, 'new']);
// hello/newにリクエストされた時に、Homeコントローラーの newアクションを呼び出し

Route::post('/hello/create', [HomeController::class, 'create']);
// 入力フォームからpostリクエストがきたらcreateアクションが作動

Route::get('/hello/edit/{id}', [HomeController::class, 'edit'])->where('id', '[0-9]+');
// hello/edit/id名へのリクエストをeditメソッドへ返し、idで値を受け取り

Route::post('hello/update/{id}', [HomeController::class,'update'])->where('id', '[0-9]+');
// hello/edit/id名へのリクエストがきたらupdateアクションに処理を渡す。

Route::get('hello/delete/{id}', [HomeController::class, 'destroy'])->where('id', '[0-9]+');
// hello/delete/id名へのリクエストがきたらdeleteアクションに処理を渡す。