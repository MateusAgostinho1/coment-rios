<?php
session_start();
?>

<?php

  //credenciais
  
  $servidor="localhost";
  $usuario="root";
  $senha="";
  $db="Batepapo";
  
  
  
  //conexao
  $conn = mysqli_connect($servidor, $usuario, $senha, $db);
  
  //$nome = "joelson";
  $Nome = $_POST['Nome'];
  $msg = $_POST['msg'];

  
  //insert
  $resultado = "INSERT INTO mensagens (Nome, msg, data_msg)
  VALUE('$Nome','$msg',NOW())";

  
  //Query
  $result_listar = mysqli_query($conn, $resultado);
  
  //verificacao de insercao
  if(mysqli_insert_id($conn)){
	 
	echo"perfeito <br>";
    echo"mensagem enviada com sucesso".mysqli_insert_id($conn);	
    header('location:index.php');
  }else{
	echo"erro de insercao de registro";
   }