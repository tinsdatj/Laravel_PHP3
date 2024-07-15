@extends('templates.layout')
@section('content')
    <h3>{{$title}}</h3>
    <ul class="list-group">
        <li class="list-group-item">Title: {{$bookdetail->title}}</li>
        <li class="list-group-item">Thumbnail: {{$bookdetail->thumbnail}}</li>
        <li class="list-group-item">Author: {{$bookdetail->author}}</li>
        <li class="list-group-item">publisher: {{$bookdetail->publisher}}</li>
        <li class="list-group-item">publication: {{$bookdetail->publication}}</li>
        <li class="list-group-item">price: {{$bookdetail->price}}</li>
        <li class="list-group-item">quality: {{$bookdetail->quality}}</li>
        <li class="list-group-item">category: {{$catename->name}}</li>  
      </ul>

@endsection