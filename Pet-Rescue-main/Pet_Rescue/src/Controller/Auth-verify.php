<?php

namespace QI\PetRescue\Controller;

session_start();
if(empty($_SESSION["user_data"])){
    header("location:../../index.html");
    exit;
}

?>