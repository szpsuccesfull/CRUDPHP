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
    } 

}

?>