<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     $posts = [
//         [
//             'title' => 'Bài Post 1',
//             'content' => 'Nội dung của bài post 1...',
//             'author' => 'Người viết 1',
//             'created_at' => '2024-03-14',
//         ],
//         [
//             'title' => 'Bài Post 2',
//             'content' => 'Nội dung của bài post 2...',
//             'author' => 'Người viết 2',
//             'created_at' => '2024-03-15',
//         ],
//         [
//             'title' => 'Bài Post 3',
//             'content' => 'Nội dung của bài post 3...',
//             'author' => 'Người viết 3',
//             'created_at' => '2024-03-16',
//         ],
//         [
//             'title' => 'Bài Post 4',
//             'content' => 'Nội dung của bài post 4...',
//             'author' => 'Người viết 4',
//             'created_at' => '2024-03-17',
//         ],
//     ];
    
//     return view('test', compact('posts'));
// });

Route::get('/', function(){
    return view('admin');
});