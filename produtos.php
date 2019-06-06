<?php

$produto    = $_POST['produto'];
$categoria  = $_POST['categoria'];
$conexao    = mysql_connect('servidor', 'usuario', 'senha');
$bd         = mysql_select_db('teste');   

$query      = "INSERT INTO produto (descricao, categoria) VALUES ('$produto','$categoria')";
$insert     = mysql_connect($query, $conexao);

if($insert){
    echo "<script language='javascript' type='text/javascript'>
    alert('Produto cadastrado!');window.location.href='categorias.html'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível cadastrar esse produto!');window.location.href='categoria.html'</script>";
}


?>