@extends('templates.layout')
@section('content')
    <h3>{{$title}}</h3>
    <form action="{{route('edit-book',$bookDetail->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="id" value="{{$bookDetail->id}}">
            <label class="form-label">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$bookDetail->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Thumbnail:</label>
            <input type="text" class="form-control" name="thumbnail" value="{{$bookDetail->thumbnail}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Author:</label>
            <input type="text" class="form-control" name="author" value="{{$bookDetail->author}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Publisher:</label>
            <input type="text" class="form-control" name="publisher" value="{{$bookDetail->publisher}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Publication:</label>
            
            <input type="datetime-local" class="form-control" name="publication" value="{{$bookDetail->publication}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Price:</label>
            
            <input type="text" class="form-control" name="price" value="{{$bookDetail->price}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Quality:</label>
            
            <input type="text" class="form-control" name="quality" value="{{$bookDetail->quality}}">
        </div>
        <div class="mb-3">
        <label class="form-label">Quality:</label>    
        
        <select class="form-select" aria-label="Default select example" name="category_id">
        @foreach ($listCate as $cate)
        <option value="{{$cate->id}}" @if ($cate->id === $bookDetail->category_id)
            selected
        @endif>{{$cate->name}}</option>
        @endforeach
        </select>
    </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection

