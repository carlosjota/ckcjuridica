<html>
		<head>
			<title> Clientes </title>
		
		<!-- para dar mejor calidad a la pagina -->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  	<!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	
</head>
<BODY >



<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-4">
  	<center><h1>Informacion del Cliente</h1></center>
  	<form method="POST" action="index.php" >

<div class = "form-group">
<label for = "doc">Cedula</label>
<INPUT TYPE= "text" name = "cedula" class ="form-control" id = "cedula">
</div>

<div class = "form-group">
<label for = "nombre">Nombres</label>
<INPUT TYPE= "text" name = "nombres" class ="form-control" id = "nombres">
</div>

<div class = "form-group">
<label for = "celular">celular</label>
<INPUT TYPE= "text" name = "celular" class ="form-control" id = "celular">
</div>

<div class = "form-group">
<label for = "correo">Correo Electronico</label>
<INPUT TYPE= "text" name = "correo" class ="form-control" id = "correo">
</div>



<input type="submit" value="Grabar" class="btn btn-success" name="btn1">
<input type="submit" value="Consultar" class="btn btn-info" name="btn2">
</form>

<?php

	if(isset($_POST['btn1']))
  	{
  		include("abrir_conexion.php");

		$cedula =$_POST['cedula'];
		$nombres = $_POST['nombres'];
		$celular = $_POST['celular'];
		$correo = $_POST['correo'];



mysqli_query ($conexion, "INSERT INTO $tabla_db1 ( cedula,nombres,celular,correo) VALUES ('$cedula','$nombres','$celular','$correo')");


 include("cerrar_conexion.php");
      echo "Se insertaron Correctamente";
    }

    if(isset($_POST['btn2']))
    {
      include("abrir_conexion.php");

        $cedula = $_POST['cedula'];
        if($cedula=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "Digita el Numero bde Cedula por favor.";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE cedula = $cedula");
          while($consulta = mysqli_fetch_array($resultados))
          {
            echo 
            "
              <table width=\"100%\" border=\"1\">
                <tr>
                  <td><b><center>Documento</center></b></td>
                  <td><b><center>Nombre</center></b></td>
                  <td><b><center>Celular</center></b></td>
                  <td><b><center>correo</center></b></td>
                </tr>
                <tr>
                  <td>".$consulta['cedula']."</td>
                  <td>".$consulta['nombres']."</td>
                  <td>".$consulta['celuilar']."</td>
                  <td>".$consulta['correo']."</td>
                </tr>
              </table>
            ";
          }
        }

      include("cerrar_conexion.php");
    }
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>