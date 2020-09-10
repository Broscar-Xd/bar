@extends('layouts.app')
@section('content')
<!DOCTYPE html>

<body background="https://cdn.pixabay.com/photo/2018/03/23/22/11/question-mark-3255140_1280.jpg">
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <br><br><br><br><br>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4> Escoja la carrera </h4>
                        </div>
                        <div class="col-4" style="text-align:right;padding-right:35px">
                            <a href="{{ url('/reportes') }}" class="btn btn-primary">Regresar</a>
                        </div>
                    </div>
                    </>
                    <br>
                    <form method="GET" action="{{ route('reportes.prebar') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group">
                                <select class="custom-select" id="validationServer04"
                                    aria-describedby="validationServer04Feedback">

                                    @foreach($bares as $bar)
                                    <option value="{{$bar->id}}">{{$bar->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="IR">
                            </div>
                        </div>
                    </form>
                </div>
    </body>

    </html>

    @endsection