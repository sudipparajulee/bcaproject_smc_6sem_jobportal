@extends('layouts.master')
@section('content')
    <form action="{{route('login')}}" method="POST">
        @csrf
        <input type="email" placeholder="Your Email" name="email">
        <input type="password" placeholder="Your Password" name="password">
        <button type="submit">Login</button>
    </form>
@endsection
