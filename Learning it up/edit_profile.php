<?php  
    if($_SESSION['UserID']!="")
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Edit Profile</title>
    <style>
        .rgstf{
            margin-top: 10px;
        }
        .smbtn{
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container" style="padding: 50px;">
        <form method="post" style="margin: auto; width: 50%;">
            <label class="form-label display-6 text-danger" style="font-family: 'Fasthand', cursive;">Edit Profile</label>
            <input class="form-control rgstf" type="text" name="FName" placeholder="<?php
                                                                                        echo @$_SESSION['FName'];
                                                                                    ?>">
            <input class="form-control rgstf" type="text" name="LName" placeholder="<?php
                                                                                        echo @$_SESSION['LName'];
                                                                                    ?>">
            <input class="form-control rgstf" type="text" name="Email" placeholder="<?php
                                                                                        echo @$_SESSION['Email'];
                                                                                    ?>">                       
            <input class="form-control rgstf" type="password" name="Password" placeholder="Enter New Password">
            <input class="form-control rgstf" type="password" name="CPassword" placeholder="Re-type New Password">
            <button class="btn btn-warning smbtn" type="submit" name="editprofilebtn">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
    }
    else{
        echo "Error 404! Page not found!!";
    }
?>