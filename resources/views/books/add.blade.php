@extends('templates.layout')
@section('content')
    <h3>{{$title}}</h3>
    <form action="{{route('add-book')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title:</label>
            @error('name')
            <p style="color: red">{{$message}}</p>
            @enderror
            <input type="text" class="form-control" name="title" >
        </div>
        <div class="mb-3">
            <label class="form-label">Thumbnail:</label>
            @error('phone')
            <p style="color: red">{{$message}}</p>
            @enderror
            <input type="text" class="form-control" name="thumbnail" >
        </div>
        <div class="mb-3">
            <label class="form-label">Author:</label>
            @error('phone')
            <p style="color: red">{{$message}}</p>
            @enderror
            <input type="text" class="form-control" name="author" >
        </div>
        <div class="mb-3">
            <label class="form-label">Publisher:</label>
            @error('address')
            <p style="color: red">{{$message}}</p>
            @enderror
            <input type="text" class="form-control" name="publisher">
        </div>
        <div class="mb-3">
            <label class="form-label">Publication:</label>
            @error('address')
            <p style="color: red">{{$message}}</p>
            @enderror
            <input type="date" class="form-control" name="publication">
        </div>
        <div class="mb-3">
            <label class="form-label">Price:</label>
            @error('address')
            <p style="color: red">{{$message}}</p>
            @enderror
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">Quality:</label>
            @error('address')
            <p style="color: red">{{$message}}</p>
            @enderror
            <input type="text" class="form-control" name="quality">
        </div>
        <div class="mb-3">
        <label class="form-label">Quality:</label>    
        
        <select class="form-select" aria-label="Default select example" name="category_id">
        <option selected>Category</option>
        
        @foreach ($listCate as $cate)
        <option value="{{$cate->id}}">{{$cate->name}}</option>
        @endforeach
        </select>
    </div>
        
        <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </form>

@endsection
