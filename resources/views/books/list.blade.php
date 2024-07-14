@extends('templates.layout')
@section('content')
    <h3>{{$title}}</h3>
    <a class="btn btn-primary" href="{{route('list-book-desc')}}">Book High Price</a>
    <a class="btn btn-primary" href="{{route('list-book-asc')}}">Book Low Price</a>

    
        @foreach($listCate as $lcate)
        <a class="btn btn-primary" href="{{route('category',['id'=>$lcate->id])}}">{{$lcate->name}}</a>
        @endforeach
    

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
        </tr>

            @foreach($listBook as $lst)
                <tr>
                    <th>{{$lst->id}}</th>
                    <th><a href="{{route('book-detail',['id'=>$lst->id])}}">{{$lst->title}}</a> </th>
                    <th>{{$lst->thumbnail}}</th>
                    <th>{{$lst->author}}</th>
                    <th>{{$lst->publisher}}</th>
                    <th>{{$lst->publication}}</th>
                    <th>{{$lst->price}}</th>
                    <th>{{$lst->quality}}</th>
                    <th>{{$lst->category_id}}</th>
                </tr>
            @endforeach

    </table>
@endsection