<?php 
    include 'connect.php';
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn , $query);

    while($row = mysqli_fetch_array($result)){
       
?>
    <table>

        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <!-- th scope="col">Email_verified_at</th>
            <th scope="col">Password</th>
            <th scope="col">Remember_token</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>-->
            <th scope="col">Actions</th> 
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>">EDIT</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>">DELETE</a>
                </td>
            </tr>
        </tbody>
    </table>
    <?php } ?>