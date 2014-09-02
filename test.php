<?php
require_once('dbConexion.php');

class Empleados extends dbConexion{
	
public function get_Empleado(){

try {
	
		$this ->getConexion();
		
		$sql="select idempleado,nombres,departamento,sueldo from empleados";
		
		$resultado= $this-> cnx-> query($sql) or die($sql);
		
		return $resultado;

}catch(PDOException $e){
	
	echo "Error:".$e->getMessage();
}
}


	public function codigo_Empleado($codigo){

try {
	
		$this ->getConexion(); 

		$sql = "select * from empleados where idempleado = $codigo";
		/*$sql="select idempleado,nombres,departamento,sueldo from empleados";*/
		
		$resultado= $this-> cnx-> query($sql) or die($sql);
		
		return $resultado;

}catch(PDOException $e){
	
	echo "Error:".$e->getMessage();
}
}

  public function insertar_Empleado($nombre, $departamento,$sueldo){

  	try {
	

		$sql = "insert into empleados(nombres, departamento, sueldo) values ('$nombre','$departamento','$sueldo')";
		/*$sql="select idempleado,nombres,departamento,sueldo from empleados";*/
		
		$resultado= $this-> cnx-> query($sql) or die($sql);
		
		return false;

}catch(PDOException $e){
	
	echo "Error:".$e->getMessage();
}
}

public function editar_Empleado($codigo,$nombre,$departamento,$sueldo){


try {
	

		$sql = "update empleados set nombres='$nombre',departamento='$departamento',sueldo='$sueldo' where idempleado=$codigo LIMIT 1";
		/*$sql="select idempleado,nombres,departamento,sueldo from empleados";*/
		
		$resultado= $this-> cnx-> query($sql) or die($sql);
		
		return false;

}catch(PDOException $e){
	
	echo "Error:".$e->getMessage();
}
}





}


  


/*}*/

?>


