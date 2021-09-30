<?php 
include 'connect.php';

session_start();

$Vemail = $_POST['txtemail'];
$Vsenha = $_POST['txtsenha'];

//echo $Vemail. '<br>';
//echo $Vsenha. '<br>';

$consulta = $cn ->query("select id_client, usuario_client, email_client, senha_client, status_client from cliente where email_client = '$Vemail' and senha_client = '$Vsenha'");
 if($consulta ->rowCount() == 1 ) { // rowCount verifica se o usuario existe ou nao

     $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC); // transformando a variavel consulta em um array

     if ($exibeUsuario['status_client'] == 0) {
         $_SESSION['ID'] = $exibeUsuario['id_client'];
         $_SESSION['Status'] = 0;
         header('location:index.php');  //header redireciona para outra pagin
         // echo 'Usuário cadastrado';
     } else {
         $_SESSION['ID'] = $exibeUsuario['id_client'];
         $_SESSION['Status'] = 1;
         header('location:index.php');
         // echo 'Usuário não cadastrado';
     }
 }
 else {
         header('location:erro.php');
         // echo 'Usuário não cadastrado';
     }


?>