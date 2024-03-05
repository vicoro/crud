<?php

    function getAll($conn,$tabla){
        try {
            $query = $conn->prepare("select * from {$tabla}");
            $query->execute();    
            return $query->fetchAll();  
        } catch (PDOException $error) {
            die($error->getMessage());
        }    
    }
    function crear($tabla,$parametros,$conn){
        $col =implode(', ',array_keys($parametros));  
       
        $valores =  implode(', ',array_values($parametros));     
        var_dump($valores);
       // $query=$conn->prepare("insert into {$tabla}({$col}) values ('{$valores}')");
        
        // $query->execute();
             
    }
