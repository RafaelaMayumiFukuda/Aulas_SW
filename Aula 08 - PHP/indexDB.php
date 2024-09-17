<?php
$link = mysqli_connect("127.0.0.1", "root", "", "test");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
//echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
 
// Executando consulta SQL
$query1 = "SELECT * FROM aluno where rm=12345;";
$result1 = mysqli_query($link, $query1) ; 
$res1 = mysqli_fetch_row($result1);

if(!$res1){
    echo "rm não existe!<br />";
    return 0;
}

// Executando consulta SQL
$query2 = "SELECT * FROM aluno;";
$result2 = mysqli_query($link, $query2) ; 

// Imprimindo resultados em HTML
//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($result2)) { 
  echo "-----------------------------------------<br />"; 
  echo "RM:".$aux["rm"]."<br />"; 
  echo "Nome:".$aux["nome"]."<br />"; 
}

//  Liberando memória
mysqli_free_result($result1);
mysqli_free_result($result2);

// Fechando conexão
mysqli_close($link);

?> 