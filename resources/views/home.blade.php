@extends('layouts.app')

@section('content')

    <div class="cont" >
    <h1 style="margin-top: 130px;margin-left: 30%">  {{ Auth::user()->name.' Profile' }} </h1>
        <div style="margin: 8% 27%;width: 50%">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <a class="btn btn-outline-primary" href="/books" style="font-size: 35px ; color: orange;margin-right:5px " >Books</a>
                <a class="btn btn-outline-primary" href="/reports" style="font-size: 35px ; color: orange;margin-right:5px " >Reports</a>
                <a class="btn btn-outline-primary" href="/Contact" style="font-size: 35px ; color: orange;margin-right:5px " >Contact</a>
                <a class="btn btn-outline-primary" href="/about" style="font-size: 35px ; color: orange;margin-right:5px " >About</a>
                <a class="btn btn-outline-primary" href="/more" style="font-size: 35px ; color: orange;margin-right:5px " >More</a>
            </div>
        </div>
    </div>
@endsection
