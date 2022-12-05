<?php

    $database= new mysqli("localhost","root","","ecare");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>