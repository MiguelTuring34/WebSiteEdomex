<?php
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$promedio=$_POST['promedio'];
$estado=$_POST['estado'];
$sexo=$_POST['sexo'];
$mail=$_POST['mail'];
$direccion=$_POST['direccion'];

echo '<H1> APOYO A ESTUDIANTES<BR><BR></H1>';
echo"nombre:".$nombre."<br>";
echo"edad:".$edad."<br>";
echo"promedio:".$promedio."<br>";
echo"vives en ".$estado."<br>";
echo"Tu sexo es:".$sexo."<br>";
echo"Tu email es:".$mail."<br>";
echo"Tu direccion es".$direccion."<br>";


if ($estado=='estado de mexico') {
	
	if ($edad<=18) {
			
      if ($promedio>=8.5) {
							
		      echo '
	            <H2> Felicidades, eres acreedor a la Beca </H2>
          ';
      } 
      else {
          echo '
              <H2> Lo sentimos, no eres acreedor a la Beca </H2>
                ';
          }

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