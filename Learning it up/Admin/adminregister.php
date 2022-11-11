<?php
    require_once('db.php');
    require_once('insert_process.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Learning it up/bootstrap/css/bootstrap.min.css">
    <script src="/Learning it up/bootstrap/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Admin Registation</title>

<style>
    input{
        margin-top: 10px;
    }
    button{
        margin: 10px;
    }
</style>
<script type="text/javascript">
    function validateform(form)
    {
        var FName=form.FName.value;
        var LName=form.LName.value;
        var DOB=form.DOB.value;
        var Email=form.Email.value;
        var Language=form.Language.value;
        var Password=form.Password.value;
        var CPassword=form.CPassword.value;
        var UserType=form.UserType.value;

        if(FName == "")
        {
            alert("Please Enter First Name");
            form.FName.focus();
            return false;
        }

        if(LName == "")
        {
            alert("Please Enter Last Name");
            form.LName.focus();
            return false;
        }

        if(Email == "")
        {
            alert("Please Enter Email");
            form.Email.focus();
            return false;
        }

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(Email.match(mailformat))
        {
            return true;
        }
        else
        {
            alert("You have entered an invalid email address!")
            form.Email.focus();
            return false;
        }

        if(Language == "")
        {
            alert("Please Enter Language");
            form.Language.focus();
            return false;
        }

        if(Password == "")
        {
            alert("Please Enter Password");
            form.Password.focus();
            return false;
        }

        if(CPassword == "")
        {
            alert("Please Enter Confirm Password");
            form.CPassword.focus();
            return false;
        }

        if(Password != CPassword)
        {
            alert("Password are not same!");
            form.CPassword.focus();
            return false;
        }

        if(UserType == "")
        {
            alert("Please choose user type");
            form.UserType.focus();
            return false;
        }
    }
</script>
</head>

<body>
    <div class="container" style="padding: 50px;">
        <form method="post" style="margin: auto; width: 50%;">
            <label class="form-label display-6 text-danger" style="font-family: 'Fasthand', cursive;">Admin Registation</label>
            <input class="form-control" type="text" name="FName" placeholder="Enter First Name">
            <input class="form-control" type="text" name="LName" placeholder="Enter Last Name">
            <input class="form-control" type="date" name="DOB" placeholder="Enter Date of Birth">
            <input class="form-control" type="text" name="Email" placeholder="Enter Email">
            <input class="form-control" type="text" name="Language" placeholder="Enter Language">
            <input class="form-control" type="password" name="Password" placeholder="Enter Password">
            <input class="form-control" type="password" name="CPassword" placeholder="Re-type Password">
            <input class="form-control" type="text" name="UserType" placeholder="Enter Your Role">
            <button class="btn btn-warning" type="submit" name="btnsignup" onclick="return validateform(this.form)">Submit</button>
        </form>
    </div>
</body>
</html>