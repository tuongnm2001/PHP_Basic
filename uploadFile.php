<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action='handleUploadFile.php' method='POST' enctype='multipart/form-data'>
        <input type='file' name='image' value='image'/>
        <input type='submit' name='btn' value='Send'/>
    </form>
</body>
</html>