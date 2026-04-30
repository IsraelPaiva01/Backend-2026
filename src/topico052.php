<?php
$idade = 17;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}
else {
    echo "Você é menor de idade.";
}
?>
<hr>
<?php
/*
verde - Siga
amarelo - Atenção
vermelho - Pare
*/

/*$semaforo="amarelo";
$semaforo="vermelho"; */
$semaforo="vermelho";

if ($semaforo =="amarelo" ){
    echo "Atenção";   
}
elseif ($semaforo =="vermelho") {
    echo "Esperar";
}
elseif ($semaforo =="verde") {
    echo "Liberado";
}
else echo "Cor desconhecida";
//
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)
echo "<hr>";
switch ($diaSemana) {
    case 0:
        echo "Domingo"; 
        break;
    case 1:
        echo "Segunda-feira"; 
        break;
    case 2:
        echo "Terça-feira"; 
        break;
    case 3:
        echo "Quarta-feira"; 
        break;
    case 4:
        echo "Quinta-feira"; 
        break;
    case 5:
        echo "Sexta-feira"; 
        break;
    case 6:
        echo "Sabado"; 
        break;
    default: 
        echo "Dia invalido"; 
}
echo "<hr>";
date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/Y H:i:s");
?>
<hr>
<?php
$nome="u";
echo "nome = $nome";
echo "<br>MD5 = ".md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>Hash = $hash";
?>
