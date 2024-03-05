<?php

class conexion{
  public static function dbconexion(){
        try {
           return $conn = new PDO('mysql:host=localhost;dbname=crud','root','123456789');
        } catch (PDOException $error) {
            die($error->getMessage());
        }   
    }
}
