@extends('layouts.main-layout')
@section('content')
<h1>EDIT A PERSON</h1>
@include('components.error')
<form action="{{ route('person.update',$person) }}"
    method="POST">
    @csrf
    <label for="firstName">First Name : </label>
    <input type="text"
        name="firstName"
        value={{ $person -> firstName }}> <br> <br>
    <label for="lastName">Last Name : </label>
    <input type="text"
        name="lastName"
        value={{ $person -> lastName}}> <br> <br>
    <label for="dateOfBirth">Date Of Birth : </label>
    <input type="date"
        name="dateOfBirth"
        value={{ $person -> dateOfBirth}}> <br> <br>
    <label for="height">Height In CM: </label>
    <input type="number"
        name="height"
        value={{ $person -> height}}> <br> <br>
    <input type="submit"
        value="EDIT">
</form>

@endsection