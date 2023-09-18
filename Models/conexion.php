<?php

class Acceso
{

    /*static public function conectar()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=jipsafety", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }*/

    static public function conectar()
    {
        try {
            $conn = new PDO("mysql:host=82.180.174.103;dbname=u558030020_jipsafety", "u558030020_jipsafety", "1@XPv5P+", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }
}
