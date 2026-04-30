<?php
echo "<h1>While</h1>";
$i=0;
while($i<5){
    echo "$i";
    $i++;
}

/*
Valor inicial é 0
A condição é $i<5
O contador é o $i++
Ele foi executado 5 vezes
O valor que se torna falso é 5
*/
echo "<h1>While</h1>";
$i=11;
while($i<15){
    echo "$i";
    $i++;
}
/*
--------------
Saida: 11 12 13 14
11
A condição é $i<14
O contador é o i++
Ele foi executado 4 vezes
O valor que se torna falso é 15
*/
echo "<h1>While</h1>";
$i=4;
while($i>=0){
    echo "$i";
    $i--;
}
/*
--------------
Saida: 4 3 2 1 0
4
A condição é $i>=0 ou $i>-1
O contador é o i--
Ele foi executado 5 vezes
O valor que se torna falso é -1
*/
echo "<h1>While</h1>";
$i=0;
while($i<=10){
    echo "$i";
    //$i++;$i++;
    //$i++;$i++;$i++;$i++;
    $i++;
}
/*
--------------
Saida: 0 2 4 6 8 10
0
A condição é $i<=0
O contador é o $i++$i++
Ele foi executado 6 vezes
O valor que se torna falso é 12
*/
echo "<h1>Do while</h1>";
$i=0;
do{
    echo " $i";
    $i++;
}while($i<5);

echo "<h1>for</h1>";
$i=0;
do{
    echo " $i";
    $i++;
}while($i<5);
echo "<h1>For</h1>";
for($i=0;$i<5;$i++) echo " $i";

echo "<h1>Looping aninhado</h1>";
for($i=0;$i<3;$i++){//ext
    for($j=0;$j<2;$j++){//int
        echo "$i $j<br>";
    }
}


/*
i j
4 1
4 2
5 0
5 1
5 2
6 0
6 1
6 2

*/
?>


