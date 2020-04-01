<?php

for ($time=030;$time>-1;$time--){
  echo "\r                                         \r";
  echo "\r\e[1m\e[31m[\e[33m>\e[31m]\e[37m Espere: \e[36m".$time."\e[37m Segundos";
  if ($time == 34 or $time == 29 or $time == 24 or $time == 19 or $time == 14 or $time == 9 or $time == 4){echo "";}
  if ($time == 33 or $time == 28 or $time == 23 or $time == 18 or $time == 13 or $time == 8 or $time == 3){echo "";}
  if ($time == 32 or $time == 27 or $time == 22 or $time == 17 or $time == 12 or $time == 7 or $time == 2){echo "";}
  if ($time == 31 or $time == 26 or $time == 21 or $time == 16 or $time == 11 or $time == 6 or $time == 1){echo "";}
  if ($time == 30 or $time == 25 or $time == 20 or $time == 15 or $time == 10 or $time == 5 or $time == 0){echo "\r";}
  sleep(1);
}

?>
