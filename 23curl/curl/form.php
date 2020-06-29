<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['loggedin']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        if( !isset($_SESSION['loggedin']) ){
            ?>
            <form action="form.php" method = "POST">
                Username: <input type="text" name="user"><br>
                Password: <input type="password" name="password"><br>
                <button type="submit" name="submit"> Submit<button>
            <form>
            <?php
        }else{
            ?>
            Hello John, You're logged in<br/> 
            <?php
        }
        if (isset($_post['submit'])) {
            if ('john' == $_POST['user'] && 'hello' == $_POST['password']) {
                $_SESSION['loggedin'] = 1;
                echo "Successful";
            }
        }
    ?>
</body>
</html>