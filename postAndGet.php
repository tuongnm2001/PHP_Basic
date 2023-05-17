<form action='postAndGet.php' method='GET'>
    Name :  <input type='text' name='name' /> <br/>
    <!-- Email : <input type='text'name='email' /> <br/> -->
    <input type='submit'/>
</form>

<?php 
    echo $_REQUEST["name"] ;
    // echo $_POST["email"];
?>