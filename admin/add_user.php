<?php 
    $views = "add-user";
    include ("template.php");
<?php
$res=mysqli_query($conn,"select * users");
while($rs=mysqli_query_fetch_array($res)){



    <?php echo $rs['user_name'];?>
    <?php echo $rs['user_email'];?>
    <?php echo $rs['user_password'];?>
    <?php echo $rs['user_address'];?>
    

}
?>