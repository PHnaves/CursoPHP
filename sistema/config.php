<?php

date_default_timezone_set('America/Sao_Paulo');

//informações do site
if (!defined('URL_PRODUCAO')) {
    define('URL_PRODUCAO', 'http://CursoPHP.com');
}
if (!defined('URL_DESENVOLVIMENTO')) {
    define('URL_DESENVOLVIMENTO', 'http://localhost/cursoPHP');
}

//urls do sistema
// const SITE_NOME = 'CursoPHP';
// const SITE_DESCRICAO = 'Revisão - Revisando PHP';

if (!defined('SITE_NOME')) {
    define('SITE_NOME', 'CursoPHP');
}
if (!defined('SITE_DESCRICAO')) {
    define('SITE_DESCRICAO', 'Revisão - Revisando PHP');
}


