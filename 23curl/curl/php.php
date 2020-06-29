<?php 
echo "Welcome To The Beautiful World CURL & PHP";
if (isset($_POST['secret']) && 'noodles' == $_POST['secret']) {
    echo "</br> Please Have Some Noodles";
}
?>