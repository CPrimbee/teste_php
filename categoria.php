<?php

$categoria  = $_POST['categoria'];
$conexao    = mysql_connect('servidor', 'usuario', 'senha');
$bd         = mysql_select_db('teste');   

$query      = "INSERT INTO categorias (descricao) VALUES ('$categoria')";
$insert     = mysql_connect($query, $conexao);

if($insert){
    echo "<script language='javascript' type='text/javascript'>
    alert('Categoria cadastrada!');window.location.href='categorias.html'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível cadastrar esta categoria!');window.location.href='categoria.html'</script>";
}
?>
