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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Learning it up</title>
    <style>
        body{
            background-color: #faf7f0;
        }
        .nav-link{
            text-decoration: none;
            color: #faf7f0;
        }
        .btn{
            color: #fff7e9;
        }
        p{
            font-family: 'Roboto', sans-serif;
        }
        .modal input,select{
            margin-bottom: 5px;
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
    <div class="modal" id="login">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Login here</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <form method="post">
                <div class="modal-body">
                    <input class="form-control" type="email" name="Email" placeholder="Email">
                    <input class="form-control" type="password" name="Password" placeholder="Password">
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning" name="btnlogin">Log in</button>
                </div>
            </form>
      
          </div>
        </div>
      </div>
    <div class="modal" id="register">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Register Here</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
        
                <form method="post">
                    <div class="modal-body">
                        <input class="form-control" type="text" name="FName" placeholder="First Name">
                        <input class="form-control" type="text" name="LName" placeholder="Last Name">
                        <input class="form-control" type="date" name="DOB" placeholder="Date of Birth">
                        <input class="form-control" type="text" name="Email" placeholder="Email">
                        <select class="form-select" name="Language">
                            <option active hidden>Language</option>
                            <option value="Spanish">Spanish</option>
                            <option value="English">English</option>
                            <option value="Burmese">Burmese</option>  
                        </select>
                        <input class="form-control" type="password" name="Password" placeholder="Password">
                        <input class="form-control" type="password" name="CPassword" placeholder="Re-type Password">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="UserType" value="Instructor">Instructor
                            <label class="form-check-label" for="radio1"></label>
                          </div>
                          <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="UserType" value="Student">student
                            <label class="form-check-label" for="radio2"></label>
                          </div>
                    </div>
    
                    <div class="modal-footer">
                        <button name="registerbtn" type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
        
            </div>
        </div>
      </div>
    <div id="top" class="container-fluid" style="background-color: #c47aff; color: #faf7f0;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                    <p class="display-6 text-danger" style="font-family: 'Fasthand', cursive;">Learning it up</p>
                    <ul class="nav justify-content-end text-center" id="nav-bar-list">
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#courses">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#category">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item" style="border-left: solid #3c4048 1px;">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#login">Log in</a>
                        </li>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#register">Join Now</button>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col-sm-6">
                    <p class="display-3">
                        Learn from <b>Nothing</b> to be <b>Something</b>
                    </p>
                    <p class="samll">
                        Learning it up is onine learning and teaching marketplace with over 1000+ course that can improve your skill better
                    </p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="What do you want to learn?">
                        <button class="btn btn-warning" type="submit">Search</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img class="mx-auto d-block" src="img/headpik.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="features">
        <p class="h3" style="text-align: center; margin-top: 50px;">What Will You Get From <b>Learning it up</b> ?</p>
        <div class="row">
            <div class="col-sm-6" style="padding: 100px;">
                <img class="mx-auto d-block" src="img/pik1.png">
            </div>
            <div class="col-sm-6" style="padding: 100px;">
                <p class="h6 text-primary">01. ONLINE MENTONING</p>
                <p class="h2">Learn more effective with Expert Mentor</p>
                <p>With on expert mentor, you will be easier to understand the subject matter. You can also ask questions about the online meterial that we provide</p>
                <ul>
                    <li>Free E-book and Video</li>
                    <li>Lifetime Access</li>
                    <li>Expert Mentor</li>
                </ul>
                <button type="button" class="btn btn-warning">Join Now</button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6" style="padding: 100px;">
                <img class="mx-auto d-block" src="img/pik2.png">
            </div>
            <div class="col-sm-6" style="padding: 100px;">
                <p class="h6 text-primary">02. CERTIFICATION</p>
                <p class="h2">Get Award Certificate for your success</p>
                <p>After yoy mastering that material we provide. We provide some challange to get a certificate. It is you can improve your CV.</p>
                <ul>
                    <li>Challange</li>
                    <li>Award Certificate</li>
                    <li>Expertise License</li>
                </ul>
                <button type="button" class="btn btn-warning">Join Now</button>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="courses">
        <p class="h3" style="text-align: center; margin-top: 50px;">Let's Learn Together!</p>
        <div class="container">
            <p class="h3" style="margin-top: 50px;">Popular Course</p>
            <div class="row">
                <div class="card col-sm-3" style="margin: 10px; padding: 10px;">
                    <img class="card-img-top rounded" src="img/co1.jpg" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title text-primary">$370</h5>
                        <h4 class="card-text">How to Build Foundation for Your Brand</h4>
                        <h6 class="card-title text-success">by John Doe</h6>
                        <a href="#" class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
                <div class="card col-sm-3" style="margin: 10px; padding: 10px;">
                    <img class="card-img-top rounded" src="img/co2.jpg" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title text-primary">$500</h5>
                        <h4 class="card-text">Sourse Code Management for Beginners</h4>
                        <h6 class="card-title text-success">by John Doe</h6>
                        <a href="#" class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
                <div class="card col-sm-3" style="margin: 10px; padding: 10px;">
                    <img class="card-img-top rounded" src="img/co3.jpg" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title text-primary">$820</h5>
                        <h4 class="card-text">Building Digital Partnership an Ecosystems</h4>
                        <h6 class="card-title text-success">by John Doe</h6>
                        <a href="#" class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="category">
        <div class="container">
            <p class="h3" style="margin-top: 50px;">Top Category</p>
            <div class="row">
                <div class="col-sm-3">
                    <button type="button" class="btn btn-outline-primary" style="margin: 50px; width: 120px; height: 120px; color: black;">Bussiness</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-outline-secondary" style="margin: 50px; width: 120px; height: 120px; color: black;">Cooking</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-outline-success" style="margin: 50px; width: 120px; height: 120px; color: black;">Design</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-outline-info" style="margin: 50px; width: 120px; height: 120px; color: black;">Mathematic</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-outline-warning" style="margin: 50px; width: 120px; height: 120px; color: black;">Music</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-outline-danger" style="margin: 50px; width: 120px; height: 120px; color: black;">Photography</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-outline-secondary" style="margin: 50px; width: 120px; height: 120px; color: black;">Programming</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-outline-primary" style="margin: 50px; width: 120px; height: 120px; color: black;">Science</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p class="display-6 text-danger" style="font-family: 'Fasthand', cursive;">Learning it up</p>
                </div>
                <div class="col-sm-4" style="text-align: center;">
                    <img style="width: 30px; margin: 20px;" src="svg/facebook.svg">
                    <img style="width: 30px; margin: 20px;" src="svg/twitter.svg">
                    <img style="width: 30px; margin: 20px;" src="svg/discord.svg">
                </div>
                <div class="col-sm-4" style="padding: 20px; text-align: right;">
                    <p class="text.dark">Copyright by <b>Learning it up</b> team</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>