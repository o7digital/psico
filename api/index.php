<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$page = ($path === '/' || $path === '/index.html') ? 'index.php' : ltrim($path, '/');
$pages = [
    'index.php', 'nosotros.php', 'historia.php',
    'contacto-psicoterapia-del-valle.php', 'sendmail.php',
    'psicologos-autoestima-estres-pareja-ansiedad.php',
    'psicologos-en-el-distrito-federal.php',
    'psicologos-estres-depresion-ansiedad-duelo.php',
    'psicologos-terapia-problemasde-autoestima.php',
    'psicoterapia-individual-y-de-pareja.php',
];
if (!in_array($page, $pages, true)) {
    http_response_code(404);
    echo 'Page not found';
    exit;
}
chdir(dirname(__DIR__));
require $page;
