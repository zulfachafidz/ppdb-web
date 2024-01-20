<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'db_psb';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'Error : ' .mysql_connect_error($conn);
    }

?>