@extends('layouts.app')
@section('content')
    <div class="container  vbooks" style="max-height: 1000px">

        <div class="car" style="display: inline">
            <div class="img" style="  float: left;">
                <img style="width: 300px ; height: 300px ;margin-top: 70px ;margin-left: 30px ;background-size: cover;"
                     src="{{ asset('images.jpeg') }}" alt="Girl in a jacket"
                     width="500" height="600">
            </div>
            <div class="disc"  style="  float: left; margin: 100px">
                <h1>{{$book->name}}</h1>
                <p style=" color: #ded7d7 ; font-size: 30px; max-width: 400px">{{$book->describe}}</p>
                <div class="buttons" style="margin-top: 50px ; width: 100%">
                    <a href="/book/{{$book->id}}/download"><button  type="button"  class="btn btn-outline-secondary" style="width: 100%">Download Now ! </button></a>
                </div>
            </div>
        </div>
    </div>



@endsection
