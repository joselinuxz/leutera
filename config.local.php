<?php
// Cargar el autoload de Composer
require 'vendor/autoload.php';

// Crear una instancia de Dotenv
use Dotenv\Dotenv;

// Cargar el archivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


// place for your configuration directives, so you can later easily update myaac
$config['installed'] = true;
$config['env'] = 'dev'; // dev or prod
$config['mail_enabled'] = true;
$config['server_path'] = $_ENV['SERVER_PATH'];
$config['mail_admin'] = 'admin@gmail.com';
$config['mail_address'] = 'admin@gmail.com';
$config['date_timezone'] = 'Europe/Berlin';
$config['client'] = '710';
$config['anonymous_usage_statistics'] = false;
$config['session_prefix'] = 'myaac_tgkqoscy_';
$config['cache_prefix'] = 'myaac_p1pa6432_';

$config['highscores_ids_hidden'] = array(5, 6, 7, 8, 9);
