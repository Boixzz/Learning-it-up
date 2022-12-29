<?php
    if(isset($_POST['btnsignup']))
    {
        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $DOB=$_POST['DOB'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];

        $selectadmin=mysqli_query($conn,"SELECT * FROM user WHERE Email='$Email'");
        $dtrow=mysqli_num_rows($selectadmin);

        if($dtrow>0)
        {
            echo "<script>alert('admin Email is already registered!!'); window.location.href='index.php?page=home';</script>";
        }
        else
        {
            $ins=mysqli_query($conn,"Insert into user(FName,LName,DOB,Email,Language,Password,UserType) Values('$FName','$LName','$DOB','$Email','Non','$Password','Admin')");
            if($ins)
            {
                echo "<script>alert('Successfully Register!'); window.location.href='index.php?page=home'; </script>";
            }
        }
    }
?>
<?php
    if(isset($_POST['btnlogin']))
    {
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];

        $select=mysqli_query($conn,"SELECT * FROM user WHERE Email='$Email' AND Password='$Password'");
        $dtrow=mysqli_num_rows($select);
        $dtrecord=mysqli_fetch_assoc($select);

        if($dtrow>0)
        {
            $_SESSION['UserID']=$dtrecord['UserID'];
            $_SESSION['Name']=$dtrecord['FName'] . " " . $dtrecord['LName'];
            $_SESSION['UserType']=$dtrecord['UserType'];

            echo "<script> window.location.href='index.php?page=home';</script>";
        }

        else
        {
            echo " <script> alert('Email or Password does not match!!');
            window.location.href='index.php';</script>";
        }
    }
?>
<?php
    if(isset($_POST['addlanguagebtn']))
    {
        $Language=$_POST['Language'];

        $ins=mysqli_query($conn,"Insert into language(Language) Values('$Language')");
        if($ins)
            {
                echo "<script>alert('Successfully Add Language'); window.location.href='index.php?page=home'; </script>";
            }
    }
?>