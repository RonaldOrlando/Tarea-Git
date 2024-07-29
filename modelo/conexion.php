<?php

class DBGestionLibreria
{
    private $servidor = "sql101.infinityfree.com";
    private $dataBase = "if0_35545667_LibreriaITLA";
    private $user = "if0_35545667";
    private $password = "PYsUfZO8ieVD";
    

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
}


?>
