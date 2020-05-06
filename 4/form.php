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
<body>
<style>
    body{
        margin-top: 100px;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Our First Form</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, nulla nostrum. In error eveniet accusantium!</p>
                <p>
                    <!-- 
                        POST er jaygay GET dileo kaja hobe and 
                        eksathe duita dite chaile REQUEST dite hobe
                     -->
                    <?php
                    if(isset($_POST['fname']) && !empty($_POST['fname'])): 
                        // $fname = htmlspecialchars($_POST['fname']); 
                        // $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING); 
                        $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
                        ?>
                        First Name: <?php echo $fname; ?><br>
                        <?php
                    endif;
                    if(isset($_POST['lname']) && !empty($_POST['lname'])): 
                        // $lname = htmlspecialchars($_POST['lname']); 
                        // $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
                        $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        ?>
                        Last Name: <?php echo $lname;
                    endif;
                    ?>
                </p>
                
<!-- 
    form er action e jei page er name thake url redirect hoye sekhane niye jabe
-->
                <form action="" method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                    <div>
                        <input type="checkbox" name="cb1" id="cb1">
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>
                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>