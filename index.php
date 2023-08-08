<?php
echo "Hello world";
 $globalvar = "Hello, I am Timothy";
function myfunction(){
     $localvar = "Hi how are you";
     echo $localvar;
}
echo $globalvar;
myfunction()

?>