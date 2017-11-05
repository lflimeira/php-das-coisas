<?php 

exec("gpio -g mode 25 out"); // Iniciar o GPIO25 = pino 22

$val = 1;

while(true){
  if($val == 1){
    exec("gpio -g write 25 1"); // Acender LED
    $val = 0;
  }else{
    exec("gpio -g write 25 0"); // Apagar LED
    $val = 1;
  }
  sleep(5);
}


