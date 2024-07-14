@extends('templates.layout')
@section('content')
    <h3>{{$title}}</h3>
    <ul class="list-group">
        <li class="list-group-item">Title: {{$bookdetail->title}}</li>
        <li class="list-group-item">Title: {{$bookdetail->thumbnail}}</li>
        <li class="list-group-item">Title: {{$bookdetail->author}}</li>
        <li class="list-group-item">Title: {{$bookdetail->publisher}}</li>
        <li class="list-group-item">Title: {{$bookdetail->publication}}</li>
        <li class="list-group-item">Title: {{$bookdetail->price}}</li>
        <li class="list-group-item">Title: {{$bookdetail->quality}}</li>
        <li class="list-group-item">Title: {{$bookdetail->category_id}}</li>
      </ul>

@endsection