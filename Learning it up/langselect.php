<?php
    // require_once('connection/db.php');
?>

<!-- <select class="form-select" name="Language">
    <option active hidden>Language</option>
        <?php
            $Languageselect=mysqli_query($conn,"SELECT * FROM course WHERE CourseName ='$_REQUEST[q]'");
            while($Language=mysqli_fetch_assoc($Languageselect))
            {
        ?>
    <option value="<?php echo $Language['CourseID']; ?>">
        <?php echo $Language['Language']; ?>
    </option>
        <?php
            }
        ?>                     
</select> -->