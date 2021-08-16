@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{ route("truck.washers.create", $truck_id) }}">Nuva lavadora</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Codigo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>value</th>
                <th>Peso</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($washers as $washer)
            <tr>
                <td>{{ $washer->id }}</td>
                <td>{{ $washer->mark }}</td>
                <td>{{ $washer->model }}</td>
                <td>{{ $washer->value }}</td>
                <td>{{ $washer->weight }}</td>
                <td>

                    <form action="{{ route('truck.washers.destroy', [$washer->truck_id, $washer->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection