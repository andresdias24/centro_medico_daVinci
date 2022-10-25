<!DOCTYPE html>
<html lang="en">
<head>
    <title>daVinci</title>
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
  <div class="container">
    <h3 class="text-center pt-5">Digite el Nombre de Usuario a Consultar...</h3>
      </hr>
  <div class="form-horizontal">
    <form id="form1" name="form1" action="" method="POST">
      <div class="form-group">
         <label class="col-sm-4 control-label">Usuario</label>
          <input name="usuario" type="text" id="usuario" class="form-control  col-sm-5" required>
      </div>
      
      <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-dark btn-block">Buscar</button>
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
extract ($_POST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/usuario.php";

if (isset($_POST['usuario'])) {
$objMedico= new Usuario();
$resultado=$objMedico->ConsultarUsuario($_POST['usuario']);
if (isset($resultado))  
{ if($resultado->num_rows >0 ){?>
    
    <h1 align="center">DATOS DEL MEDICO</h1>
 <table class="table table-hover text-center mt-3">
 <thead>
        <th class="text-center">Usuario</th>
        <th class="text-center">Password</th>
        <th class="text-center">Estado</th>
        <th class="text-center">Rol</th>
        
      </thead>
 <?php
while($registro=$resultado->fetch_object())
{
?>
  <tr>
    <td><?php echo $registro->usuLogin?></td>
    <td><?php echo $registro->usuPassword?></td>
    <td><?php echo $registro->usuEstado?></td>
    <td><?php echo $registro->usuRol?></td>
    <td> <a href="index2.php?pag=editarUsuario&usuario=<?php echo $registro->usuLogin?>">
      <span class="class btn btn-warning">Editar</span>
    </a></td>   
    <td> <a href="index2.php?pag=vistaEliminarUsuario&usuario=<?php echo $registro->usuLogin?>">
    <?php
      if($_SESSION['rol'] == "Administrador") { ?>
      <span class="class btn btn-danger">Eliminar</span>
    <?php  
    }  
    ?> 
    </a></td> 
  </tr>
 <?php
}  //cerrando el ciclo while
?>
</table>
<?php 
}else{?> <script type="text/javascript">
    alert("El ususario No existe en la base de datos!!!!");
    window.location.href='index2.php';
    </script> <?php  ;}
}
}
?>

<?php
if($msj==1){
  ?>
  <script type="text/javascript">
  alert("EL CLIENTE FUE EDITADO CORRECTAMENTE");
  window.location.href='index2.php?pag=actualizarMedico';
  </script>
  <?php
}

if($msj==2){
  ?>
  <script type="text/javascript">
  alert("La Información no se actualizó de manera adecuada, FAvor");
  window.location.href='index2.php';
  </script>
  <?php
}

if($msj==3){
  ?>
  <script type="text/javascript">
  alert("EL CLIENTE FUE EDITADO CORRECTAMENTE");
  window.location.href='index2.php';
  </script>
  <?php
}

if($msj==4){
  ?>
  <script type="text/javascript">
  alert("La Información no se actualizó de manera adecuada, FAvor");
  window.location.href='index2.php';
  </script>
  <?php
}

?>
