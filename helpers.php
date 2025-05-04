<?php

// Funcao sem parametro
function saudacao(): string
{
    $horaAtual = 22;

    if ($horaAtual >= 0 and $horaAtual <= 5) {
        $saudacao = "Buenas Madrugas";
    } elseif ($horaAtual >= 6 and $horaAtual <= 12) {
        $saudacao = "Buenos Dias";
    } elseif ($horaAtual >= 13 and $horaAtual <= 18) {
        $saudacao = "Buenas Tardes";
    } else {
        $saudacao = "Buenas Notchas";
    }

    return $saudacao;
}

//funcao com parametros
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    return $texto;
}
