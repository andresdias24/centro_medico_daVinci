<?php
extract($_REQUEST);
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/Medico.php";
if (isset($_REQUEST['idMedico'])) {
  $objMedico = new Medico();

  $resultado = $objMedico->ConsultarIdMedico($_REQUEST['idMedico']);
  if (isset($resultado)) {
    if ($resultado->num_rows > 0) {
      $registro = $resultado->fetch_object() ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      </head>

      <body>
        <div class="container">
          <h3 class="text-center">Favor Agregar la Siguiente Información de los Médicos...</h3>
          <hr />
          <div class="form-horizontal">
            <form id="form1" name="form1" action="../Controlador/eliminarMedico.php" method="POST">
              <div class="form-group">
                <label class="col-sm-4 control-label">Identificacion</label>
                <input class="form-control col-sm-5" name="identificacion" type="text" id="identificacion" size="40" value="<?php echo $registro->medIdentificacion ?>" required />
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Nombres</label>
                <input class="form-control col-sm-5" name="nombres" type="text" id="nombres" value="<?php echo $registro->medNombres ?>" required />
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Apellidos</label>
                <input class="form-control col-sm-5" name="apellidos" type="text" id="apellidos" value="<?php echo $registro->medApellidos ?>" required />
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"> Especialidad </label>
                <select class="col-sm-5 form-control input-lg " name="especialidad">
                  <option class="col-sm-4 control-label text-left"><?php echo $registro->medEspecialidad ?></option>
                  <option value="Medico General">Médico General</option>
                  <option value="Pediatra">Pediatra</option>
                  <option value="Dermatologo">Dermatólogo</option>
                </select>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Telefono</label>
                <input name="telefono" type="text" id="telefono" size="40" value="<?php echo $registro->medTelefono ?>" class="form-control  col-sm-5" required>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Correo</label>
                <input name="correo" type="email" id="correo" size="40" value="<?php echo $registro->medCorreo ?>" class="form-control  col-sm-5" required>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 control-label"></label>
                <div class="col-sm-5">
                  <button type="submit" class="btn btn-danger btn-block">Eliminar</button>
                </div>
              </div>
              <input name="idMedico" type="hidden" value="<?php echo $registro->idMedico ?>" />
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