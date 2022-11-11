<?php
    @$viewpage=$_REQUEST['page'];

    switch($viewpage)
    {
        case 'register':
            $mainpage="adminregister.php";
            break;
        
        case 'home':
            $mainpage="home.php";
            break;

        case 'logout':
            $mainpage="logout.php";
            break;

        default:
            $mainpage='adminlogin.php';
    }
?>