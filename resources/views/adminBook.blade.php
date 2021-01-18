@extends('layouts.app')
@section('content')

    <div class="container vbooks" style="margin-top: 12%">
        <h1>All Books</h1>
        <a href="/create-book">
            <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-left:0 ;margin-bottom: 10px;width:100% ">ADD New Book
            </button>
        </a>
        <table class="table table-hover" style="font-size: 25px;background-color: white">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>describe</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $index => $val)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$val->name}}</td>
                    <td >{{$val->describe}}</td>
                    <td>
                        <button type="submit" class="btn btn-primary" style="width: 100%; background-color: #1d68a7">
                            <a href="/update/{{$val->id}}" style="color: white">edit</a>
                        </button>
                    </td>
                    <td style="padding-right: 35px">
                        <form action="{{ route('destroy',$val->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button style="width: 100%; background-color: #fd0023" type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
