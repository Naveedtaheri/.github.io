<?php include 'layout/header.php'?>
<?php include 'layout/sidebar.php'?>
<?php 
if(!isset($_SESSION['access'])){
    header("location:login.php?title=HOME");
}



$users= getinfo($connection);
?>



<h2>Student Table</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>FULL NAME</th>
            <th>PHONE NUMBER</th>
            <th>CLASS</th>
            <th>FEES</th>
            <th>DATE</th>
            <th>EXPIRY DATE</th>
        </tr>
        </thead>




        <tbody>
        <?php foreach($users as $user) {?>

        <tr>
            <td><?php echo $user['id']?></td>
            <td><?php echo $user['name']?></td>
            <td><?php echo $user['phonenumber']?></td>
            <td><?php echo $user['class']?></td>
            <td><?php echo $user['fees']?></td>
            <td><?php echo $user['date']?></td>
            <td><?php echo $user['exp-date']?></td>
        </tr>


        <tbody>
    <?php }?>

    </table>
</div>






<?php include 'layout/footer.php'?>