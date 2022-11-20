<?php 
include "../inc/session.php"; 
include "../../inc/admin_check.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../css/dropdown.css">
    <script type="text/javascript" src="../../js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.flexnav.min.js"></script>
    <script type="text/javascript" src="[//use.typekit.net/qyb8ood.js](https://use.typekit.net/qyb8ood.js)"></script>
    <script src="../../js/dropdown.js"></script>
    <style>
        body,input,button,textarea{font-size:20px}
        input[type=checkbox]{width:20px;height:30px}
        a{text-decoration:none;margin:0 5px}
        fieldset {padding:50px;margin:50px;}
    </style>
    <script>
        function notice_check(){
            var n_title = document.getElementById("n_title");
            var n_content = document.getElementById("n_content");

            if(!n_title.value){
                alert("제목을 입력하세요.");
                n_title.focus();
                return false;
            };

            if(!n_content.value){
                alert("내용을 입력하세요.");
                n_content.focus();
                return false;
            };
        };
    </script>
</head>
<body>
    <?php include "../../inc/sub_header.php"; ?>
    <form name="notice_form" action="insert.php" method="post" onsubmit="return notice_check()">
        <fieldset>
            <legend>공지사항</legend>
            <p>
                작성자 <?php echo $s_name; ?>
                <!-- <input type="hidden"> -->
            </p>

            <p>
                <label for="n_title">제목</label>
                <input type="text" name="n_title" id="n_title">
            </p>

            <p>
                <label for="n_content">내용</label>
                <textarea cols="60" rows="10" name="n_content" id="n_content"></textarea>
            </p>

            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">등록하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>