<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    public function list_books(){
        $title = "List Book";
        $book = new BookModel();
        $listBook = $book::all();
        $cate = new CategoryModel();
        $listCate = $cate::all();
        return view('books.list',compact('title','listBook','listCate'));
    }
    public function list_book_desc(){
        $title = "List Book";
        $book = new BookModel();
        $listBook = $book::Orderby('price','desc')->limit(8)->get();
        return view('books.list',compact('title','listBook'));
    }
    public function list_book_asc(){
        $title = "List Book";
        $book = new BookModel();
        $listBook = $book::Orderby('price')->limit(8)->get();
        return view('books.list',compact('title','listBook'));
    }
    public function book_detail($id){
        $title = "Book Detail";
        $bookdetail = DB::table('books')->where('id',$id)->first();
        return view('books.detail', compact('title','bookdetail'));
    }
}
