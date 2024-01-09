@extends('dashboard')

@section('title' , 'Area Administrativa')

@section('content')
<div class="container">
    <h3>Usuarios</h3>
    <hr>
    <table class="table">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Nivel</th>
        <th>Editar</th>
        <th>Remover</th>
    </thead>

    <tbody>
        @foreach($user as $users)
        <tr>
        <td>{{ $users['name'] }}</td>
        <td>{{ $users['email'] }}</td>
        <td>
            @if($users['level'] === 1)
                CLIENTE
            @endif
            @if($users['level'] === 2 )
                PARCEIRO
            @endif
            @if($users['level'] === 3 )
                MASTER
            @endif
          </td>
        <td><a href="{{ route('dashboard' )  }}"><i class="bi bi-pencil"></i></a></td>
        <td> <a href="##"><i class="bi bi-trash"></i></a></td>
        </tr>
        @endforeach
    </tbody>

    </table>
    
   {{ $user }}
</div>

@endsection