<?php
    if(isset($_POST['registerbtn']))
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
            $_SESSION['FName']=$dtrecord['FName'];
            $_SESSION['LName']=$dtrecord['LName'];
            $_SESSION['Name']=$dtrecord['FName'] . " " . $dtrecord['LName'];
            $_SESSION['UserType']=$dtrecord['UserType'];
            $_SESSION['DOB']=$dtrecord['DOB'];
            $_SESSION['Email']=$dtrecord['Email'];
            $_SESSION['Language']=$dtrecord['Language'];

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
    if(isset($_POST['ccbtn']))
    {
        $CourseName=$_POST['CourseName'];
        $Language=$_POST['Language'];
        $Prize=$_POST['Prize'];
        $CourseType=$_POST['CourseType'];
        $Instructor=$_SESSION['Name'];
        $Cimg=$_FILES['Cimg']['name'];
        $CFile=$_FILES['CFile']['name'];

        $ins=mysqli_query($conn,"Insert into course(CourseName,Language,Prize,CourseType,InstrustorName,Cimg) Values('$CourseName','$Language','$Prize','$CourseType','$Instructor','$Cimg')");
        move_uploaded_file($_FILES['Cimg']['tmp_name'],'Cimg/' .$Cimg);
        if($ins)
            {
                echo "<script>alert('Successfully Created Course'); window.location.href='index.php?page=home'; </script>";
            }
    }
?>
<?php
    if(isset($_POST['btneditform']))
    {
        $Email= $_SESSION['Email'];
        $Password=$_POST['Password'];
        $UserID= $_SESSION['UserID'];

        $select=mysqli_query($conn,"SELECT * FROM user WHERE Email='$Email' AND Password='$Password'" );
        $dtrow=mysqli_num_rows($select);
        $dtrecord=mysqli_fetch_assoc($select);

        if($dtrow>0)
        {
            echo "<script> window.location.href='index.php?page=edit&action=edit&editid=$UserID '</script>";
        }

        else
        {
            echo " <script> alert('Password does not match!!');
            window.location.href='index.php?page=home';</script>";
        }
    }
?>
<?php
    if(isset($_POST['editcbtn']))
    {
        $edid=$_REQUEST['editid'];
        $CourseName=$_POST['CourseName'];
        $Language=$_POST['Language'];
        $Prize=$_POST['Prize'];
        $CourseType=$_POST['CourseType'];
        $Coldimg=$_POST['Coldimg'];
        $Cnewimg=$_FILES['Cnewimg']['name'];

        $ins=mysqli_query($conn,"UPDATE course SET CourseName='$CourseName',Language='$Language',Prize='$Prize',CourseType='$CourseType' WHERE CourseID='$edid'");

        if($Cnewimg=="")
        {
            $inspd=mysqli_query($conn,"UPDATE course SET Cimg='$Coldimg' WHERE CourseID='$edid'");
            echo " <script> alert('Edit Successfully!!');
            window.location.href='index.php?page=home';</script>";
        }
        else
        {
            $inspd=mysqli_query($conn,"UPDATE course SET Cimg='$Cnewimg' WHERE CourseID='$edid'");
            move_uploaded_file($_FILES['Cnewimg']['tmp_name'],'Cimg/' . $Cnewimg);
            echo " <script> alert('Edit Successfully!!');
            window.location.href='index.php?page=home';</script>";
        }
    }
?>
<?php
    if(isset($_POST['editprofilebtn']))
    {
        $edid=$_REQUEST['editid'];
        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $Email=$_POST['Email'];
        $OldP=$_POST['OldP'];
        $Password=$_POST['Password'];
        $CPassword=$_POST['CPassword'];
        
        if($Password != $CPassword)
        {
            echo "<script> alert('Password does not match!!');</script>";
        }
        else
        {
            $ins=mysqli_query($conn,"UPDATE user SET FName='$FName',LName='$LName',Email='$Email' WHERE UserID='$edid'");

            if($Password=="")
            {
                $inspd=mysqli_query($conn,"UPDATE user SET Password='$OldP' WHERE UserID='$edid'");
                echo " <script> alert('Edit Successfully!!');
                window.location.href='index.php?page=home';</script>";
            }
            else
            {
                $inspd=mysqli_query($conn,"UPDATE user SET Password='$Password' WHERE UserID='$edid'");
                echo " <script> alert('Edit Successfully!!');
                window.location.href='index.php?page=home';</script>";
            }
        }
        
    }
?>
<?php
    if(isset($_POST['ucfbtn']))
    {
        $CourseID=$_POST['Language'];
        $File=$_FILES['File']['name'];

        $ins=mysqli_query($conn,"Insert into coursefile(CourseID,File) Values('$CourseID','$File')");
        move_uploaded_file($_FILES['File']['tmp_name'],'File/' .$File);
        if($ins)
            {
                echo "<script>alert('Successfully Uploaded Course file'); window.location.href='index.php?page=home'; </script>";
            }
    }
?>
<?php
    if(isset($_POST['enrollbtn']))
    {
        $StudentID=$_SESSION['UserID'];
        $CourseID=$_POST['enrollbtn'];
        

        $ins=mysqli_query($conn,"Insert into coursedetail(StudentID,CourseID) Values('$StudentID','$CourseID')");
        if($ins)
        {
            echo "<script>alert('successfully Enroll Course');</script>";
        }
    }
?>
