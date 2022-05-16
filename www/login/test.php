<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    // setcookie('mycookie','cookie value',time()+60);

    $_SESSION['userid'] = 'rhdxoals';
    $_SESSION['username'] = '공태민';
    // session_unset();
    // session_destroy();

    echo isset($_SESSION['username']);
    echo "<li>세션 시작 username : {$_SESSION["username"]}</li>";
    echo session_id();
?>



</body>

</html>