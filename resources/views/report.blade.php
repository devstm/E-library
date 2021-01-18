@extends('layouts.app')
@section('content')

    <div class="form">
        <form action="{{url('/reportUss')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="text" class="form-control" name="email" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
                <label for="in">Name</label>
                <input type="text" class="form-control" name="name" id="in" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">report select</label>
                <select class="form-control" name="select" id="exampleFormControlSelect1" required>
                    <option value="default" >default</option>
                    <option value="Technical">Technical support</option>
                    <option value="Inquiries">Inquiries service</option>
                    <option value="Admin"> call Admin</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">The complaint</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">report</button>
        </form>
    </div>


@endsection
