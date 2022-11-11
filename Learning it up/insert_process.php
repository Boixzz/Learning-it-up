<?php
    if(isset($_POST['registerbtnv']))
    {
        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $DOB=$_POST['DOB'];
        $Email=$_POST['Email'];
        $Language=$_POST['Language'];
        $Password=$_POST['Password'];
        $UserType=$_POST['UserType'];

        $selectadmin=mysqli_query($conn,"SELECT * FROM user WHERE Email='$Email'");
        $dtrow=mysqli_num_rows($selectadmin);

        if($dtrow>0)
        {
            echo "<script>alert('admin Email is already registered!!'); window.location.href='index.php';</script>";
        }
        else
        {
            $ins=mysqli_query($conn,"Insert into user(FName,LName,DOB,Email,Language,Password,UserType) Values('$FName','$LName','$DOB','$Email','$Language','$Password','$UserType')");
            if($ins)
            {
                echo "<script>alert('Successfully Register!'); window.location.href='index.php'; </script>";
            }
        }
    }
?>