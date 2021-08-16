@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{--  <div class="card-header"></div>  --}}

                <div class="card-body">
                    <label for="mark">Marca</label>
                    <input type="text" class="form-control" name="mark" value="{{ isset($truck->mark)?$truck->mark:'' }}"  id="mark">
                    <br>
                    <label for="mark">Modelo</label>
                    <input type="text" name="model" class="form-control" value="{{ isset($truck->model)?$truck->model:'' }}" id="model">
                    <br>
                    <label for="color">Color</label>
                    <input type="text" name="color" class="form-control" value="{{ isset($truck->color)?$truck->color:'' }}" id="color">
                    <br>
                    <label for="coment">Comentario</label>
                    <textarea name="coment" cols="30" class="form-control" rows="10" id="coment">{{ isset($truck->coment)?$truck->coment:'' }}</textarea>
                    <br>
                    <label for="value">Valor</label>
                    <input type="number" class="form-control" readonly value="{{ isset($valor)?$valor:'' }}" id="value">
                    <br>
                    <label for="weight">Peso</label>
                    <input type="number" readonly class="form-control" value="{{ isset($peso)?$peso:'' }}" id="weight">
                    <br>
                    <label for="ammount">Cantidad</label>
                    <input id="ammount" type="number" readonly class="form-control" value="{{ isset($cantidad)?$cantidad:'' }}">
                    <br>
                    <input type="submit" class="btn btn-success"value="Guardar Datos">
                    <a class="btn btn-primary"href="{{ url('truck/') }}">Regresar</a>                                     
                </div>
            {{--  </div>  --}}
        </div>
    </div>
</div>
@endsection


