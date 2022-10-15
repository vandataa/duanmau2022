<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Up load file</h1>
    <form enctype="multipart/form-data" action="upProcess.php" method="POST">
        send this file : <input type="file" name="file"><br>
        <input type="submit" name="btn_upload" value="Upload file" id="">
    </form>
</body>
</html>