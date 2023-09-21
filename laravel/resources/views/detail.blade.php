@extends('layouts.base')
@section('title', 'Главная')
@section('main')
<div class="container">
    <h2>{{$bb->title}}</h2>
    <p>{{$bb->content}}</p>
    <p>{{$bb->price}} руб.</p>
    <p><a href="{{ route('index') }}">на перечень объявлений</a></p>
</div>
@endsection('main')
