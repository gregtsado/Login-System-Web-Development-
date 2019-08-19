
<?php
$pi = 22/7;
function Area($r){
$result =$GLOBALS['pi']*$r*$r;
 return $result;
}
function perimeter($r){
$result =$GLOBALS['pi']*2*$r;
 return $result;
}
 function vol($r,$h){
 $result=1/3*
 $GLOBALS['pi']*$r*$r*$h;
 return $result;
 }

  function factorial ($number){
      $result= $number;
     for($i=$number-1;$i>0;$i--) {
$result=$result*$i;
     }  
     return $result;       
 }
