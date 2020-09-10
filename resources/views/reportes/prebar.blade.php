@extends('layouts.app')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body background="https://cdn.pixabay.com/photo/2016/11/22/23/02/aged-1851069_1280.jpg">
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4> Preferencias de menús por bar </h4>
                    </div>
                    <div class="col-4" style="text-align:right;padding-right:35px">
                        <a href="{{route('reportes.index')}}" class="btn btn-warning"><svg width="1em" height="1em"
                                viewBox="0 0 16 16" class="bi bi-backspace-fill" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
                            </svg> Regresar</a>
                    </div>
                </div>

                <br>
                <form method="GET" action=" ">
                    <label><strong>Bares</strong></label>
                    <select class="custom-select" name="select">
                        @foreach($bares as $bar)
                        <option value="{{$bar->id}}">{{$bar->nombre}}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <button class="btn btn-outline-primary" name='submit' type="submit">Ver</button>
                </form>
            </div>

            @if (isset($_GET['submit']))
            <?php $cod_mat=0;?>
            @foreach($menus as $menu)
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="6">{{$menu->nombreBAR}} </th>
                    </tr>
                    <tr>
                        <th>MENÚ</th>
                        <th>FECHA</th>
                        <th>OBSERVACION</th>
                        
                    </tr>
                </thead>
                <tr>
                    <td>{{$menu->nombre}}</td>
                    <td>{{$menu->fecha}}</td>
                    <td>{{$menu->observacion}}</td>
                    
                </tr>
                @endforeach
                @endif


        </div>
        
        @endsection