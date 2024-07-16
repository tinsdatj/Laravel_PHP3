<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\BookModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\confirm;

class BookController extends Controller
{
    public function list_books(){
        $title = "List Book";
        $listBook = DB::table('books')->get();
        $listCate = DB::table('categories')->get();
        return view('books.list',compact('title','listBook','listCate'));
    }
    public function list_book_desc(){
        $title = "List Book";
        $listBook = DB::table('books')->Orderby('price','desc')->limit(8)->get();
        $listCate = DB::table('categories')->get();
        return view('books.list',compact('title','listBook','listCate'));
    }
    public function list_book_asc(){
        $title = "List Book";
        $listBook = DB::table('books')->Orderby('price')->limit(8)->get();
        $listCate = DB::table('categories')->get();
        return view('books.list',compact('title','listBook','listCate'));
    }
    public function book_detail($id){
        $title = "Book Detail";
        $bookdetail = DB::table('books')->where('id',$id)->first();
        $catename = DB::table('categories')->where('id',$id)->first();
        return view('books.detail', compact('title','bookdetail','catename'));
    }
    public function list_book_cate($id){
        $title = "List Book";
        $listCate = DB::table('categories')->get();
        $listBook = DB::table('books')
        ->where('category_id', '=', $id)
        ->get();
        $catename = DB::table('categories')
        ->where('id', 'like', $id)
        ->first();
        session::flash('list-cate');
        return view('books.list', compact('catename','listBook','listCate','title'));
    }

    
    public function add_book(Request $request){ 
        $title = "Them Sach Moi";
        $listCate = DB::table('categories')->get();
        if($request->isMethod('POST')){
            $Addbook = BookModel::create($request->all());
                Session::flash('success', 'Thêm Sach thành công');
                return redirect()->route('list-books');
        }
        return view('books.add', compact('title','listCate'));
    }

    public function edit_book(Request $request,$id){
        $title = "Sua thong tin sach";
        $listCate = DB::table('categories')->get();
        $bookDetail = DB::table('books')->where('id',$id)->first();
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $editbook =BookModel::where('id',$id)->update($params);
            Session::flash('success', 'Sua Sach thành công');
            return redirect()->route('edit-book',['id'=>$id]);
        }
        return view('books.edit',compact('title','bookDetail','listCate'));
    }



    public function delete_book($id){
        $bookDL = DB::table('books')->where('id',$id)->delete();
        if($bookDL){
            Session::flash('success','Xoa Sach thanh cong!');
            return redirect()->route('list-books');
        }
    }


}
