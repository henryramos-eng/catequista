<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICEI Tech - Datos de Catequistas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                    <a href="/catequistas/" class="btn btn-md btn-success mb-3">REGRESAR</a>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">DATOS DEL CATEQUISTA {{ $catequista->nombre }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>
                                            <label>CELULAR : </label><b> {{ $catequista->celular }}</b>
                                        </p>
                                        <p>
                                            <label>CORREO ELECTRÓNICO : </label><b> {{ $catequista->correo }}</b>
                                        </p>
                                        <p>
                                            <label>PARROQUIA : </label><b> {{ $catequista->parroquia }}</b>
                                        </p>
                                        <p>
                                            <label>GRUPO : </label><b> {{ $catequista->grupo }}</b>
                                        <p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>