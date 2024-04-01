
<?php 

    $form_id = $datos[0]['form_id'];
    $nombrecompleto = $datos[0]['nombrecompleto'];
    $direccion = $datos[0]['direccion'];
    $telefono = $datos[0]['telefono']; 
    $correo = $datos[0]['correo']; 
 ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualiza un nombre</title>
</head>
<body>

    <div class="container">
        <h1>Editar Registro</h1>

        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                    <input type="text" id="form_id" name="form_id" hidden="" 
                    value="<?php echo $form_id ?>">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombrecompleto" id="nombrecompleto" class="form-control" 
                    value="<?php echo $nombrecompleto ?>">

                    <label for="paterno">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" 
                    value="<?php echo $direccion ?>">

                    <label for="materno">Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" 
                    value="<?php echo $telefono ?>">

                    <label for="materno">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" 
                    value="<?php echo $correo ?>">
                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>