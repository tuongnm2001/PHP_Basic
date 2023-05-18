<?php 
    $nameError = "";
    $name = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['name'])){
            $nameError = 'Không được để trống' ;
        }else{
            $name =  $_POST['name'] ;
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                $nameError="Không được nhập ký tự đặt biệt";
            }else{
                echo $name ;
            }
        }
    }
?>

<form action='formAdvanced.php' method='POST'>
    Name : <input type='text' name='name'/>
    <span style='color :red'><?php echo $nameError ; ?></span> <br/>
    <input type='submit' name='submit' value='Send'/>
</form>