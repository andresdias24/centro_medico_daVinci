<?php
extract ($_REQUEST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/Usuario.php";
if (isset($_REQUEST['usuario'])) {
$objMedico= new Usuario();

$resultado=$objMedico->consultarIdUsuario($_REQUEST['usuario']);
if (isset($resultado)) 
{ if($resultado->num_rows >0 ){
  $registro=$resultado->fetch_object()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body >
  <div class="container">
    <h3 class="text-center">Favor Verifique la Siguiente Información del Usuario...</h3>
      <hr />
 
  <div class="form-horizontal">
    <form id="form1" name="form1" action="../Controlador/eliminarUsuario.php" method="POST">
      <div class="form-group">
         <label class="col-sm-4 control-label">Usuario</label>
            <input class="form-control col-sm-5" name="usuario" type="text" id="usuario"  value="<?php echo $registro->usuLogin?>" required />
      </div>
      <br>
      <div class="form-group row">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-danger btn-block">Eliminar</button>
            </div>
          </div>
          <input name="idPaciente" type="hidden" value="<?php echo $registro->usuLogin?>">
    </form>

    <hr />
  </div>
</div>
</body>
</html>
    <?php
  }
  }
}
?>