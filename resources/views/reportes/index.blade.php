<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <body background="https://cdn.pixabay.com/photo/2017/11/08/22/18/spaghetti-2931846_1280.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card bg-dark ">
                        <div class="card-header" style="color:white;">
                            Lista de reportes de los bares
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;" >Aquí tiene un listado de reportes dispnibles</h5>
                            <a href="/espe/public/home" class="btn btn-outline-secondary btn-icon-right">
                                <span style="color:white;" > <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.854 4.646a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L3.207 8l2.647-2.646a.5.5 0 0 0 0-.708z" />
                                        <path fill-rule="evenodd"
                                            d="M10 8a.5.5 0 0 0-.5-.5H3a.5.5 0 0 0 0 1h6.5A.5.5 0 0 0 10 8zm2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z" />
                                    </svg> Regresar

                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">

                    <div class="card" style="width: 18rem;">

                        <div class="card-group">
                            <div class="card card-primary text-center">
                                <img class="card-img-top"
                                    src="https://cdn.pixabay.com/photo/2018/03/07/18/42/menu-3206749_1280.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <div class="card-title">Ver la preferencia de menús por bares</div>
                                </div>
                                <div class="card-footer">
                                    <a href="reportes/prebar" class="btn btn-outline-secondary btn-icon-right">
                                        <span>Ir
                                            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png"
                                                height="24">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="col-sm">

                    <div class="card" style="width: 18rem;">

                        <div class="card-group">
                            <div class="card card-primary text-center">
                                <img class="card-img-top"
                                    src="https://cdn.pixabay.com/photo/2014/07/06/14/13/portfolio-385530_1280.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <div class="card-title">Reportes de materias</div>
                                    <p class="card-text">Aquí podrás ver todo el reporte de las materias con sus
                                        docentes y periodos</p>
                                </div>
                                <div class="card-footer">
                                    <a href="reportes/materias" class="btn btn-outline-secondary btn-icon-right">
                                        <span>Ir
                                            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png"
                                                height="24">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="col-sm">

                    <div class="card" style="width: 18rem;">

                        <div class="card-group">
                            <div class="card card-primary text-center">
                                <img class="card-img-top"
                                    src="https://cdn.pixabay.com/photo/2017/03/11/02/40/diary-2134248_1280.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <div class="card-title">Lista de Guías por Carrera</div>
                                    <p class="card-text">Puede observar las gias implementadas</p>
                                </div>
                                <div class="card-footer">
                                    <a href="reportes/guia" class="btn btn-outline-secondary btn-icon-right">
                                        <span>Ir
                                            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png"
                                                height="24">
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>

            </div>
            
        </div>
        </div>
    </body>

</html>