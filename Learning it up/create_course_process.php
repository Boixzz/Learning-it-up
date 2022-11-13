<?php
    if(isset($_POST['ccbtn']))
    {
        $CourseName=$_POST['CourseName'];
        $Language=$_POST['Language'];
        $Prize=$_POST['Prize'];
        $CourseType=$_POST['CourseType'];

        $ins=mysqli_query($conn,"Insert into course(CourseName,Language,Prize,CourseType) Values('$CourseName','$Language','$Prize','$CourseType')");
        if($ins)
            {
                echo "<script>alert('Successfully Created Course'); window.location.href='index.php?page=home'; </script>";
            }
    }
?>