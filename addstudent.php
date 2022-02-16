<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Course</h2>
    <form class="post-form" action="functions/addstudentdata.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" />
        </div>
        <div class="form-group">
            <label>Select Course</label>
            <select name="course">
                <option value=""selected disabled>Select Course</option>
                <?php 
                $db = mysqli_connect("localhost","root","","class") or die("Error");
                $fetch_query = "SELECT * FROM course";
                $r = mysqli_query($db,$fetch_query) or die(mysqli_error());
                while ($trainerdata = mysqli_fetch_assoc($r )) {
                ?>
                <option value="<?php echo$trainerdata['c_id']; ?>"><?php echo$trainerdata['c_name'] ?></option>
            <?php } ?>
            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
