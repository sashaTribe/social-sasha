@extends('layouts.app');

@section('title', 'Users')

@section('content')
    <p>Users in Social Sasha: </p>
    <ul>
        @foreach($users as $user)
            <li>{{ $user -> username}}</li>
        @endforeach
    </ul>