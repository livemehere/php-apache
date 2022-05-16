<?php
    $db_conn = @mysqli_connect("localhost", "user1", "12345", "test"); 
    if (!$db_conn) {
         $error = mysqli_connect_error(); 
         $errno = mysqli_connect_errno(); 
         print "$errno: $error\n"; 
         exit(); 
    }
    echo $db_conn;
?>