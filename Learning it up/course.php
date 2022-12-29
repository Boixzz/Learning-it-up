<?php  
    if($_SESSION['UserID']!="")
    {
?>
<?php
    if(@$_REQUEST['action']=='Enroll' && @$_REQUEST['Enrollid']!="")
    {
        $Enrollid=$_REQUEST['Enrollid'];
        $selectadmin=mysqli_query($conn,"SELECT * FROM course WHERE CourseID='$Enrollid'");
        $radmin=mysqli_fetch_assoc($selectadmin);
    }
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
    <title>Course</title>
    <style>
        .nav-link{
            text-decoration: none;
            color: #faf7f0;
        }
    </style>
</head>
<body>
<div class="modal" id="profile">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <h5>
                        Name : 
                        <?php
                            echo @$_SESSION['Name'];
                        ?>
                    </h5>
                    <h5>
                        User Type : 
                        <?php
                            echo @$_SESSION['UserType'];
                        ?>
                    </h5>
                    <h5>
                        Date of Birth : 
                        <?php
                            echo @$_SESSION['DOB'];
                        ?>
                    </h5>
                    <h5>
                        Email : 
                        <?php
                            echo @$_SESSION['Email'];
                        ?>
                    </h5>
                    <h5>
                        Language : 
                        <?php
                            echo @$_SESSION['Language'];
                        ?>
                    </h5>
                </div>
                    
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning" name="btnedit" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal" id="edit">
        <div class="modal-dialog modal-dialog-centered">
            
            <div class="modal-content">
                <form method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input class="form-control" type="password" name="Password" placeholder="Ente your password">
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning" name="btneditform">Enter</button>
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

<div class="container-fluid" style="margin-top:10px ;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <img style="width: 380px; height: 300px" class="rounded" src="Cimg/<?php echo $radmin['Cimg'];?>">
            </div>
            <div style="margin: 10px;" class="col-sm-5">
                <h1><?php echo $radmin['CourseName'];?></h1>
            </div>
            <div class="col-sm-2">
                <h4 class="text-success" style="text-align: right;">By <?php echo $radmin['InstrustorName'];?></h4>
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