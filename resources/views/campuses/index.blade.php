@extends('layouts.app')
@section('content')
<body background="https://ugvc.espe.edu.ec/wp-content/uploads/2019/05/Espe-Latacunga.jpg">
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
            </div>
        </>
    <div class="card-body">

    <table class="table table-bordered table-secondary">
        @if(count($campuses))
        <thead class="bg-dark">
            <tr>
                <th style="color:white;">Opciones</th>
                                
                    <td style="color:white;">Nombre</td>
                
                    <td style="color:white;">Direccion</td>
                
                                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($campuses as $campus)
            <tr>
                <td>
                    <a href="{{route('campuses.show',['campus'=>$campus] )}}" class="btn btn-info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg></a>
                    <a href="{{route('campuses.edit',['campus'=>$campus] )}}" class="btn btn-secondary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"/>
</svg></a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-campus-{{$campus->id}}').submit();" class="btn btn-danger">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.854 4.854a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
</svg>
                    </a>
                    <form id="delete-campus-{{$campus->id}}" action="{{route('campuses.destroy',['campus'=>$campus])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                <td>{{$campus->nombre}}</td>
                <td>{{$campus->direccion}}</td>
                                                                                                                                
            </tr>
            @empty
            <p>No Existen Datos que Mostrar...</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>
    <div class="card-footer text-muted">
    <div class="row">
                
                <div class="col-8" style="text-align:left;padding-left  :35px"> 
                    <a href="{{route('campuses.create')}}" class="btn btn-success">Nuevo</a>
                </div>
                <div class="col-4" style="text-align:right;padding-right  :35px"> 
                    <a href="../public/home" class="btn btn-warning">Regresar</a>
                </div>
            </div>
            </div>
    </div>

</div>

@endsection