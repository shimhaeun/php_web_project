<?php
include "../inc/session.php";

if($s_id != "admin"){
    echo "
        <script tyype=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"http://shy624.dothome.co.kr/admin/login/login.php\";
        </script>
    ";
    exit;
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 페이지</title>
    <style>
        body{font-size:20px};
        a{text-decoration:none; margin: 0 5px};
        .nav {margin-left: 0;margin-right:0;}
</style>
</head>
<body>
    <div class="top_menu">
        <span class="pnt_name">관리자님, 안녕하세요.</span>
        <a href="login/logout.php">로그아웃</a>
        <a href="members/member_info.php">내정보</a>
        <a href="../index.php">홈페이지</a>
    </div>
    <hr>
    <div class="nav">
        <a href="../index.php">[홈으로]</a>
        <a href="members/list.php">[회원관리]</a>
        <a href="notice/list.php">[공지사항]</a>
        <a href="event/list.php">[이벤트]</a>
        <a href="products/list.php">[상품관리]</a>
</div>
<hr>
<!-- content -->
관리자 페이지입니다.
</body>
</html>