<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBBASE','carros');

$conn = new mysql(HOST,USER,PASS,DBBASE);

if($conn->connect_error){
    echo "não conectado.$conn->connect_error";

}else {
    #echo 'bamco conectado'
}

?>