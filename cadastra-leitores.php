<?php
include "config.php";
if (!$conn){
    die("falha na conexão{mysqli_connect_error()}");
} 
//recebe os dados do formulário
$nome ='Victoria';
$dtnasc ='2007-06-12';
$celular ='(81) 987695395';
$email = 'victoriafreitas.abreu12@gmail';
$ra = '1111111';
$endereco = 'Rua Peixe Agulha';
$num_end = '13';
$bairro = 'Ouro Preto';
$cidade = 'Olinda';

//criar variável para inserir o registro
$sql = '';"INSERT INTO 'leitores'
('nome', 'DtNasc','Celular', 'Email','RA','Endereco', 'NumEnd','Bairro', 'CidadeUF') VALUES
('$nome', '$dtnasc','$celular','$email', '$ra','$endereco', '$num_end', '$bairro', '$cidade')";

 //Executa a consulta SQL. Se falhar, exibe o erro do banco de dados
 $query = mysqli_query(mysql:$conn,query: $sql) or
 die(mysqli_error($conn));


 //Executa a consulta SQL. Se falhar, exibe o erro do banco de dados
 $query = mysqli_query(mysql: $conn,query: $sql) or
 die (mysqli_error($conn));

 if($query){
    echo"<center>";
    echo"cadrasto realizado com sucesso!!<br>";
    echo "<a href='index.php'><button title = 'Home page' >voltar</button></a>";
    echo "</center";
 }else{
    echo"<center>";
    echo"<a href= 'index.php'><button title='Home page'>voltar</button></a";
    echo"</center";
 }
 ?>
