<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICEI Tech - Agregar un catequista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <a href="/catequistas/" class="btn btn-md btn-success mb-3">REGRESAR</a>

                        <form action="/catequistas/create" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NOMBRE</label>
                                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}" placeholder="Ingrese el nombre del catequista">


                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">CELULAR</label>
                                <input type="number" class="form-control" name="celular" value="" placeholder="Ingrese el número de celular del catequista">


                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">CORREO ELECTRÓNICO</label>
                                <input type="text" class="form-control" name="correo" value="" placeholder="Ingrese el correo electrónico del catequista">


                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PARROQUIA</label>
                                <input type="text" class="form-control" name="parroquia" value="" placeholder="Ingrese la parroquia del catequista">

                                <!-- Mensaje de error para el nombre -->
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">GRUPO</label>
                                <input type="text" class="form-control" name="grupo" value="" placeholder="Ingrese el grupo del catequista">

                                <!-- Mensaje de error para el nombre -->
                            </div>

                            <input type="submit" value="guardar">

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