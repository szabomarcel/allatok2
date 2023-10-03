<?php
if ($_SESSION['login']){
    echo $_SESSION['username'].' belépett';
}else{
    if(filter_input(INPUT_GET, 'menu') == "regisztracio"){
        require_once './login/regisztracio.php';
    }
    else {
        require_once './login/login.php';
    }
}