@extends('layouts.app')

@section('content')


    <div class="container vbooks" style="margin-top: 12%">
        <h1>All Reports</h1>

        <table class="table table-hover" style="font-size: 25px;background-color: white">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>Email</th>
                <th>Type</th>
                <th>content</th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $index => $val)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$val->name}}</td>
                    <td>{{$val->email}}</td>
                    <td >{{$val->select}}</td>
                    <td >{{$val->content}}</td>
                    <td style="padding-right: 35px">
                        <form action="{{ route('delete_report',$val->id) }}" method="POST">
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
