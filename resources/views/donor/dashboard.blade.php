@extends('layouts.app')
@section('title')
    Donor Dashboard
@endsection
@section('content')

<h1>
    {{ Auth::user()->name }}
    <br>
    This is Donor Dashboard.
    <br>
    <a href="{{ route('donor.logout') }}">Logout</a>
</h1>
@endsection
