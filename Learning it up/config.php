<?php
    @$viewpage=$_REQUEST['page'];

    switch($viewpage)
    {
        case 'home':
            $mainpage="home.php";
            break;
        
        case 'logout':
            $mainpage="logout.php";
            break;

        default:
            $mainpage='welcome.php';
    }
?>