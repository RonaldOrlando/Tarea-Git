<?php

class DBGestionLibreria
{
    private $servidor = "localhost";
    private $dataBase = "DB_libreria";
    private $user = "root";
    private $password = "";

    public function getConection()
    {
        $dsn = "mysql:host=$this->servidor;dbname=$this->dataBase";
        $obPDO = new PDO($dsn, $this->user, $this->password);
        return $obPDO;
    }

    public function getTitulos()
    {
        $pdoConexion = $this->getConection();
        $resultado = [];
        if (is_object($pdoConexion)) {
            $sql = "SELECT * FROM  titulos";
            $resultado = $pdoConexion->query($sql);
        }

        return $resultado;
    }

    public function getAutores()
    {
        $pdoConexion = $this->getConection();
        $resultado = [];
        if (is_object($pdoConexion)) {
            $sql = "SELECT * FROM  autores";
            $resultado = $pdoConexion->query($sql);
        }

        return $resultado;
    }
    public function getTiendas()
    {
        $pdoConexion = $this->getConection();
        $resultado = [];
        if (is_object($pdoConexion)) {
            $sql = "SELECT * FROM  tiendas";
            $resultado = $pdoConexion->query($sql);
        }

        return $resultado;
    }
}


?>
