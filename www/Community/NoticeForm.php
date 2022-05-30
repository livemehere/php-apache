<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" href="../css/community.css">
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "../header.php";?>
</header>  
<section>
	<div id="main_img_bar">
        <img src="../img/community/sub_visual_bg.jpg" alt="">
    </div>
   	<div id="board_box">
	    <form name="board_form" method="post" action="NoticeInsert.php" enctype="multipart/form-data">
            <h3 id="board_title">
                게시판 > 글 쓰기
            </h3>
	    	 <ul id="board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$_SESSION['username']?></span>
				</li>		
	    		<li>
	    			<span class="col1 ">제목 : </span>
	    			<span class="col2 title"><input name="subject" type="text"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일</span>
			        <span class="col2"><input type="file" name="upfile"></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
				<li><button type="button" onclick="location.href='Notice.php'">목록</button></li>
			</ul>
	    </form>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "/www/footer.html";?>
</footer>
</body>
</html>
