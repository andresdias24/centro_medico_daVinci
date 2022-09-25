<?php
  require "../Modelo/conexionBaseDatos.php";
  $objConexion = Conectarse();

  $sql="Select idMedico, medNombres, medApellidos, medEspecialidad from medicos";
  $medicos=$objConexion->query($sql);

  $sql= "select idPaciente, pacIdentificacion, pacNombres, pacApellidos from pacientes";
  $pacientes=$objConexion->query($sql);

  $sql="select * from consultorios";
  $consultorios=$objConexion->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MeDSyS</title>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
   <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
 <div class="container">
    <h3 class="text-center pt-5">Asignación de  Citas</h3>
      <hr />
  <div class="form-horizontal">
    <form id="form1" name="form1" method="POST" action="../Controlador/validarAsignarCita.php" >

      <div class="form-group">
        <label  for="paciente" class="col-sm-4 control-label">Paciente</label>
        <select class="form-control col-sm-5" name="paciente" id="paciente">
          <option value="0">Seleccione Paciente</option>
          <?php    
          while ($paciente=$pacientes->fetch_object())
          {
            ?>
              <option value="<?php echo $paciente->idPaciente;?> ">
              <?php echo $paciente->pacIdentificacion."-".$paciente->pacNombres." ".$paciente->pacApellidos;?>
              </option>
          <?php 
          }
          ?>
        </select>
      </div>
       <div class="form-group">
         <label class="col-sm-4 control-label">Fecha de la Cita</label>
          <input type="date" name="fecha" id="fecha" class="form-control  col-sm-5" required>
      </div>
      <div class="form-group">
         <label class="col-sm-4 control-label">Hora</label>
          <input type="time" name="hora" id="hora"  class="form-control  col-sm-5" required>
      </div>

       <div class="form-group">
        <label for="medico" class="col-sm-4 control-label">Medico</label>
        <select class="form-control col-sm-5" name="medico" id="medico">
          <option value="0">Seleccione Medico</option>
          <?php
            while ($medico=$medicos->fetch_object())
            {
            ?>
                <option value="<?php echo $medico->idMedico;?>">
                <?php echo $medico->medNombres." ".$medico->medApellidos. " ( ".$medico->medEspecialidad." )" ?> 
                </option>
            <?php 
            }
            ?>   
        </select>
      </div>

      <div class="form-group">
        <label for="consultoro" class="col-sm-4 control-label">Consultorio</label>
        <select class="form-control col-sm-5" name="consultorio" id="consultorio">
          <option value="0">Seleccione Consultorio</option>
          <?php
            while ($consultorio=$consultorios->fetch_object())
            {
            ?>
                <option value="<?php echo $consultorio->idConsultorio;?> ">
                <?php echo $consultorio->conNombre?>
                </option>
            <?php
            } 
            ?>
        </select>
      </div>

      <div class="form-group row">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-warning btn-block">Guardar</button>
            </div>
          </div>
    </form>
    <hr />
  </div>
   </div>
   <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
if($msj==1){
  ?>
    <script type="text/javascript">
    alert("Se ha creado la cita de manera correcta!");
    window.location.href='index2.php';
    </script>
    <?php
  };
if($msj==2){
  ?>
  <script type="text/javascript">
  alert("Error al genera la cita, favor validar!");
  window.location.href='index2.php';
  </script>
  <?php
}
?>