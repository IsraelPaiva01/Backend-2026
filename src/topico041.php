<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);//Adição: 12
echo "<br>Subtração:".($a - $b);//8
echo "<br>Multiplicação:".($a * $b);//20
echo "<br>Divisão:".($a / $b);//5
echo "<br>Módulo:".($a % $b);//0
echo "<br>Exponenciação:".($a ** $b);//100
?>
<hr>
<?php
$a=10;//a=10
$b=2;//b=2
$a+=$b;//$a=$a+$b//$a=10=2//$a12
$b-=5;//$b=2-5//$b=-3
echo "a = ".$a;// a = 12
echo "<br>b = ".$b;//b 3 = -3
$c=11;//$#c=11
$d=6;//$d=6
$c%=$d;//$c=11%6//$c= 5
$d+=$a;//$d=6+12//$d= 18
echo "<br>c = ".$c;//c = 5
echo "<br>d = ".$d;//d = 18
$n="cinco";
$n.=$c;//$n="cinco"
echo "<br>n = ".$n;
?>
<hr>
<?php
$x = 100;
echo "x = ".$x++;//x = 100
echo "<br>x final = ".$x;//x final= 101
echo "<hr>";
$i=10;
echo "<br>i = $i";//i = 10

//$i++;//11
;//12
//++$i;//13
$i+=3;
echo "<br>i = $i";//i =2
$i--;//12

--$i;//11
echo "<br>i = $i";//i =11

?>