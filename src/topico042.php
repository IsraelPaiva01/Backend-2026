<?php
$a="10";  // a = "10" string 
$b="10";// b = "10" string 
echo "Igualdade = ".($a==$b)."<br>";//true
echo "Idêntico = ".($a===$b)."<br>";//true
echo "Não igual = ".($a!=$b)."<br>";//false
echo "Não Idêntico = ".($a!==$b)."<br>";//true
echo "<hr>";
$a=10;
$b=10;
$c=10;
$d=($a<=$b);
var_dump($d);
echo "<hr>";
$e=($a<=$c)&& !($c>1000);// 1 sinal de menor digitado, compara todos, caso não tenha <, estara apenas recebendo
var_dump($e);//true           
echo "<hr>";
$f=($a>$b) || ($c<1000);
var_dump($f) ; //true
echo "<hr>";
$g=!($a<$b) xor ($b<$c);
var_dump($g);//true
echo "<hr>";
$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";

?>