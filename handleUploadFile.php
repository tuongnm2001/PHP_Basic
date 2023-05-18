<?php 
    if(isset($_POST['btn'])){
        if(isset($_FILES['image'])){
            if($_FILES['image']['size'] === 0){
                echo "Chưa chọn file ";
            }else{
                move_uploaded_file($_FILES['image']['tmp_name'],'./image/'.$_FILES['image']['name']);
                echo "Upfile success";
            }
        }
    }else{
        echo "Upfile Error"
    }
?>