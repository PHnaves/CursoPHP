<?php

// Funcao sem parametro
function saudacao() : string
{
    return "buenas notchas";
}

//funcao com parametros
function resumirTexto(string $texto, int $limite, string $continue = '...') : string
{
    return $texto;
}