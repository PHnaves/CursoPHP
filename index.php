<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

<?php

use sistema\Nucleo\Message;
use sistema\Nucleo\Helpers;

include_once 'sistema/Nucleo/Message.php';
require_once 'sistema/config.php';
include_once 'sistema/Nucleo/Helpers.php';

// Comentario utilizado para uma unica linha
echo '<h1>Arquivo de Inicialização</h1>';

/*
* Comentario Utilizado Para Multiplas Linhas
* OBS: Ctrl + ; É Um Atalho para Comentarios de varias Linhas 
*/
print '<h2>Será a Primeira Página a Ser Carregada</h2>';

$texto = "texto para a funcao";

echo Helpers::saudacao();
echo '<hr>';
echo Helpers::resumirTexto($texto, 15);


//Tipos de Dados
$string = 'Textos ou caracteres especiais';
$int = 70;
$float = 34.56;
$boolean = true or false;
$null = null;

//Operador Ternario
$valorTeste = 1000;
echo $valorTeste < 1000 ? "Ta duro" : "Ta rico";

echo Helpers::formatarNumero($valorTeste);
echo '<hr>';

//contar tempo
echo Helpers::contarTempo('2025-05-09 14:31:12');

echo '<hr>';

//validações
echo Helpers::validarEmail('testando@gmail.com');

echo '<hr>';

$url = 'https://github.com/PHnaves/CursoPHP';

echo Helpers::validarUrlComFiltro($url);
echo '<hr>';
var_dump(Helpers::validarUrl($url));

echo '<hr>';

//constantes
echo SITE_NOME;
echo '<hr>';
echo constant('SITE_NOME');
echo '<hr>';

//informacoes do servidor
//var_dump($_SERVER);
var_dump(Helpers::localhost());
echo '<hr>';
echo Helpers::url('/admin');
echo '<hr>';

//introducao a arrays
echo Helpers::dataFormatada();
echo '<hr>';

//laços de repetição
$i = 0;
while ($i < 10) {
    echo ($i % 2 == 0) ? $i . ' é par' : $i . ' é impar';
    echo '<br>';
    $i++;
}

echo '<hr>';

for ($numero1 = 0; $numero1 <= 10; $numero1++) {
    for ($numero2 = 0; $numero2 <= 10; $numero2++) {
        echo $numero1 . ' x ' . $numero2 . ' = ' . ($numero1 * $numero2) . '<br>';
    }
    echo '<hr>';
}

//expressoes regulares
echo Helpers::verificarTexto('oi tudo bem meu email é pnaves001@gmail.com');
echo '<hr>';

echo Helpers::verificarEmails();
echo '<hr>';

echo Helpers::limparCpf('123.456.789-00');
echo '<hr>';

echo Helpers::verificarEmail('pnaves001@gmail.com');
echo '<hr>';

echo Helpers::verificarMaldicaoHelloWorld('Hello World aaaaaaaaaaaaaaaaaaa!');
echo '<hr>';

echo Helpers::filtrarArray();
echo '<hr>';

echo Helpers::dividirString();
echo '<hr>';

//introducao a classes
$message = new Message();
$message->title =  'Teste de atributo publico';
var_dump($message);
echo '<hr>';

//metodos de classes
echo $message->render();
echo '<hr>';

//encadeamento de metodos
echo $message->success('mensagem de sucesso')->render();
echo $message->warning('mensagem de perigo')->render();
echo $message->error('mensagem de error')->render();

//metodos magicos
echo (new Message());





