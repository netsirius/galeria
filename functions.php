<?php
function connection($dbname, $user, $pass){
    try{
        //Nos conectamos a la bbdd
        $connection = new PDO("mysql:host=localhost;dbname=$dbname",$user, $pass);
        return $connection;
    }catch(PDOException $e){
        return false;
    }
}
?>