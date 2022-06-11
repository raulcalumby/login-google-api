<?php
require __DIR__. '/vendor/autoload.php';
use Google\Client as GoogleClient;
use \App\Session\user as SessionUser;

// Verifico chaves obrigatorias do array
if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])) 
{
    // Vou redirecionar 
    header('location: index.php');
    exit;
}
// Definindo cookie
$cookie = $_COOKIE['g_csrf_token'] ??  '';

if($cookie !== $_POST['g_csrf_token'])
{
     // Vou redirecionar 
     header('location: index.php');
     exit;
}

$id_token = $_POST['credential'];
$cliente_id = //inserir aqui 

//Instância do cliente google
$client = new GoogleClient(['client_id' => $cliente_id]);
$payload = $client->verifyIdToken($id_token);

if (isset($payload['email'])) {
    SessionUser::login($payload['name'], $payload['email'], $payload['picture']);
    // Vou redirecionar 
    header('location: index.php');
    exit;
}

die('Problemas ');
?>