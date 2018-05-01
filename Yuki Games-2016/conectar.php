<?php

$servidor = "mysql.hostinger.com.br";
$usuario = "u810260936_nisep";
$senha = "pandorabox";

$banco = "u810260936_nise";

@$connect = mysql_connect($servidor, $usuario, $senha)or die("O servidor não responde");


$dados = mysql_select_db($banco,$connect)or die("Não foi possível conectar-se ao banco");

?>