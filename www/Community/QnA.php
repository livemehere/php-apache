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
    <link rel="stylesheet" type="text/css" href="../css/community.css">
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
                <h3>묻고 답하기<span>HOME>커뮤니티><b>묻고 답하기</b></span></h3>
                <fieldset class="boardListForm">
                    <legend>게시물 목록</legend>
                    <table cellspacing="0" cellpadding="0" width="100%" summary="묻고답하기 목록 테이블입니다.">
                        <caption>묻고답하기 게시물 목록입니다.</caption>
                        <thead>
                            <tr>

                                <th scope="col" class="first-child"> No.</th>
                                <th scope="col">제목</th>
                                <th scope="col">작성자</th>
                                <th scope="col">파일</th>
                                <th scope="col">작성일</th>
                                <th scope="col">조회</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for($i =0; $i<10; $i++){
                                    echo '
                                        <tr>
                                            <td class="jn_num">36</td>
                                            <td class="jn_title"><a href="#" title="제휴문의">제휴문의</a> </td>
                                            <td class="jn_author"><a href="#">유지은</a></td>
                                            <td class="jn_ad">&nbsp;</td>
                                            <td class="jn_date">2022-04-14</td>
                                            <td class="jn_vCount">8</td>
                                        </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                </fieldset>
                <div class="boardBtn">
                    <ul>
                        <a href="#" class="button"><span> <img
                                    src="http://www.greekmythology.co.kr/default/Bd/skin/basic_qna/img/btn_write.gif"
                                    alt="글쓰기">
                            </span></a>
                    </ul>
                </div>
                <!-- 페이지 버튼 -->
                <div class="page-nation">
                    <img src="http://www.greekmythology.co.kr/default/Bd/skin/basic/img/prebtn.gif" alt="이전"
                        align="absmiddle">
                    <span style="padding:0 5px 0 3px;"><strong>1</strong>
                        <a class="paging_num">2</a>
                        <a class="paging_num">3</a>
                        <a class="paging_num">4</a>
                    </span>
                    <img src="http://www.greekmythology.co.kr/default/Bd/skin/basic/img/nextbtn.gif" alt="다음"
                        align="absmiddle">
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