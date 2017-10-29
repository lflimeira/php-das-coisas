<?php 

if (isset($_GET['led'])&&$_GET['led']!=''){
  exec("sudo gpio -g mode 25 out"); // Iniciar o GPIO07 = pino 26
  if ($_GET['led']=='on'){
    exec("sudo gpio -g write 25 1"); // Acender LED
  }else{
    exec("sudo gpio -g write 25 0"); // Apagar LED
  }
}


?>

<html>
  <head>
  </head>
  <body>
     <a href="?led=on">On</a>
     <br/> 
     <a href="?led=off">Off</a>
  </body>
</html>
