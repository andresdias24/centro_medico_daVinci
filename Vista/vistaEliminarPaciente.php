<?php
extract($_REQUEST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/Paciente.php";

if (isset($_REQUEST['idPaciente'])) {
  $objPaciente = new Paciente();

  $resultado = $objPaciente->ConsultarIdPaciente($_REQUEST['idPaciente']);
  if (isset($resultado)) {
    if ($resultado->num_rows > 0) {
      $registro = $resultado->fetch_object();
?>

      <!DOCTYPE html>
      <html lang="en">

      <head>
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      </head>

      <body>
        <div class="container">
          <h3 class="text-center">Favor Verifique la Siguiente Información del Usuario...</h3>
          <hr />

          <div class="form-horizontal">
            <form id="form1" name="form1" action="../Controlador/eliminarPaciente.php" method="POST">
              <div class="form-group">
                <label class="col-sm-4 control-label">Paciente</label>
                <input class="form-control col-sm-5" name="paciente" type="text" id="paciente" value="<?php echo $registro->idPaciente ?>" required />
              </div>
              <br>
              <div class="form-group row">
                <label class="col-sm-4 control-label"></label>
                <div class="col-sm-5">
                  <button type="submit" class="btn btn-danger btn-block">Eliminar</button>
                </div>
              </div>
              <input name="idPaciente" type="hidden" value="<?php echo $registro->idPaciente ?>">
            </form>

            <hr />
          </div>
        </div>
      </body>

      </html>
      <?php
      if ($msj == 4) {
      ?>
        <script type="text/javascript">
          alert("EL CLIENTE FUE EDITADO CORRECTAMENTE");
          window.location.href = 'index2.php?pag=actualizarMedico';
        </script>
      <?php
      }

      if ($msj == 2) {
      ?>
        <script type="text/javascript">
          alert("La Información no se actualizó de manera adecuada, FAvor");
          window.location.href = 'index2.php';
        </script>
<?php
      }
    }
  }
}

?>