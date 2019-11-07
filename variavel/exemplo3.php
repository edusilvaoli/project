<?php

/* tipo de dados básico */
$nome = "Hcode"; 

$site = 'www.hcode.com.br'; 

$ano = 1990; 

$salario = 5500.99; 

$bloqueado = false; 
///////////////////

/* tipo composto */

$frutas = array("abacaxi","próximo","laranja","manga"); 

echo $frutas[3]; 

$nascimento = new DateTime(); 

var_dump($nascimento);

//////
/* tipo especiais */

$arquivo = fopen("exemplo3.php",r);

var_dump($arquivo); 

?>