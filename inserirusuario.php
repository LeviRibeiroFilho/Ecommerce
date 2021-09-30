<?php

include 'connect.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$endereco = $_POST['txtendereco'];
$cidade = $_POST['txtcidade'];
$cep = $_POST['txtcep'];

// testando as variaveis
/* echo $nome . '<br>';
echo $email. '<br>';
echo $senha. '<br>';
echo $endereco. '<br>';
echo $cidade. '<br>';
echo $cep. '<br>'; */

$consulta = $cn ->query("select email_client from cliente where email_client = '$email'");
$exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

if ($consulta ->rowCount() == 1 ) {
    echo 'E-mail Já Cadastrado';
} else {
    echo 'Endereço de E-mail Disponível';
}
