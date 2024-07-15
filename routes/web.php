<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryModel;
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
//     return view('welcome');
// });
Route::get('/',[BookController::class,'list_books'])->name('list-books');
Route::get('/list-book-high-price',[BookController::class,'list_book_desc'])->name('list-book-desc');
Route::get('/list-book-low-price',[BookController::class,'list_book_asc'])->name('list-book-asc');
Route::get('/book-detail',[BookController::class,'book_detail'])->name('book-detail');
Route::get('/category/{id}', [BookController::class,'list_book_cate'])->name('category');
Route::get('/book/{id}',[BookController::class,'book_detail'])->name('book-detail');

//Them sach
Route::match(['GET','POST'],'/add-book',[BookController::class,'add_book'])->name('add-book');
//Sua sach
Route::match(['GET','POST'],'/edit-book/{id}',[BookController::class,'edit_book'])->name('edit-book');
//Xoa sach
Route::get('/delete-book/{id}', [BookController::class, 'delete_book'])->name('delete-book');