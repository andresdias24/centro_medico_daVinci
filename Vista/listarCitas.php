<?php
require "../modelo/conexionBaseDatos.php";
$objConexion=Conectarse();
$sql="select idCita,pacNombres, pacApellidos, medNombres, medApellidos, medEspecialidad,conNombre, citFecha, citHora, citEstado, citObservaciones 
from pacientes, medicos, consultorios, citas
where (idPaciente = citPaciente) and 
    (idMedico = citMedico) and 
    (idConsultorio = citConsultorio) and
    (citEstado='Atendido')"; 
$citas= $objConexion->query($sql);

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="js/sweetalert/sweetalert2.min.css">
 </head>
<body>
</head>
<body>

    <div class="container-fluid">
    <h1 align="center" class="mt-5">Información de los registro de las citas</h1>
    <table class="table table-hover text-center">
      <h2><tr align="center" bgcolor="#ffc800"></h2>
            <th class="text-center">Fecha</th>
            <th class="text-center">Hora</th>
            <th class="text-center">Paciente</th>
            <th class="text-center">Médico</th>
            <th class="text-center">Especialidad</th>
            <th class="text-center">Consultorio</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Observaciones</th>
          </tr>
    <?php
      while($cita= $citas->fetch_object()){?>
        <tr>
          <td><?php echo $cita->citFecha?></td>
          <td><?php echo $cita->citHora?></td>
          <td><?php echo $cita->pacNombres." ".$cita->pacApellidos?></td>
          <td><?php echo $cita->medNombres." ".$cita->medApellidos?></td>
          <td><?php echo $cita->medEspecialidad?></td>
          <td><?php echo $cita->conNombre?></td>
          <td><?php echo $cita->citEstado?></td>
          <td><?php echo $cita->citObservaciones?></td>
        </tr>
     <?Php   
      }
    ?>      
    </table>
  </div> 
  
  
  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
