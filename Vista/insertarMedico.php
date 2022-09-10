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
  <div class="container">
    <h3 class="text-center pt-5"> Favor Agregar la siguiente información</h3>
  <hr />
    <div class="form-horizontal">
      <form id="form1" name="form1" action="../Controlador/validarInsertarMedico.php" method="POST">
        <div class="form-group">
          <label class="col-sm-4 control-label" >Identificacion</label>
           <input name="identificacion" type="text" id="identificacion" placeholder="Digite el documento de identidad" class="form-control col-sm-5" required>
        </div>
         <div class="form-group">
          <label class="col-sm-4 control-label" >Nombres</label>
           <input name="nombres" type="text" id="nombres" placeholder="Digite los nombres" class="form-control col-sm-5" required>
        </div>
       
        <div class="form-group">
          <label class="col-sm-4 control-label" >Apellidos</label>
           <input name="apellidos" type="text" id="apellidos" placeholder= "Digite los apellidos" class="form-control col-sm-5" required>
        </div>
        <div class="form-group">    
              <label class="col-sm-4 control-label" > Especialidad   </label>             
              <select class="col-sm-5 form-control input-lg " name="especialidad">    
                  <option class="col-sm-4 control-label">Especialidad</option>
                  <option value="Medico General">Médico General</option>
                  <option value="Pediatra">Pediatra</option>
                  <option value="Dermatologo">Dermatólogo</option>
              </select>              
        </div>        
        <div class="form-group">
          <label class="col-sm-4 control-label" >Teléfono</label>
           <input name="telefono" type="text" id="telefono" placeholder="Digite el número de celular" class="form-control col-sm-5" required>
        </div>      

        

        <div class="form-group">
          <label class="col-sm-4 control-label" >Correo</label>
           <input name="correo" type="email" id="correo" placeholder="Digite el corre electrónico" class="form-control col-sm-5" required>
        </div>  

        <div class="form-group">
          <label class="col-sm-4 control-label" >Direccion</label>
           <input name="direccion" type="text" id="direccion" placeholder="Digite el número de celular" class="form-control col-sm-5" required>
        </div>      
        
        <div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-5">
              <button type="submit" class="btn btn-dark btn-block"> Guardar</button>                  
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
  <script type="text/javascript" src="js/sweetalert/sweetalert2.all.min.js">  </script>
</body>
</html>
<?php
if($msj==1){
  ?>
    <script type="text/javascript">
    alert("El registro se ha guardado correctamente!");
    window.location.href='index2.php';
    </script>
    <?php
  };
if($msj==2){
  ?>
  <script type="text/javascript">
  alert("El registro no pudo ser guardado, favor validar!");
  window.location.href='index2.php';
  </script>
  <?php
}
?>