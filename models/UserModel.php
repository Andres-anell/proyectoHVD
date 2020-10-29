<?php 



    class User extends Conexion{
        //metodo para la comprobacion de usuarios existentes en la BD 

        public function getUser($username, $password){
            //setencia de consulta en la base de datos
            $sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND password ='$password' AND Estado = 'ACTIVO' ";
            //result ase uso del metodo connect heredado de la clase padre Conexion
            //luego el metodo usa tambien la funcion query() para ejecutar la senetencia de consulta
            //Connect = ejecucion de la conexion albergada en un metodo
            $result = $this->connect()->query($sql);
            
            $numRows = $result->num_rows;
        
            //validacion de que existe una fila en la BD con los datos a verificar
            
            if($numRows == 1){
                return true;
            } 
            return false;
        }
}

class usersHistory extends Conexion{

    public $resultado;

    public function getHistorial(){
        $sentencia = "SELECT * FROM reporte";
        $consult = $this->connect()->query($sentencia);

        $result = $consult->num_rows;
        if ($result > 1){
            return $resultado = $this->$result;
        }else{
            return $resultado = $this->null;
        }
    }
}