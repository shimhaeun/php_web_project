<?php
// 이전 페이지에서 값 가져오기
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];

// 작성일자
$reg_date = date("Y-m-d")자

// DB 연결
include "../inc/dbcon.php";


$sql = "insert into notice(";
$sql .= 'n_title, n_content, writer, w_date';
$sql .= "'$n_title', '$n_content', '$s_name', '$w_date'";
$sql .= ");";

// 데이터베이스에 쿼리 전송
// mysqli_query("DB 연결객체", "전송할 쿼리");
mysqli_query($dbcon, $sql);

// DB 접속 종료
// mysqli_close("연결객체");
mysqli_close($dbcon);

// 리디렉션
echo "
    <script type=\"text/javascript\">
        location.href = \"list.php\";
    </script>
    ";

/* echo `
    <script type="text/javascript">
        // location.href = "이동할 페이지 주소";
        location.href = "welcome.php";
    </script>
    `; */
?>

<!-- 리디렉션 -->
<!-- <script type="text/javascript">
    // location.href = "이동할 페이지 주소";
    location.href = "welcome.php";
</script> -->