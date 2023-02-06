@extends('layouts.main-layout')
@section('content')
<h1>CREATE A NEW PERSON</h1>
@include('components.errors')
<form action="{{route('person.request')}}"
    method="POST">
    @csrf
    <label for="firstName">First Name : </label>
    <input type="text"
        name="firstName"
        id=""> <br> <br>
    <label for="lastName">Last Name : </label>
    <input type="text"
        name="lastName"
        id=""> <br> <br>
    <label for="dateOfBirth">Date Of Birth : </label>
    <input type="date"
        name="dateOfBirth"
        id=""> <br> <br>
    <label for="height">Height In CM: </label>
    <input type="number"
        name="height"
        id=""> <br> <br>
    <input type="submit"
        value="CREATE">
</form>

@endsection