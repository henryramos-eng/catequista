<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICEI Tech - Actualizar datos del catequista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <a href="/catequistas/" class="btn btn-md btn-success mb-3">REGRESAR</a>

                        <form action="/catequistas/edit/{{$catequista->id}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NOMBRE</label>
                                <input type="text" class="form-control" name="nombre" value="{{old('nombre',$catequista->nombre)}}" placeholder="Ingrese el nombre del catequista">

                                <!-- error message untuk title -->

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">CELULAR</label>
                                <input type="text" class="form-control" name="celular" value="{{$catequista->celular}}" placeholder="Ingrese el número de celular del catequista">

                                <!-- Mensaje de rror para el celular -->

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">CORREO ELECTRÓNICO</label>
                                <input type="text" class="form-control" name="correo" value="{{$catequista->correo}}" placeholder="Ingrese el correo electrónico del catequista">

                                <!-- Mensaje de error para el correo electrónico -->

                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PARROQUIA</label>
                                <input type="text" class="form-control" name="parroquia" value="{{$catequista->parroquia}}" placeholder="Ingrese la parroquia del catequista">

                                <!-- Mensaje de error para la parroquia -->
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">GRUPO</label>
                                <input type="text" class="form-control" name="grupo" value="{{$catequista->grupo}}" placeholder="Ingrese el grupo del catequista">

                                <!-- Mensaje de error para la parroquia -->

                            </div>

                            <button type="submit" class="btn btn-md btn-primary">ACTUALIZAR</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>