<?php
abstract class dbConexion {
	protected $manejador='mysql';/*creamos las variables para la conexion */
	private static $servidor='localhost';
	private static $usuario='root';
	private static $pass='';
	protected $db_name='dbtaller';
	protected $cnx;
	protected function getConexion(){//creamos una funcion o un metodo
		
	try { // controlador de errores 
		
		$this->cnx= new PDO($this->manejador.":host=".self::$servidor.";dbname=".$this->db_name,self::$usuario,self::$pass,array(PDO::ATTR_PERSISTENT=>true));
			return $this-> cnx;
	}catch (PDOException $ex){
	
	echo "Conexion Error:".$ex->getMessage();
	
	}
}
}
	

?>
