<?php 
    include 'connect.php';

    $sql = "SELECT * FROM users" ;

    $result = mysqli_query($conn , $sql);

    while($row = mysqli_fetch_array($result)){
    
        
?>
        <h3><?php echo $row['id'] ?></h3>
        <h3><?php echo $row['first_name']?></h3>
        <hr/>
    <?php } ?>