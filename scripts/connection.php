<?php

    try{
        $connection = new PDO("mysql:host=localhost;db=gymcels");
        echo "Connection estabilished";
    }catch(PDOException $ex){
        echo $ex.message;
    }catch(Exception $ex){
        echo $ex.message;
    }

?>