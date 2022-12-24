@extends('layouts.app')

@section('tite', 'Sign Up page')

@section('content')
    <form methods="POST" action="{{ route('users.store')}}">
        @csrf
        <p>Email: <input type="text" name="email"></p>
        <p>First name: <input type="text" name="firstname" ></p>
        <p>Surname: <input type="text" name="surname" ></p>
        <p>Create Username: <input type="text" name="username"></p>
        <p>Password: <input type="text" name="password"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('users.index') }}">Cancel</a>
    </form>