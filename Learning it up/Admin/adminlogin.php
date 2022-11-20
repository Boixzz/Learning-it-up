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
    <title>Admin Login</title>
    <style>
        input{
            margin-top: 10px;
        }
        button{
            margin: 10px;
        }
    </style>
        <script type="text/javascript">
    function validatelogin(form)
    {
        var Email=form.Email.value;
        var Password=form.Password.value;

        if(Email == "")
        {
            alert("Please Enter Email");
            form.Email.focus();
            return false;
        }

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(Email.match(mailformat))
        {
            
        }
        else
        {
            alert("You have entered an invalid email address!")
            form.Email.focus();
            return false;
        }
        if(Password == "")
        {
            alert("Please Enter Password");
            form.Password.focus();
            return false;
        }
    }
    </script>
</head>
<body>
<div class="container" style="padding: 50px;">
        <form method="post" style="margin: auto; width: 50%;">
            <label class="form-label display-6 text-danger" style="font-family: 'Fasthand', cursive;">Admin Login</label>
            <input class="form-control" type="text" name="Email" placeholder="Enter Email">
            <input class="form-control" type="password" name="Password" placeholder="Enter Password">
            <button class="btn btn-warning" type="submit" name="btnlogin" onclick="return validatelogin(this.form)">Login</button>
        </form>
    </div>
</body>
</html>