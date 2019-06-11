<?php


function myTest(){
   static $a = 0;
   $a = $a + 1;
   echo $a; 
}

myTest();
myTest();
myTest();

?>