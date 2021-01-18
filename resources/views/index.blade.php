@extends('layouts.app')
@section('content')

    <div class="col1">
        <h1 class="welcome">Library Project</h1>
        <h2 class="hello">The love begin with smile</h2>
        <h2 class="hello">So, smile </h2>
    </div>
    <div class="container vbooks" style="max-width:990px">
        <p style="font-size:50px ;font-weight: bold;; color: #0c0c0c ;margin-left: 50px; display: block; "><big>All
                Books: </big></p>
        <br>
        <div class="row">
            @foreach($data as $dat)
                {{--            <h1>{{$dat->name}}</h1>--}}
                <div class="col-lg-4 col-md-6">
                    <a href="/book/{{$dat->id}}/info">
                        <div class="gg">
                            <div class="book-bg" >
                                <div class="book-cover">
                                    <img style="width: 100% ; height: 100%;background-size: cover;"
                                                             src="{{ asset('images.jpeg') }}" alt="Girl in a jacket"
                                                             width="500" height="600">
                                </div>
                            </div>
                            <h3>{{$dat->name}}</h3>
                            <p>{{$dat->describe}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <div style="margin-left: 50% ;margin-left: 50% ;display: inline">
        <a href="#" style=" color: white">❮❮❮❮</a>
        <a href="#" style="margin-left: 18px;color: white">❯❯❯❯</a>
    </div>
    <br>
    <br>
    <br>
    <div class="footer">
        <br>
        <div>
            <big><p style="color: white; margin-left: 20px">follow us on instagram:<a href="#"
                                                                                      style="text-decoration: none">
                        instagram</a></p></big>
            <big><p style="color: white;margin-left: 20px">follow us on facebook:<a href="#"
                                                                                    style="text-decoration: none">
                        facebook </a></p></big>
            <p></p>
            <h1 align="center" ; id="1" style="color: whitesmoke"> made with love
                <x id="2" style="color: red"> &hearts;</x>
            </h1>
            <br>
        </div>
    </div>

@endsection
