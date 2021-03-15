<?php

/*
Em PHP, aplique as validações necessárias para que se garanta 
que as variáveis abaixo existam, tenham um valor e que estejam 
no tipo correto para ser utilizado: 
*/

// a) Validar a variável: $variavel = 198;
$variavel = 198;
echo isset($variavel);
echo !empty($variavel);
echo is_numeric($variavel);



// b) Validar o array e o indice “endereco”:
$variavel = array('nome' => 'Pedro Luiz', 'endereco' => 'Av Taquara', 'telefone' => '(51) 5151-51511');
echo isset($variavel);
echo !empty($variavel);
echo is_array($variavel);

echo isset($variavel['endereco']);
echo !empty($variavel['endereco']);
echo is_string($variavel['endereco']);



//c) Validar a variável: $variavel = “Romarinho”;
$variavel = “Romarinho”;
echo isset($variavel);
echo !empty($variavel);
echo is_string($variavel);

?>