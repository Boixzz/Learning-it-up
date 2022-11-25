<?php  
    if($_SESSION['UserID']!="")
    {
?>
<?php
    if(@$_REQUEST['action']=='edit' && @$_REQUEST['editid']!="")
    {
        $edid=$_REQUEST['editid'];
        $selectadmin=mysqli_query($conn,"SELECT * FROM course WHERE CourseID='$edid'");
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
    <title>Edit Course</title>
    <style>
        .container form input,select{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container" id="createcourse">
        <p class="form-label display-6 text-danger" style="margin-top: 50px; font-family: 'Fasthand', cursive;">Edit Course</p>
        <form method="post" enctype="multipart/form-data">
            <input class="form-control" type="text" name="CourseName" placeholder="Course Name" value="<?php echo $radmin['CourseName'];?>">
            <select class="form-select" name="Language">
                <option value="<?php echo $radmin['Language'];?>" active hidden><?php echo $radmin['Language'];?></option>
                <?php
                    $Languageselect=mysqli_query($conn,"SELECT Language FROM language");
                    while($Language=mysqli_fetch_assoc($Languageselect))
                        {
                        ?>
                            <option value="<?php echo $Language['Language']; ?>">
                            <?php echo $Language['Language']; ?></option>
                        <?php
                        }
                        ?>
                        
            </select>
            <input class="form-control" type="text" name="Prize" placeholder="Prize" value="<?php echo $radmin['Prize'];?>">
            <select class="form-select" name="CourseType">
                <option value="<?php echo $radmin['CourseType'];?>" active hidden><?php echo $radmin['CourseType'];?></option>
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
            <label>Change Image</label>
            <img src="Cimg/<?php echo $radmin['Cimg'];?>">
            <input value="<?php echo $radmin['Cimg'];?>" class="form-control" type="hidden" name="Coldimg">
            <input type="file" class="form-control" name="Cnewimg">
            <button name="editcbtn" type="submit" class="btn btn-warning">Edit</button>
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