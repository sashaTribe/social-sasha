
@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <p>Users in Social Sasha: </p>
    <ul>
    @foreach($users as $user)
        <li><a href="/users/{{$user -> id}}">{{ $user->firstname  }}</li>
    @endforeach
    </ul> 
@endsection
    