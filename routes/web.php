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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/list-books',[BookController::class,'list_books'])->name('list-books');
Route::get('/list-book-high-price',[BookController::class,'list_book_desc'])->name('list-book-desc');
Route::get('/list-book-low-price',[BookController::class,'list_book_asc'])->name('list-book-asc');
Route::get('/book-detail',[BookController::class,'book_detail'])->name('book-detail');
    Route::get('/category/{id}', function ($id) {
        $title = 'Book Category';
        $cate = new CategoryModel();
        $listCate = $cate::all();
        $listBook = DB::table('books')
        ->where('category_id', '=', $id)
        ->get();
        return view('books.list', compact('title','listBook','listCate'));
    })->name('category');
    Route::get('/book/{id}', function ($id) {
        $title = "Book Detail";
        $bookdetail = DB::table('books')
            ->where('id', $id)
            ->first();
        return view('books.detail', compact('title','bookdetail'));
    })->name('book-detail');