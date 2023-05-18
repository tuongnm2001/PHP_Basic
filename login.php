<?php 

    session_start();

    if(isset($_SESSION['email'])){
        header('location:admin.php');
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email === 'tuongnmpc00987@fpt.edu.vn' && $password === '123'){
            $_SESSION['email'] = $email = $_POST['email'];  //Tao session
            header('location:admin.php');
        }else{
            echo "Login Error" ; 
        }
    }
?>

<form action='login.php' method ='POST'>
    <label>Email</label>
    <input type='text' name='email'/>
    <label>Password</label>
    <input type='password' name='password'/>
    <button type='submit' name='login'>Sign in</button>
</form>
