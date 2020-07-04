<?php
// phpinfo();
$publicKey= openssl_get_publickey(file_get_contents("./keys/public.pem"));
$message = "Secret Message";
openssl_public_encrypt($message,$encriptedMessage,$publicKey);
echo bin2hex($encriptedMessage);
