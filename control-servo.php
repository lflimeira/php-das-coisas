<?php 
session_start();
if(!isset($_SESSION['val'])){
  exec("gpio -g mode 18 pwm && gpio pwm-ms && gpio pwmc 192 && gpio pwmr 2000");
  $_SESSION['val'] = 100;
}

if (isset($_GET['left']) && $_GET['left']!=''){
  if($_SESSION['val'] < 250){ 
    $_SESSION['val'] += 10;
  }else{
    echo '<script>alert("Max Left!!!")</script>';
  }
  exec('gpio -g pwm 18 '.$_SESSION['val']); // Acender LED
}else if(isset($_GET['right']) && $_GET['right'] != ''){
  if($_SESSION['val'] > 50){ 
    $_SESSION['val'] -= 10;
  }else{
    echo '<script>alert("Max Right!!!")</script>';
  }
  exec('gpio -g pwm 18 '.$_SESSION['val']); // Acender LED
}

?>

<html>
  <head>
  </head>
  <body>
     <a href="?left=20">Left</a>
     <br/> 
     <a href="?right=20">Right</a>
  </body>
</html>
