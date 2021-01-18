@extends('layouts.app')

@section('content')
    <h2 style="text-align:center; margin-top: 100px; font-size: 55px ; color:orange">Our Team</h2>
    <div class="row" style="text-align: center; margin: auto auto;">
        <div class="column">
            <div class="card">
                <img src="{{asset('yhya.jpeg')}}" alt="Yahya" style="width:100%; height:300px;">
                <div class="container">
                    <h2>Yahya Abu Musameh</h2>
                    <p class="title">ios mobile developer</p>
                    <p>hi.. i'm Yahya, i'm happy</p>
                    <p style="color:  #5383d3; font-weight: bold;">yahya@gmail.com</p>
                    <p><a  class="button" href="mailto:yahya@gmail.com">Contact</a></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="{{asset('alaa.jpg')}}" alt="Alaa" style="width:100%; height:300px;">
                <div class="container">
                    <h2>Alaa Alshaer</h2>
                    <p class="title">Andriod mobile developer</p>
                    <p>hi.. i'm Alaa, i'm good developer</p>
                    <p style="color:  #5383d3; font-weight: bold;">asd2017591@gmail.com</p>
                    <p><a class="button" href="mailto:asd2017591@gmail.com">Contact</a></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="{{ asset('hasan.jpg') }}" style="width:100%; height:300px;">
                <div class="container">
                    <h2>Hassan Yacob</h2>
                    <p class="title">php Web developer</p>
                    <p>hi.. i'm hassan</p>
                    <p style="color:  #5383d3; font-weight: bold;">hassan@gmail.com</p>
                    <p><a class="button" href="mailto:hassan@gmail.com">Contact</a></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="{{ asset('saleh.jpg') }}" alt="Saleh" style="width:100%; height:300px;">
                <div class="container">
                    <h2>Saleh T. Marouf</h2>
                    <p class="title">laravel Web developer</p>
                    <p>hi.. i'm Saleh...I study in Iug</p>
                    <p style="color:  #5383d3; font-weight: bold;">saleh.t.marouf@gmail.com</p>
                    <p><a class="button" href="mailto:stm1998@hotmail.com">Contact</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
