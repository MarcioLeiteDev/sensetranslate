@extends('dashboard')

@section('title' , 'Area Administrativa')

@section('content')

@if(session('mensagem'))
    <div class="alert alert-success" role="alert">
        {{ session('mensagem') }}
    </div>
@endif
<div class="container">
    <h3>Usuarios Show</h3>
    <hr>

    <div class="col-12">
        <h3>Visualizar Usuario</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Nivel</th>
                    <th>Editar</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $valor)
                <tr>
                    <td>{{$valor->name}}</td>
                    <td>{{$valor->email}}</td>
                    <td>
                        @if($valor->level === 1)
                        CLIENTE
                        @endif
                        @if($valor->level === 2)
                        PARCEIRO
                        @endif
                        @if($valor->level === 3)
                        MASTER
                        @endif
                        </td>
                    <td><a href="/dashboard/usuarios/show/{{$valor->id}}"><i class="bi bi-pencil"></i></a></td>
                    <td><a href="/dashboard/usuarios/destroy/{{$valor->id}}"><i class="bi bi-trash"></i></a></td>
                </tr>
                @endforeach
              
            </tbody>

        </table>

    </div>

    {{ $result }}
    
   
</div>

@endsection