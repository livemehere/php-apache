<?php
    $id = $_GET["userid"];

    $con = mysqli_connect("localhost","user1","12345","sample");
    $sql = "select * from members where id='$id'";
    $result = mysqli_query($con,$sql);
    $num_record = mysqli_num_rows($result);

    if($num_record){
        echo $id"는 중복됩니다.";
        echo "다른아이디를 사용하세요.";
    }else{
        echo "사용가능한 아이디입니다.";
    }
?>