<?php
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$fecha=$_POST['fecha'];
$estado=$_POST['estado'];
$sexo=$_POST['sexo'];
$mail=$_POST['mail'];
$direccion=$_POST['direccion'];

echo '<H1> APOYO A ADULTOS MAYORES<BR><BR></H1>';
echo"nombre:".$nombre."<br>";
echo"edad:".$edad."<br>";
echo"fecha de nacimiento es:".$fecha."<br>";
echo"vives en ".$estado."<br>";
echo"Tu sexo es:".$sexo."<br>";
echo"Tu email es:".$mail."<br>";
echo"Tu direccion es".$direccion."<br>";



if ($estado=='estado de mexico') {
  
  if ($edad>=69) {
      
     
          echo '
              <H2> Felicidades, eres acreedor a la Beca </H2>
          ';
     
  }
   else {
          echo '<H2> Lo sentimos, no eres acreedor a la Beca </H2>
          ';
     }
}
 else {
          echo '<H2> Lo sentimos, no eres acreedor a la Beca </H2>

          ';
     }

     ?>