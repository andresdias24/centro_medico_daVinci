<?php
  require "../Modelo/conexionBaseDatos.php";
  $objConexion=Conectarse();

  $sql="select idCita,pacNombres, pacApellidos, medNombres, medApellidos, medespecialidad,conNombre, citFecha, citHora, citEstado, citObservaciones 
  from pacientes, medicos, consultorios, citas
  where (idPaciente = citPaciente) and 
  	  (idMedico = citMedico) and 
  	  (idConsultorio = citConsultorio) and
  	  (citEstado='Asignado') order by citFecha desc";	  
  $citas = $objConexion->query($sql);
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
</head>
<body>
  <h2 align="center" class="p-5">Detalle de las citas pendientes por usuario...</h1>
<table class="table table-hover text-center mt-1">
  <thead>
    <th class="text-center">Fecha de la Cita</th>
    <th class="text-center">Hora de la Cita</th>
    <th class="text-center">Nombre Paciente</th>
    <th class="text-center">Nombre Médico</th>
    <th class="text-center">Consultorio</th>
    <th class="text-center">Estado de la cita </th>
    <th class="text-center">Acción a Realizar</th>    
  </thead>
 <?php
while($cita=$citas->fetch_object())
{
?>
  <tr>
    <td><?php echo $cita->citFecha?></td>
    <td><?php echo $cita->citHora?></td>
    <td><?php echo $cita->pacNombres." ".$cita->pacApellidos?></td>
    <td><?php echo $cita->medNombres." ".$cita->medApellidos?></td>
    <td><?php echo $cita->conNombre?></td>
    <td><?php echo $cita->citEstado?></td>
    <td><a href="index2.php?pag=editarCita&idCita=<?php echo $cita->idCita?>" class="btn btn-warning">Atender</a>
    </td>
  </tr>  
 <?php
}  
?>
</table>
</body>
</html>    
<?php
if($msj==1){
  ?>
    <script type="text/javascript">
    alert("Se ha guardado la información de la cita de manera correcta!");
    window.location.href='index2.php';
    </script>
    <?php
  };
if($msj==2){
  ?>
  <script type="text/javascript">
  alert("Error al guardar la información, favor validar!");
  window.location.href='index2.php';
  </script>
  <?php
}
?>