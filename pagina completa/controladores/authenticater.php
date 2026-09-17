<?php
session_start();

function its_admin(){
    if(isset($_SESSION['rol'] === 1)){
        return true;
    }else{
        return false;
        header("location pagina.php? error = 'no autrizado'")
        exit();    
    }
}

>