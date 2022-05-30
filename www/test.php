<?php
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from board";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($result)) {
        echo '<h2>'.$row[3].' / '.$row["content"].'</h2>';
    }

    mysqli_close($con);
?>
