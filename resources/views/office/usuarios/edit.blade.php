@extends('dashboard')

@section('title' , 'Area Administrativa')

@section('content')

@if(session('mensagem'))
    <div class="alert alert-success" role="alert">
        {{ session('mensagem') }}
    </div>
@endif
<div class="container">
    <h3>Usuarios Edit</h3>
    <hr>

    <div class="col-12">
        <h3>Criar Usuario</h3>

        <form action="/dashboard/usuarios/show/{{$result->id}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" value="{{$result->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{$result->email}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="level">Nivel</label>
                <select name="level" class="form-control">
                    <option value="{{$result->level}}">{{$result->level}}</option>
                    <option value="1">Cliente</option>
                    <option value="2">Parceiro</option>
                    <option value="3">Master</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="atualizar" class="btn btn-primary">
            </div>
        </form>
    </div>
    
   
</div>

@endsection