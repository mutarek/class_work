<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Course</h2>
    <form class="post-form" action="functions/addcoursedata.php" method="post">
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
                <option value="1">Advanched Php</option>
                <option value="1">Mobile Application Development</option>
                <option value="1">Web Design & Development</option>
            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
