@extends('dashboard')

@section('title' , 'Area Administrativa')

@section('content')
<div class="container">
    <h3>Home</h3>
    <hr>
    <p>Ola {{ Auth::user()->name }} , você está logado(a). {{ Auth::user()->level }}</p>
</div>

@endsection