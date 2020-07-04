<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to JavaScript</title>
</head>
<body>
    <h5>PHP To JavaScript</h5>
    <input type="button" id="button" value="Show Something">
</body>
<script>
    <?php
        $data = array(
            "First-name"=>"Jhon",
            "Last-name"=>"Doe",
            "Email"=>"Jhon@doe.com"
        );
    ?>
    let data = <?php echo json_encode($data);?>;
    document.getElementById("button").addEventListener("click",function(){
        alert(data["Last-name"]);
        console.log(data);
    });
</script>
</html> 