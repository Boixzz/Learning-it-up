<?php  
    if($_SESSION['UserID']!="")
    {
?>
<?php
    require_once('db.php');
    require_once('create_course_process.php');
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
        .container form input,select{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div id="top" class="container-fluid" style="background-color: #c47aff; color: #faf7f0;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                    <p class="display-6 text-danger" style="font-family: 'Fasthand', cursive;">Learning it up</p>
                    <ul class="nav justify-content-end text-center" id="nav-bar-list">
                        <li class="nav-item" style="margin-right: 30px;">
                            <div class="input-group" style="margin-right: 100px;">
                                <input type="text" class="form-control" placeholder="What do you want to learn?">
                                <button class="btn btn-warning" type="submit">Search</button>
                            </div>
                        </li>
                        <li class="nav-item" style="border-left: solid #3c4048 1px;">
                            <a class="nav-link" href="index.php?page=logout">Log out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
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

    <div class="cotaner-fluid" id="featured">
        <div class="container">
            <p class="h3" style="margin-top: 50px;">Featured</p>
            <p class="h5" style="margin-top: 50px;">Popular Course</p>
            <div class="row">
                <div class="card col-sm-3" style="margin: 10px; padding: 10px;">
                    <img class="card-img-top rounded" src="img/co1.jpg" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title text-primary">$370</h5>
                        <h4 class="card-text">How to Build Foundation for Your Brand</h4>
                        <h6 class="card-title text-success">by John Doe</h6>
                        <a class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
                <div class="card col-sm-3" style="margin: 10px; padding: 10px;">
                    <img class="card-img-top rounded" src="img/co2.jpg" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title text-primary">$500</h5>
                        <h4 class="card-text">Sourse Code Management for Beginners</h4>
                        <h6 class="card-title text-success">by John Doe</h6>
                        <a class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
                <div class="card col-sm-3" style="margin: 10px; padding: 10px;">
                    <img class="card-img-top rounded" src="img/co3.jpg" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title text-primary">$820</h5>
                        <h4 class="card-text">Building Digital Partnership an Ecosystems</h4>
                        <h6 class="card-title text-success">by John Doe</h6>
                        <a class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
            </div>
        
            <p class="h5" style="margin-top: 50px;">Top Course in <a href="#" class="text-primary">Programming</a></p>
            <div class="row">
                <div class="card col-sm-3" style="margin: 10px; padding: 10px;">
                    <img class="card-img-top rounded" src="img/co2.jpg" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title text-primary">$500</h5>
                        <h4 class="card-text">Sourse Code Management for Beginners</h4>
                        <h6 class="card-title text-success">by John Doe</h6>
                        <a class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
            </div>
            
            <p class="h5" style="margin-top: 50px;">Top Course in <a href="#" class="text-primary">Science</a></p>
            <div class="row">
                <div class="card col-sm-3" style="margin: 10px; padding: 10px;">
                    <img class="card-img-top rounded" src="img/co3.jpg" alt="card image">
                    <div class="card-body">
                        <h5 class="card-title text-primary">$820</h5>
                        <h4 class="card-text">Building Digital Partnership an Ecosystems</h4>
                        <h6 class="card-title text-success">by John Doe</h6>
                        <a class="btn btn-warning">Enroll Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <hr>

    <div class="container-fluid" id="category">
        <div class="container">
            <p class="h3" style="margin-top: 50px;">Category</p>
            <div class="row">
                <div class="col-sm-3">
                    <button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn btn-outline-primary" style="margin: 50px; width: 120px; height: 120px; color: black;">Bussiness</button>
                </div>
                <div class="col-sm-3">
                    <button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn btn-outline-secondary" style="margin: 50px; width: 120px; height: 120px; color: black;">Cooking</button>
                </div>
                <div class="col-sm-3">
                    <button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn btn-outline-success" style="margin: 50px; width: 120px; height: 120px; color: black;">Design</button>
                </div>
                <div class="col-sm-3">
                    <button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn btn-outline-info" style="margin: 50px; width: 120px; height: 120px; color: black;">Mathematic</button>
                </div>
                <div class="col-sm-3">
                    <button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn btn-outline-warning" style="margin: 50px; width: 120px; height: 120px; color: black;">Music</button>
                </div>
                <div class="col-sm-3">
                    <button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn btn-outline-danger" style="margin: 50px; width: 120px; height: 120px; color: black;">Photography</button>
                </div>
                <div class="col-sm-3">
                    <button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn btn-outline-secondary" style="margin: 50px; width: 120px; height: 120px; color: black;">Programming</button>
                </div>
                <div class="col-sm-3">
                    <button data-bs-toggle="modal" data-bs-target="#login" type="button" class="btn btn-outline-primary" style="margin: 50px; width: 120px; height: 120px; color: black;">Science</button>
                </div>
            </div>
        </div>
    </div>
    
    <hr>

    <div class="container" id="createcourse">
        <p class="h3" style="margin-top: 50px;">Create Course</p>
        <form method="post">
            <input class="form-control" type="text" name="CourseName" placeholder="Course Name">
            <select class="form-select" name="Language">
                <option active hidden>Language</option>
                <option value="Spanish">Spanish</option>
                <option value="English">English</option>
                <option value="Burmese">Burmese</option>  
            </select>
            <input class="form-control" type="text" name="Prize" placeholder="Prize">
            <select class="form-select" name="CourseType">
                <option active hidden>Course Type</option>
                <option value="Business">Business</option>
                <option value="Cooking">Cooking</option>
                <option value="Design">Design</option>
                <option value="Mathematic">Mathematic</option>
                <option value="Music">Music</option>
                <option value="Photography">Photography</option> 
                <option value="Programming">Programming</option>
                <option value="Science">Science</option>
                <option value="Other">Other</option> 
            </select>
            <button name="ccbtn" type="submit" class="btn btn-warning">Create Course</button>
        </form>
    </div>
    
    <hr>

</body>
</html>
<?php
    }
    else{
        echo "Error 404! Page not found!!";
    }
?>