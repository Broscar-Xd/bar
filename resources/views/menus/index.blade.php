@extends('layouts.app')
@section('content')
<body background="https://cdn.pixabay.com/photo/2014/12/21/23/56/hamburger-576419_1280.png">
<div class="container">

    @if(session('status'))
    
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <!--Carrusel-->
    <div id="cm" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#pollo" data-slide-to="0" class="active"></li>
            <li data-target="#chuleta" data-slide-to="1"></li>
            <li data-target="#pescado" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://i.pinimg.com/originals/61/7f/61/617f611c70e12ef91815b4e7b52dee94.jpg" class="d-block w-100" alt="Pollo">
            </div>
            <div class="carousel-item">
            <img src="https://i.pinimg.com/originals/1a/e5/99/1ae59958cff3e651529a6fe2d2643554.jpg" class="d-block w-100" alt="Chuleta">
            </div>
            <div class="carousel-item">
            <img src="https://lh3.googleusercontent.com/proxy/mq3bqr-9eXursrtG5U1A8BkD5RC79cPU7Esi7HtZWhzpKoahixL2UMOqru8FlqAF8chOtXg_c0WWwgNu99_Zi40AWmwxaAisN5LOIM4_mnEQWhMoF41OKJ3ezA0lRFypFKkx95lpp1rLtDPhqeOUxmI-l-BbWNuLdrqIU64AkzDtupeSc-ENmqr5s-n96nyyyA" class="d-block w-100" alt="Pescado">
            </div>
        </div>
        <a class="carousel-control-prev" href="#pollo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#pescado" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <a class="carousel-control-next" href="#chuleta" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      
    </div>
    <!--Fin Carrusel-->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8">
                    <h4> Menus del día </h4>
            </div>
        </>
        <div class="card-body">

            <table class="table table-bordered table-danger">
                @if(count($menus))
                <thead class="bg-dark">
                    <tr>
                        <th style="color:white;">Opciones</th>
                                        
                        <td style="color:white;">Bar</td>       
                            <td style="color:white;">Nombre</td>
                        
                            <td style="color:white;">Precio</td>
                        
                            <td style="color:white;">Disponible</td>
                        
                            <td style="color:white;">Descripcion</td>
                                
                    </tr>

                </thead>
                @endif
                <tbody>
                    @forelse($menus as $menu)
                    <tr>
                        <td>
                            <a href="{{route('menus.show',['menu'=>$menu] )}}" class="btn btn-info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg></a>
                            <a href="{{route('menus.edit',['menu'=>$menu] )}}" class="btn btn-secondary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"/>
        </svg></a>
                            <a href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-menu-{{$menu->id}}').submit();" class="btn btn-danger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.854 4.854a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
        </svg>
                            </a>
                            <form id="delete-menu-{{$menu->id}}" action="{{route('menus.destroy',['menu'=>$menu])}}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                            <td>{{$menu->bar->nombre}}</td>
                            <td>{{$menu->nombre}}</td>
                            <td>{{$menu->precio}}</td>
                            <td>{{$menu->disponible}}</td>
                            <td>{{$menu->descripcion}}</td>
                                                                                                                                        
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
                
                <div class="col-4" style="text-align:left;padding-left  :35px"> 
                    <a href="{{route('menus.create')}}" class="btn btn-success"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M9 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h5v-1H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h5v2.5A1.5 1.5 0 0 0 10.5 6H13v2h1V6L9 1z"/>
  <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M13 12.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
</svg> Nuevo</a>
                </div>
                <div class="col-4" style="text-align:center"> 
                    <a href="../public/preferencias" class="btn btn-info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
</svg> Preferencias</a>
                </div>
                <div class="col-4" style="text-align:right;padding-right  :35px"> 
                    <a href="../public/home" class="btn btn-warning"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
</svg> Regresar</a>
                </div>
            </div>
            </div>
    </div>

</div>

@endsection