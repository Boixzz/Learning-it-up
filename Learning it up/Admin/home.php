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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="/Learning it up/bootstrap/css/bootstrap.min.css">
    <script src="/Learning it up/bootstrap/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }
        p{
            font-family: 'Roboto', sans-serif;
        }
        .btn{
            color: #fff7e9;
        }
        .nav-link{
            text-decoration: none;
            color: #faf7f0;
        }
    </style>
    <style>
        .rgstf{
            margin-top: 10px;
        }
        .smbtn{
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
        var Password=form.Password.value;
        var CPassword=form.CPassword.value;

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

        if(DOB == "")
        {
            alert("Please Enter Date of Birth")
            form.DOB.focus();
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
    }
    </script>
</head>
<body>
    <div id="top" class="container-fluid" style="background-color: #c47aff; color: #faf7f0;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                    <p class="display-6 text-danger" style="font-family: 'Fasthand', cursive;">Learning it up</p>
                    <ul class="nav justify-content-end text-center" id="nav-bar-list">
                        <li class="nav-item" style="border-left: solid #3c4048 1px;">
                            <a class="nav-link" href="index.php?page=logout">Log out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#profile">
                                    <?php
                                        echo @$_SESSION['Name'];
                                    ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">(
                                    <?php
                                        echo @$_SESSION['UserType'];
                                    ?>)
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                
            </div>
            <div class="col-sm-5">
                <canvas id="myChart1"></canvas>
            </div>
            <div class="col-sm-5" style="margin-top: 50px;">
                <form method="post">
                    <div class="input-group">
                        <input class="form-control" type="text" name="Language" placeholder="Add Language">
                        <button class="btn btn-warning" type="submit" name="addlanguagebtn">Add</button>
                    </div>
                    <div class="container" style="padding: 50px;">
                    <form method="post" style="margin: auto; width: 50%;">
                        <label class="form-label display-6 text-danger" style="font-family: 'Fasthand', cursive;">Admin Registation</label>
                        <input class="form-control rgstf" type="text" name="FName" placeholder="Enter First Name">
                        <input class="form-control rgstf" type="text" name="LName" placeholder="Enter Last Name">
                        <input class="form-control rgstf" type="date" name="DOB" placeholder="Enter Date of Birth">
                        <input class="form-control rgstf" type="text" name="Email" placeholder="Enter Email">                        <input class="form-control rgstf" type="password" name="Password" placeholder="Enter Password">
                        <input class="form-control rgstf" type="password" name="CPassword" placeholder="Re-type Password">
                        <button class="btn btn-warning smbtn" type="submit" name="btnsignup" onclick="return validateform(this.form)">Submit</button>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script>
  const ctx = document.getElementById('myChart1');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
</html>
<?php
    }
    else{
        echo "Error 404! Page not found!!";
    }
?>