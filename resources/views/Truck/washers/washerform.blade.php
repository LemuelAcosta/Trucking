@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-header">Creacion de lavadoras</div> 

                <div class="card-body">
                    <label for="mark">Marca</label>
                    <input type="text" class="form-control" name="mark" value="{{ isset($washer->mark)?$washer->mark:'' }}"  id="mark">
                    <br>
                    <label for="color">Modelo</label>
                    <input type="text" name="model" class="form-control" value="{{ isset($washer->model)?$washer->model:'' }}" id="model">
                    <br>
                    <label for="value">Valor</label>
                    <input type="number" name="value" class="form-control" value="{{ isset($washer->value)?$washer->value:'' }}" id="value">
                    <br>
                    <label for="weight">Peso</label>
                    <input type="number" name="weight" class="form-control" value="{{ isset($washer->weight)?$washer->weight:'' }}" id="weight">
                    <br>
                    <input type="submit" class="btn btn-success"value="Guardar Datos">
                    {{-- <a class="btn btn-secondary"href="{{ url('truck') }}">Regresar</a>                     --}}
                </div>
             </div> 
        </div>
    </div>
</div>
@endsection


