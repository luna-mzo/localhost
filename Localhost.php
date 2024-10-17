<?php

 $link = mysql_connect('localhost', 'root', 'root');
if (!$link) 

{

	die('Não pode ser conectado: ' . mysql_error());

}

echo 'Conexão com sucesso!';
mysql_close($link);

?>