<?php
include "header.php";
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $db = mysqli_connect("localhost","root","","class") or die("Error");
    $fetch_query = "SELECT * FROM course INNER JOIN trainer ON 
    course.c_trainer = trainer.t_id";
    $result = mysqli_query($db,$fetch_query) or die(mysqli_error());
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Course</th>
         <th>Price</th>
         <th>Duration</th>
        <th>Trainer</th>
        </thead>
        <tbody>
            <?php 
            while ( $value =mysqli_fetch_assoc($result)) {
                print_r($value);
              
            ?>
            <tr>
                <td><?php echo $value['c_id'];?></td>
                <td><?php echo $value['c_name'];?></td>
                <td><?php echo $value['c_price'];?></td>
                <td><?php echo $value['c_duration']."Month";?></td>
                <td><?php echo $value['t_name'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>
</div>
</div>
<?php
include 'footer.php';
?>
