<?php
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$fecha=$_POST['fecha'];
$hijos=$_POST['hijos'];
$edadhijo=$_POST['edadhijo'];
$estado=$_POST['estado'];
$mail=$_POST['mail'];
$direccion=$_POST['direccion'];
$civil=$_POST['civil'];


echo '<H1> APOYO A MADRES SOLTERAS<BR><BR></H1>';
echo"nombre:                        ".$nombre."<br>";
echo"edad:                          ".$edad."<br>";
echo"fecha de nacimiento es:        ".$fecha."<br>";
echo"tienes                         ".$hijos."              hijos.<br>";
echo"La edad del menor es :         ".$edadhijo."<br>";
echo"Vives en                       ".$estado."<br>";
echo"Tu email es:                   ".$mail."<br>";
echo"Tu direccion es                ".$direccion."<br>";
echo"Tu estado civil es             ".$civil."<br>";


if ($estado=="estado de mexico") {

      if ($edadhijo<=18) {
            
            if ($civil=="Soltera") {
              echo '<H2> Eres acreedor a la Beca </H2>
          ';
            } else{
             echo '<H2> No eres acreedor a la Beca </H2>';
           }
      } else {
           echo '<H2> No eres acreedor a la Beca </H2>';
         }

} else {
   echo '<h2>No eres acreedor a la Beca </H2>';
}



     ?>