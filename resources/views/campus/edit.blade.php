@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Editar Campu </h3>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('campus.update',['campu'=>$campu->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
        

                                        <div class="form-group">
            <label for="nombre">Nombre</label>
                    <input class="form-control String"  type="text"  name="nombre" id="nombre" value="{{old('nombre',$campu->nombre)}}"
                                    required="required"
                        >
                    @if($errors->has('nombre'))
            <p class="text-danger">{{$errors->first('nombre')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="direccion">Direccion</label>
                    <input class="form-control String"  type="text"  name="direccion" id="direccion" value="{{old('direccion',$campu->direccion)}}"
                                    required="required"
                        >
                    @if($errors->has('direccion'))
            <p class="text-danger">{{$errors->first('direccion')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit">Grabar</button>
            <a href="{{route('campus.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </form>
    </div>
        </div>

</div>
@endsection