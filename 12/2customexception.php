<?php 
class MyException extends Exception{}
class NetworkException extends Exception{}
function testException(){
    throw new NetworkException();
}
try {
    testException();
} catch (MyException $e) {
    echo "MyException caught";
} catch (NetworkException $e) {
    echo "NetworkException caught";
} catch (Exception $e) {
    echo "Exception caught";
} finally{
    echo "\nCleaned up\n";
}
// finally section ta always run kore