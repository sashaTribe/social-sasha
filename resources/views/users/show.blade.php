@extends('layouts.app')

@section('title', 'User details')

@section('content')
    <ul>
        <li> First name: {{ $user->firstname }} </li>
        <li> Surname: {{ $user->surname }} </li>
        <li> Username: {{ $user->username }} </li>
        <li> Email: {{ $user->email }} </li>
    </ul>
@endsection