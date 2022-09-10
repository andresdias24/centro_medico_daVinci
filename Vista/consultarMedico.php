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
  <link rel="stylesheet" href="js/sweetalert/sweetalert2.min.css">
 </head>
<body>
</head>
<body>

  <div class="container">
    <h3 class="text-center pt-5"> Favor digite el documento del médico a consultar</h3>
  <hr />
    <div class="form-horizontal">
      <form id="form1" name="form1" action="" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label" >Identificacion</label>
           <input name="identificacion" type="text" id="identificacion" placeholder="Digite el documento de identidad" class="form-control col-sm-5" required>
        </div>      
        <div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-dark btn-block"> Buscar</button>                  
            </div>    
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
require"../Modelo/conexionBaseDatos.php";
require"../Modelo/Medico.php";

if(isset($_POST['identificacion'])){
  $ObjMedico= new Medico();
  $resultado = $ObjMedico->consultarMedico($_POST['identificacion']);
  if(isset($resultado)){
    if($resultado->num_rows>0){?>
      <h1 align="center">DATOS DEL MÉDICO</h1>
      <table class="table table-hover text-center mt-3">
        <thead>
          <th class="text-center">Identificación</th>
          <th class="text-center">Nombres</th>
          <th class="text-center">Apellidos</th>
          <th class="text-center">Especialidad</th>
          <th class="text-center">Teléfono</th>
          <th class="text-center">Correo</th>    

        </thead>
        <?php
        while($registro=$resultado->fetch_object()){?>
          <tr>
            <td><?php echo $registro->medIdentificacion?></td>
            <td><?php echo $registro->medNombres?></td>
            <td><?php echo $registro->medApellidos?></td>
            <td><?php echo $registro->medEspecialidad?></td>
            <td><?php echo $registro->medTelefono?></td>
            <td><?php echo $registro->medCorreo?></td>
          </tr>
        <?php
        }
        ?>
      </table>
      <?php
    } else{ ?>
      <script type="text/javascript">
       alert("El Médico no exite en la base de datos!");
       window.location.href='index2.php';
      </script><?php ;

    }


    }
  }

?>