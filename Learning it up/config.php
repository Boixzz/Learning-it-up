<?php
    @$viewpage=$_REQUEST['page'];

    switch($viewpage)
    {
        case 'course':
            $mainpage="course.php";
            break;
            
        case 'courseedit':
            $mainpage="course_edit.php";
            break;

        case 'edit':
            $mainpage="edit_profile.php";
            break;
            
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