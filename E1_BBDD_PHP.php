<?php
	$conex = mysql_connect("localhost","root","root");
	mysql_select_db("pruebas",$conex);
	$sql = "SELECT * FROM usuario where id_usuario='1'";
	$result = mysql_query($sql, $conex);
	while($row = mysql_fetch_array($result)){
		echo $row['nombre'];
		echo "<br/>";
		echo $row['telefono'];
		echo "<br/>";
		echo $row['apellido_1'];
		echo "<br/>";
		echo $row['apellido_2'];
		echo "<br/>";
	}				
?>