<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        if($name=='tuong'){
            echo 'Nguyen Minh Tuong';
        }else if($name=='trent'){
            echo 'Trent Alexander-Arnold';
        }else{
            echo 'Empty';
        }

    }
?>

<form action='search.php' method="POST">
    Name : <input type='text' name ='name'/>
    <input type='submit'/>
</form>

<?php 
   echo "Hôm nay ngày " .  date('d-m-Y')
?>