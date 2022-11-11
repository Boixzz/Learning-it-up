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
    <title>Learning it up</title>
    <style>
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
</head>
<body>

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
                            <a class="nav-link" href="index.php?page=logout">Log out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <?php
                                    echo @$_SESSION['Name'];
                                ?>
                            </a>
                        </li>
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
                    <p class="small">
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

</body>
</html>
<?php
    }
    else{
        echo "Error 404! Page not found!!";
    }
?>