@extends('templates.layout')
@section('content')
    <h3>{{$title}}</h3>
    @if (Session::has('list-cate'))
    <h3>{{$catename->name}}</h3>
    @endif
    <div class="container mb-3">
    <a class="btn btn-success" href="{{route('list-book-desc')}}">Top 8 Sách giá cao nhất </a>
    <a class="btn btn-success" href="{{route('list-book-asc')}}">Top 8 Sách giá thấp nhất</a>
    </div>

    
    <div class="container mb-3 d-flex justify-content-between">
        <div>
            @foreach($listCate as $lcate)
        <a class="btn btn-primary" href="{{route('category',['id'=>$lcate->id])}}">{{$lcate->name}}</a>
        @endforeach
        </div>
        <div>
            <a class="btn btn-info" href="{{route('add-book')}}">Add Book</a>
        </div>
    
    </div>

    <table class="table table-hover mt-2">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Thumbnail</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publication</th>
            <th>Price</th>
            <th>Quality</th>
            <th>Category ID</th>
            <th>Action</th>
        </tr>

            @foreach($listBook as $lst)
                <tr>
                    <th>{{$lst->id}}</th>
                    <th><a href="{{route('book-detail',['id'=>$lst->id])}}">{{$lst->title}}</a> </th>
                    <th><img src="{{$lst->thumbnail}}" alt="" width="50%"></th>
                    <th>{{$lst->author}}</th>
                    <th>{{$lst->publisher}}</th>
                    <th>{{$lst->publication}}</th>
                    <th>{{$lst->price}}</th>
                    <th>{{$lst->quality}}</th>
                    <th>{{$lst->category_id}}</th>
                    <th><a class="btn btn-primary"  href="{{route('edit-book',['id'=>$lst->id])}}" >Sửa</a>
                        <a class="btn btn-danger" href="{{route('delete-book',['id'=>$lst->id])}}" onclick=" return confirm('Ban co muon xoa khong')" >Xóa</a></th>
                </tr>
            @endforeach

    </table>
@endsection