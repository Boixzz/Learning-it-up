<?php  
    if($_SESSION['UserID']!="")
    {
?>
<?php
    echo @$_SESSION['Name'];
?>
<?php
    if($_SESSION['UserID']!='')
    {
?>
<a href="index.php?page=logout">
    <p>Log out</p>
</a>
<?php
    }else{

    }
?>
<?php
    }
    else{
        echo "Error 404! Page not found!!";
    }
?>