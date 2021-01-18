@extends('layouts.app')
@section('content')

<div class="form">
    <div class="hed">
        <h1 class="text-head"> Add New Book </h1>
    </div>
    <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
        @method('post')
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Book name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter book name" required>
        </div>
        <div class="form-group">
            <label for="describe">Book description</label>
            <input type="text" class="form-control" name="describe" id="describe" placeholder="Describe your book">
        </div>
        <div class="form-group">
            <label for="add-book">choose book:</label>
            <input class="form-control" type="file" name="book" placeholder="add book" id="book" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
