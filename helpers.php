<?php

include 'sistema/config.php';

// Função com operador Ternario
function formatarNumero(float $numero): string
{
    return number_format(($numero ? $numero : 0), 2, ',', '.');
}

// Funcao sem parametro
function saudacao(): string
{
    $horaAtual = date('H:i:s');

    switch ($horaAtual) {
        case $horaAtual >= 0 and $horaAtual < 6:
            $saudacao = "Buenas Madrugadas";
            break;

        case $horaAtual >= 6 && $horaAtual <= 12:
            $saudacao = "Buenos Dias";
            break;

        case $horaAtual > 12 && $horaAtual <= 18:
            $saudacao = "Buenos Dias";
            break;

        default:
            $saudacao = "Buenas Noches";
            break;
    }
    $saudacao = match ($horaAtual) {
        $horaAtual >= 0 and $horaAtual < 6 => "Buenas Madrugadas",
        $horaAtual >= 6 and $horaAtual <= 12 => "Buenos Dias",
        $horaAtual > 12 and $horaAtual <= 18 => "Buenas Tardes",
        default => "Buenas Noches"
    };

    return $saudacao;
}

/**
 * Resume Um texto e coloca tres pontinhos ao final
 * @param string $texto Texto que será resumido
 * @param int $limite Qunatidade de caracteres
 * @param string $continue O que será exibido ao final do texto resumido
 * @return string Texto resumido  
 */
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

/**
 * Conta o tempo decorrido de uma data
 * @param string $data
 * @return string
 */
function contarTempo(string $data): string
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2419200);
    $anos = round($diferenca / 29030400);

    if ($segundos <= 60) {
        return 'agora meu patrão';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? "há 1 minuto" : "há $minutos minutos";
    } elseif ($horas <= 24) {
        return $horas == 1 ? "há 1 hora" : "há $horas horas";
    } elseif ($dias <= 7) {
        return $dias == 1 ? "há 1 dia" : "há $dias dias";
    } elseif ($semanas <= 4) {
        return $semanas == 1 ? "há 1 semana" : "há $semanas semanas";
    } elseif ($meses <= 12) {
        return $meses == 1 ? "há 1 mes" : "há $meses meses";
    } else {
        return $anos == 1 ? "há 1 ano" : "há $anos anos";
    }
}


/**
 * Valida um endereço de email
 * @param string $email
 * @return string 
 */
function validarEmail(string $email): string
{

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($email) {
        return "Endereço de email valido";
    } else {
        return "Endereço de email invalido";
    }
}

/**
 * Valida uma url
 * @param string url
 * @return string
 */
function validarUrlComFiltro(string $url): string
{

    $url = filter_var($url, FILTER_VALIDATE_URL);

    if ($url) {
        return "Url valida";
    } else {
        return "Url invalida";
    }
}

function validarUrl(string $url): bool
{
    if (mb_strlen($url) < 10) {
        return false;
    }
    if (!str_contains($url, '.')) {
        return false;
    }
    if (str_contains($url, 'http://') or str_contains($url, 'https://')) {
        return true;
    }
    return false;
}


function localhost(): bool
{
    return ($_SERVER['SERVER_NAME'] == 'localhost' ? true : false);
}

/**
 * Analisa a url e retorna a de desenvolvimento ou de producao
 * @param string $url
 * @return string 
 */
function url(string $url): string
{
    $servidor = $_SERVER['SERVER_NAME'];
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if (str_starts_with($url, '/')) {
        return $ambiente . $url;
    }
    return $ambiente . '/' . $url;
}

/**
 * Formatar data atual
 * @return string
 */
function dataFormatada(): string
{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');

    $nomeDiasSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabado'];

    $nomeMeses = [
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro'
    ];

    $dataFormatada = $nomeDiasSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeMeses[$mes] . ' de ' . $ano;

    return $dataFormatada;
}
