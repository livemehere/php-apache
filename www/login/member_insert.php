<?php 
    $id = $_POST["id"]; 						
    $pass = $_POST["pass"];
    $pass_confirm = $_POST["pass_confirm"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $regist_day = date("Y-m-d (H:i)"); // 현재의 '연-월-일-시-분' 저장  ③

    if($pass != $pass_confirm){
        echo "  
        <script>   
            location.href = '/www/login/member_form.html'; 			
        </script> 
            ";
        return;
    }

    $con = mysqli_connect("localhost", "user1", "12345", "sample"); 	 
    $sql = "insert into members(id, pass, name, email, regist_day, 
        level, point) "; 		
    $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)"; 
    mysqli_query($con, $sql); 	// $sql에 저장된 명령 실행 	⑥
    mysqli_close($con); 						
    
    echo "  
        <script>   
            alert('회원가입에 성공하였습니다')
            location.href = '/www/login/login_form.html'; 			
        </script> 
    ";
?>
    
