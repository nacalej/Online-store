<?php

class Database
{
	static function connect()
	{
		//Conexión a la base de datos:
		$db = new mysqli('localhost', 'root', '', 'tienda');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}//Cierre statict function connect

}//Cierre class Database



 ?>