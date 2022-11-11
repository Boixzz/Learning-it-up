<?php
    if(isset($_POST['btnlogin']))
    {
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];

        $select=mysqli_query($conn,"SELECT * FROM user WHERE Email='$Email' AND Password='$Password'" );
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