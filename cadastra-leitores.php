<?php
include "config.php";
if (!$conn){
die ("Falha na conexão {mysqli_connect_error()}");

} 
//receber os dados do formulário
$nome = 'Bianca';
$dtnasc = '2007-02-04';
$celular = '(81) 9990-4508';
$email = 'siqueirabianca254@gmail.com';
$ra = '356788';
$endereco = 'Torres';
$num_end = '46'; 
$bairro = 'Janga';
$cidade = 'Paulista/PE';

// cria variável para inserir o registro
$sql = "INSERT INTO `leitores`
( `Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Endereco`, `NumEnd`, `Bairro`, `CidadeUF`) VALUES
 ('$nome','$dtnasc','$celular','$email','$ra','$endereco','$num_end','$bairro','$cidade')";

 //executa a consulta SQL. Se falhar, exibe o erro do banco de dados
 $query= mysqli_query (mysql:$conn,query: $sql)  or
 die (mysqli_error (mysql:$conn));

 if ($query){
echo "<center>";
echo "Cadastro realizado com sucesso!!<br>";
echo " <a href = 'index.php'><button title = 'Home page'>Voltar</button></a>";
echo "</center>";
 }else {
echo "<center>";
echo" <a href = 'index.php'><button title = 'Home page'>Voltar</button></a>";
echo "</center>";

 }
?>



 


