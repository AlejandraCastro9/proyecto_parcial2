<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolce Mia Menu</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>¡¡Registrate para ganar diferentes premios!!</h1><hr>
                <form method="post" action="guardarDatos.php">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>
                    <div class="form-group">
                        <label for="">precio:</label>
                        <input type="text" class="form-control" name="precio" placeholder="Teclea el precio">
                    </div>
                    <div class="form-group">
                        <label for="">ingredientes:</label>
                        <input type="text" class="form-control" name="ingredientes" placeholder="Teclea los ingredientes">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>