@extends('layouts.app')

@section('content')

    <h1 class="mb-5">Usuarios</h1>
    <div class="table-responsive borde_azul">

    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>PERMISOS</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td class="@if($user->role == "admin") table-primary @else table-danger @endif">@if($user->role == "admin") Acceso concedido @else Acceso denegado @endif</td>
            </tr>

        @endforeach
    </table>
    </div>

@endsection
