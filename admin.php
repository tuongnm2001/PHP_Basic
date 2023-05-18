<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:login.php');
    }
?>
<h2>Login success</h2>
<h1>This is admin page</h1>

<a href='logout.php'>
    <button>Logout</button>
</a>