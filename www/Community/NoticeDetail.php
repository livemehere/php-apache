<!DOCTYPE html>
<html lang="kor">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>그리스신화박물관</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/subpage_common.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/tm-custom.css">
    <link rel="stylesheet" href="../css/board.css">
    <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>

</head>
<body>
    <div id="wrap">
        <header>
            <?php include("../header.php"); ?>
        </header>
        <section id="slider">
            <img src="../img/community/sub_visual_bg.jpg" alt="">
        </section>
        <div id="sub_main">
            <aside id="left_menu">
                <?php include ("left_menu.html"); ?>
            </aside>
            <section id="sub_contents">
                <h3>공지사항<span>HOME>커뮤니티><b>공지사항</b></span></h3>
                <div>
                    <?php
                    $num  = $_GET["num"];
                    $con = mysqli_connect("localhost", "user1", "12345", "sample");
                    $sql = "select * from board where num=$num";
                    $result = mysqli_query($con, $sql);

                    $row = mysqli_fetch_array($result);
                    $id      = $row["id"];
                    $name      = $row["name"];
                    $regist_day = $row["regist_day"];
                    $subject    = $row["subject"];
                    $content    = $row["content"];
                    $file_name    = $row["file_name"];
                    $file_type    = $row["file_type"];
                    $file_copied  = $row["file_copied"];
                    $hit          = $row["hit"];

                    $content = str_replace(" ", "&nbsp;", $content);
                    $content = str_replace("\n", "<br>", $content);

                    $new_hit = $hit + 1;
                    $sql = "update board set hit=$new_hit where num=$num";
                    mysqli_query($con, $sql);
                    ?>
                    <ul id="view_content">
                        <li>
                            <span class="col1"><b>제목 :</b> <?=$subject?></span>
                            <span class="col2"><?=$name?> | <?=$regist_day?></span>
                            <?php
                                echo '<span><a class="delete_btn" href="NoticeDelete.php?num='.$row["num"].'">삭제</a></span>'
                            ?>
                        </li>
                        <li>
                            <?php
                            if($file_name) {
                                $real_name = $file_copied;
                                $file_path = "./data/".$real_name;
                                $file_size = filesize($file_path);
                                echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
                            }
                            ?>
                            <?=$content?>
                        </li>
                    </ul>
                </div>
                <article id="sub_contact">
                    <div>
                        <h5>관람문의<span>Tel : 064-773-5800</span>관람시간<span>09:00~18:00 (입장마감 17:00)</span></h5>
                    </div>
                </article>
            </section>
        </div>
        <footer>
            <?php include("../footer.html"); ?>
        </footer>
    </div>
</body>


</body>

</html>