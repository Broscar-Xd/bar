@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Editar Menu </h3>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('menus.update',['menu'=>$menu->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
                        <div class="form-group">
            <label for="bar_id">Bar</label>
            <select class="form-control" name="bar_id" id="bar_id">
                @foreach((\App\Bar::all() ?? [] ) as $bar)
                <option value="{{$bar->id}}"
                    @if($menu->bar_id == old('bar_id', $bar->id))
                    selected="selected"
                    @endif
                >{{$bar->nombre}}</option>

                @endforeach
            </select>
        </div>
                

                                                        <div class="form-group">
            <label for="nombre">Nombre</label>
                    <input class="form-control String"  type="text"  name="nombre" id="nombre" value="{{old('nombre',$menu->nombre)}}"
                                    required="required"
                        >
                    @if($errors->has('nombre'))
            <p class="text-danger">{{$errors->first('nombre')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="precio">Precio</label>
                    <input class="form-control Decimal"  type="text"  name="precio" id="precio" value="{{old('precio',$menu->precio)}}"
                                    required="required"
                        >
                    @if($errors->has('precio'))
            <p class="text-danger">{{$errors->first('precio')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="disponible">Disponible</label>
                    <input class="form-control String"  type="text"  name="disponible" id="disponible" value="{{old('disponible',$menu->disponible)}}"
                                    required="required"
                        >
                    @if($errors->has('disponible'))
            <p class="text-danger">{{$errors->first('disponible')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="descripcion">Descripcion</label>
                    <textarea class="form-control Text"  name="descripcion" id="descripcion" cols="30" rows="10">{{old('descripcion',$menu->descripcion)}}</textarea>
                    @if($errors->has('descripcion'))
            <p class="text-danger">{{$errors->first('descripcion')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit">Grabar</button>
            <a href="{{route('menus.index')}}" class="btn btn-primary">Regresar</a>
        </div>
    </form>
    </div>
        </div>

</div>
@endsection