<!-- 
HP@MoonKabir MINGW64 /e/PHP
$ cd practice/4
HP@MoonKabir MINGW64 /e/PHP/practice/4
$ php -S localhost:3030
ai command diye terminal theke php code run kora jay
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hellow World</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
</head>
<style>
    body{
        margin-top: 100px;
    }
</style>
<body>
    <p>The base type is 1.6rem (16px) over 1.6 line height (24px)</p>


    <a>Anchor</a>
    <em>Emphasis</em>
    <small>Small</small>
    <strong>Strong</strong>
    <u>Underline</u>


    <h1>Heading</h1>
    <h2>Heading</h2>
    <h3>Heading</h3>
    <h4>Heading</h4>
    <h5>Heading</h5>
    <h6>Heading</h6>

<!-- 
    form er action e jei page er name thake url redirect hoye sekhane niye jabe
 -->
<?php if(isset($_POST['fname']) && !empty($_POST['fname'])): ?>
    First Name: <?php echo $_POST['fname']; ?><br>
<?php endif;?>
<?php if(isset($_POST['lname']) && !empty($_POST['lname'])): ?>
    Last Name: <?php echo $_POST['lname']; ?>
<?php endif;?>



</body>
</html>