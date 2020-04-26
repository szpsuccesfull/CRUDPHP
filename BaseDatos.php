<?php

public class BaseDatos{
    // atributos 
    private $servidor="localhost";
    private $usuario="root";
    private $password="";
    private $nombreBaseDatos="futbolSAS"

    private $conexion;

    // constructor 
    function __construct(){}

    // Metodos
    public function conectarConBaseDatos(){
        // se establece la conexion 
        $this->conexion=mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->nombreBaseDatos
        );

        // validar el estado de la funciones 
        if(!($this->conexion)){
            die('<br> Error de conexion('.mysqli_connect_errno().')'.mysqli_connect_error());           
        }else{
            echo "<br> coneccion exitosa a la base de datos".$this->nombreBaseDatos;
    } 

}

?>