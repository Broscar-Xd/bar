@extends('layouts.app')
@section('content')
<div class="container">

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> Campus </h4>
                </div>
                <div class="col-4" style="text-align:right;padding-right:35px"> 
                    <a href="{{route('campus.create')}}" class="btn btn-success">Nuevo</a>
                </div>
            </div>
        </>
    <div class="card-body">

    <table class="table table-striped">
        @if(count($campus))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                                <td>Nombre</td>
                
                                                <td>Direccion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($campus as $campu)
            <tr>
                <td>
                    <a href="{{route('campus.show',['campu'=>$campu] )}}" class="btn btn-info">Ver</a>
                    <a href="{{route('campus.edit',['campu'=>$campu] )}}" class="btn btn-primary">Editar</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-campu-{{$campu->id}}').submit();" class="btn btn-danger">
                        Borrar
                    </a>
                    <form id="delete-campu-{{$campu->id}}" action="{{route('campus.destroy',['campu'=>$campu])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                <td>{{$campu->nombre}}</td>
                                                                <td>{{$campu->direccion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Existen Datos que Mostrar...</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection