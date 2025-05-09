<?php

require_once 'sistema/config.php';
include_once 'helpers.php';

// Comentario utilizado para uma unica linha
echo '<h1>Arquivo de Inicialização</h1>';

/*
* Comentario Utilizado Para Multiplas Linhas
* OBS: Ctrl + ; É Um Atalho para Comentarios de varias Linhas 
*/
print '<h2>Será a Primeira Página a Ser Carregada</h2>';

$texto = "texto para a funcao";

echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 15);


//Tipos de Dados
$string = 'Textos ou caracteres especiais';
$int = 70;
$float = 34.56;
$boolean = true or false;
$null = null;

//Operador Ternario
$valorTeste = 1000;
echo $valorTeste < 1000 ? "Ta duro" : "Ta rico";

echo formatarNumero($valorTeste);
echo '<hr>';

//contar tempo
echo contarTempo('2025-05-09 14:31:12');

echo '<hr>';

//validações
echo validarEmail('testando@gmail.com');

echo '<hr>';

$url = 'https://github.com/PHnaves/CursoPHP';

echo validarUrlComFiltro($url);
echo '<hr>';
var_dump(validarUrl($url));

echo '<hr>';

//constantes
echo SITE_NOME;
echo '<hr>';
echo constant('SITE_NOME');