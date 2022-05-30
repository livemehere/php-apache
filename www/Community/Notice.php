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
                <form name="sform" method="post" action="#" class="mt-2">
                    <div id="searchField">
                        <!-- 게시판 검색 -->
                        <fieldset class="boardSearch">
                            <legend>게시물 검색</legend>
                            <ul>
                                <li class="write_btn"><a href="NoticeForm.php">글쓰기</a></li>
                                <li>
                                    <label for="l_search">검색</label>
                                    <select name="l_search" id="l_search" title="검색항목을 선택하세요!">
                                        <option value="sc">제목+내용</option>
                                        <option value="subject">제목</option>
                                        <option value="name">이름</option>
                                        <option value="comment">내용</option>
                                    </select>
                                </li>
                                <li>
                                    <label for="keyword">검색어를 입력하세요</label>
                                    <input type="text" name="keyword" id="keyword" title="검색어를 입력하세요!" value="">
                                </li>
                                <li><img src="http://www.greekmythology.co.kr/default/_template/image/default/common/btn_search.gif"
                                        align="absmiddle" alt="검색"></li>
                            </ul>
                        </fieldset>
                        <!-- //게시판 검색 -->
                        <!-- 카테고리 -->
                        <fieldset class="boardCategory">
                            <legend>카테고리 검색</legend>
                        </fieldset>
                        <!-- //카테고리 -->
                    </div>
                    <div class="boardListForm">
                        <fieldset>
                            <legend>게시물 목록</legend>
                            <table cellspacing="0" cellpadding="0" width="100%" summary="공지사항 목록 테이블입니다.">
                                <caption>공지사항 게시물 목록입니다.</caption>
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
                                $con = mysqli_connect("localhost", "user1", "12345", "sample");
                                $sql = "select * from board";
                                $result = mysqli_query($con, $sql);

                                while ($row = mysqli_fetch_array($result)) {
                                    echo '
                                        <tr>
                                        <td class="jn_num">'.$row["num"].'</td>
                                        <td class="jn_title"><a href="./NoticeDetail.php?num='.$row['num'].'">'.$row["subject"].'</a></td>
                                        <td class="jn_author"><a href="#">'.$row["name"].'</a></td>
                                        <td class="jn_ad">&nbsp;</td>
                                        <td class="jn_date">'.$row["regist_day"].'</td>
                                        <td class="jn_vCount">'.$row["hit"].'</td>
                                    </tr>
                                    ';
                                }
                                ?>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </form>
                <!-- 페이지 버튼 -->
                <div class="page-nation">
                    <img src="http://www.greekmythology.co.kr/default/Bd/skin/basic/img/prebtn.gif" alt="이전"
                        align="absmiddle">
                    <span style="padding:0 5px 0 3px;"><strong>1</strong> </span>
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