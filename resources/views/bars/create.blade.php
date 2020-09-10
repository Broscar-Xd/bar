@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <body background="https://cdn.pixabay.com/photo/2016/11/21/17/58/green-1846861_1280.jpg">
<div class="container">
    <div class="card">

        <div class="card-header">
            <h3>Crear Bar </h3>
        </div>
        <div class="card-body">

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul @endif <form action="{{route('bars.store')}}" method="POST" novalidate>
        @csrf
                        <div class="form-group">
            <label for="campus_id">Campus</label>
            <select class="form-control" name="campus_id" id="campus_id">
                @foreach((\App\Campus::all() ?? [] ) as $campus)
                <option value="{{$campus->id}}">
                    {{$campus->nombre}}</option>
                @endforeach
            </select>
        </div>
                                
                                                        <div class="form-group">
            <label for="nombre">Nombre</label>
                        <input class="form-control String"  type="text"  name="nombre" id="nombre" value="{{old('nombre')}}"             maxlength="50"
                                    required="required"
                        >
                        @if($errors->has('nombre'))
            <p class="text-danger">{{$errors->first('nombre')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="abierto">Abierto</label>
                        <input class="form-control String"  type="text"  name="abierto" id="abierto" value="{{old('abierto')}}"             maxlength="2"
                                    required="required"
                        >
                        @if($errors->has('abierto'))
            <p class="text-danger">{{$errors->first('abierto')}}</p>
            @endif
        </div>
                                                                        <div>
            <button class="btn btn-success" type="submit">Grabar</button>
            <a href="{{route('bars.index')}}" class="btn btn-primary">Regresar</a>
        </div>
        </form>
        </div>
    </div>
</div>
@endsection