<?php

// Funcao sem parametro
function saudacao(): string
{
    $horaAtual = date('H:I:S');

    if ($horaAtual >= 0 and $horaAtual <= 5) {
        $saudacao = "Buenas Madrugas";
    } elseif ($horaAtual >= 6 and $horaAtual <= 12) {
        $saudacao = "Buenos Dias";
    } elseif ($horaAtual >= 13 and $horaAtual <= 18) {
        $saudacao = "Buenas Tardes";
    } else {
        $saudacao = "Buenas Notchas";
    }

    var_dump($horaAtual);

    return $saudacao;
}

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim($texto);

    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    // Pega até o limite e evita cortar palavras no meio
    $textoCortado = mb_substr($textoLimpo, 0, $limite);
    $ultimoEspaco = mb_strrpos($textoCortado, ' ');

    if ($ultimoEspaco !== false) {
        $textoCortado = mb_substr($textoCortado, 0, $ultimoEspaco);
    }

    return $textoCortado . $continue;
}

