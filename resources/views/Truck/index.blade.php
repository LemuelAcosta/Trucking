@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{ url('truck/create') }}" class="btn btn-primary">Crear Camion</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Codigo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trucks as $truck)
            <tr>
                <td>{{ $truck->id }}</td>
                <td>{{ $truck->mark }}</td>
                <td>{{ $truck->model }}</td>
                <td>{{ $truck->color }}</td>
                <td>
                    <a class="btn btn-primary"href="{{ url('/truck/'.$truck->id.'/edit')}}">
                        Editar
                    </a> 
                    <a class="btn btn-primary"href="{{ url('/truck/'.$truck->id.'/washers')}}">
                        Lavadora
                    </a> 
                <form action="{{ url('/truck/'.$truck->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('Deseas borrar?');" value="Eliminar">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection