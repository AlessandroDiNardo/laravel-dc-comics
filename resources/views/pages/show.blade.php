@extends('layouts.main-layout')
@section('content')
<h1>PERSONS</h1>
<ul>

    <li>
        <strong>Full Name : </strong> {{$person -> firstName}} {{$person -> lastName}} <br>
        <strong>Date Of Birth : </strong>{{$person -> dateOfBirth}} <br>
        <strong>Height :</strong> {{$person -> height}} cm
    </li>


</ul>
@endsection