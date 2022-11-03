<?php
include "../inc/session.php";
include "../inc/login_check.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from members;";

// 쿼리 전송
$result = mysql_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원관리</title>
    <style>
        body{font-size:20px}
        a{text-decoration:none;margin:0 5px}

        table, td{
            border-collapse:collapse
        }
        th, td{
            padding:10px;
            font-size:16px
        }
        .mem_list_set{
            width:1620px
        }
        .mem_list_title{
            border-top:2px solid #999;
            border-bottom:1px solid #999;
            text-align:center
        }
        .mem_list_content{
            border-bottom:1px solid #999;
        }
        .no{width:40px}
        .u_name{width:80px}
        .u_id{width:120px}
        .mobile{width:160px}
        .birth{width:120px}
        .email{width:200px}
        .address{width:400px}
        .gender{width:40px}
        .reg_date{width:120px}
        .modify{width:160px}
    </style>
</head>
<body>
    <?php include "../inc/sub_header.html"; ?>
    <!-- content -->
    <p>전체 회원 수 <?php echo $total; ?>명</p>
    <table class="mem_list_set">
    <tr class="mem_list_title">
            <th class="no">번호</th>
            <th class="u_name">이름</th>
            <th class="u_id">아이디</th>
            <th class="mobile">전화번호</th>
            <th class="birth">생년월일</th>
            <th class="email">이메일</th>
            <th class="address">주소</th>
            <th class="gender">성별</th>
            <th class="reg_date">가입일</th>
            <td class="modify">관리</td>
    </tr>
    <?php
    // for($i = 1; $i <= $total; $i++){
        // DB에서 데이터 가져오기
        $i = 1;
        while($array = mysqli_fetch_array($result)){
    ?>
    <tr class="mem_list_content">
        <td><?php echo $i; ?></td>
        <td><?php echo $array["u_name"]; ?></td>
        <td><?php echo $array["u_id"]; ?></td>
        <td><?php echo $array["mobile"]; ?></td>
        <td><?php echo $array["birth"]; ?></td>
        <td><?php echo $array["email"]; ?></td>
        <?php 
            $address = $array["ps_code"]." ".$array["addr_b"]." ".$array["addr_d"];
        ?>
        <td><?php echo $address; ?></td>
        <td><?php echo $array["gender"]; ?></td>
        <td><?php echo $array["reg_date"]; ?></td>
        <td>
            <a href="#">[수정]</a>
            <a href="#">[삭제]</a>
        </td>
        </tr>
        <?php
            $i++;
        };
        ?>
        </table>


    }
<body>
