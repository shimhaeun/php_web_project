<?php
include "../inc/session.php";

// 데이터 가져오기
$n_idx = $_GET["n_idx"]기

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from notice where idx=$n_idx;";
// echo $sql;
// exit;

// DB에서 데이터 가져오기
$array = mysqli_num_array($result);

// 조회수 업데이트
$cnt = $array["cnt"]+1;
echo $cnt;
exit;

// 쿼리 전송
mysqli_query($dbcon, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <style>
        body{font-size:20px}
        a{text-decoration:none;margin:0 5px}

        table, td{
            border-collapse:collapse
        }
        th, td, .pager{
            padding:10px;
            font-size:16px;
            text-align:center
        }
        .notice_list_set .pager{
            width:740px
        }
        .notice_list_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999
        }
        .notice_list_content{
            border-bottom:1px solid #999;
        }
        .no{width:40px}
        .n_title{width:400px}
        .writer{width:100px}
        .w_date{width:120px}
        .cnt{width:80px}

        table a:hover{color:rgb(255, 128, 0)}
    </style>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <!-- 콘텐트 -->
    <h2>공지사항</h2>
    <p>전체 <?php echo $total; ?>개</p>
    <table class="notice_list_set">
        <tr class="notice_list_title">
            <th class="no">번호</th>
            <th class="n_title">제목</th>
            <th class="writer">작성자</th>
            <th class="w_date">날짜</th>
            <th class="cnt">조회수</th>
        </tr>
        <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from notice limit $start, $list_num;";
            // echo $sql;
            /* exit; */

            // DB에 데이터 전송
            $result = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호
            $i = $start + 1;
            while($array = mysqli_fetch_array($result)){
        ?>
        <tr class="notice_list_content">
            <td><?php echo $i; ?></td>
            <td class="notice_content_title">
                <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                <?php echo $array["n_title"]; ?>
                </a>
            </td>
            <td><?php echo $array["writer"]; ?></td>
            <?php $w_date = substr($array["w_date"], 0, 10); ?>
            <td><?php echo $w_date; ?></td>
            <td><?php echo $array["cnt"]; ?></td>
        </tr>
        <?php
                $i++;
            }; 
        ?>
    </table>
    <p class="pager">
    <?php
    // pager : 이전 페이지
    if($page <= 1){
    ?>
    <a href="list.php?page=1">이전</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page - 1); ?>">이전</a>
    <?php }; ?>

    <?php
    // pager : 페이지 번호 출력
    for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
    ?>
    <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php }; ?>

    <?php
    // pager : 다음 페이지
    if($page >= $total_page){
    ?>
    <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page + 1); ?>">다음</a>
    <?php }; ?>
    </p>
</body>
</html>
