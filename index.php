<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferencia de archivos por AJAX</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Transferir archivos</h1>
                <a href="//parzibyte.me/blog"></a>
                <div class="form-group">
                    <input multiple type="file" class="form-control" id="inputArchivos">
                    <br><br>
                    <button id="btnEnviar" class="btn btn-success">Enviar</button>
                </div>
                <div class="alert alert-info" id="estado"></div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>