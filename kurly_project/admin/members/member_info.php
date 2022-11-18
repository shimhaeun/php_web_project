<?php
include "../inc/session.php";

// 관리자가 선택한 사용자의 데이터 가져오기
$g_idx = $_GET["g_idx"];

// 로그인한 사용자만 접근
include "../inc/login_check.php";

// DB 연결
include "../inc/dbcon.php";

$sql = "select * from members where idx=$g_idx";


?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style type="text/css">
        body,input,select,option,button{font-size:20px}
        form{width:630px}
        fieldset{border:0 none}
        legend{display:block;width:100%;padding:10px 0 15px;border-bottom:3px solid #999;font-size:23px;font-weight:bold}
        input,button,select{vertical-align:center}
        input[type=checkbox]{width:20px;height:20px}
        /* *:focus{border:5px solid red;outline:0 none;background:#333;color:#fff} */
        .err_txt{font-size:16px;color:red}
        .dsp_txt{font-size:16px}
        .c_title{display:inline-block;width:130px}
        .c_line{padding-bottom:15px;border-bottom:1px solid #ccc}
        .btn_aln{text-align:center}
    </style>
    <script type="text/javascript">
        function edit_form_check(){
            // 객체 생성
            var u_name = document.getElementById("u_name");
            var u_id = document.getElementById("u_id");
            var pwd = document.getElementById("pwd");
            var repwd = document.getElementById("repwd");
            var mobile = document.getElementById("mobile");
            var apply = document.getElementById("apply");

            if(pwd.value){
                var pw_len = pwd.value.length;
            if(pw_len < 4 || pw_len > 8){
                var txt = document.getElementById("err_pwd");
                txt.textContent = "비밀번호 4~8글자만 입력할 수 있습니다.";
                pwd.focus();
                return false;
                };
            };

            if(pwd.value){
                var txt = document.getElementById("err_repwd");
                txt.textContent = "비밀번호를 확인하세요.";
                repwd.focus();
                return false;
            };
        };
    };

        function change_email(){
            // alert("TEST");
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");

            var idx =email_sel.options.selectedIndex;
            var g_txt = email_sel.options[idx].value;
            email_dns.value = g_txt;
        };
        
        function mem_del(){
            var rtn_val = confirm("정말 탈퇴하시겠습니까?");
            if(rtn_val == true){
                // location.href = "member_delete.php?g_idx=<?php echo $array["idx"]; ?>;
                location.href = "member_delete.php";
            };
        };

        function id_search(){
            // window.open("팝업될 문서 경로", "팝업 되었을 때의 이름", "옵션");
            window.open("id_search.html", "", "width=600,height=300,left=0,top=0");
        };
        function addr_search(){
            window.open("addr_search.html", "", "width=600,height=300,left=0,top=0");
        };

    </script>
</head>
<body>
    <form name="join_form" action="insert.php" method="post" onsubmit="return edit_form_check()">
        <fieldset>
            <legend>회원정보</legend>
                <input type="hidden" name="g_idx"> value="<?php echo $array["idx"]; ?>">
                <p class="c_line">
                    이름 <?php echo $array["u_name"]; ?>
                </p>
                
                <p class="c_line">
                    아이디 <?php echo $array["u_id"]; ?>
                </p>
                <p class="c_line">
                    <label for="pwd" class="c_title">비밀번호</label>
                    <input type="text" name="pwd" id="pwd">
                    <br>* 비밀번호는 4~12글자만 입력할 수 있습니다.
                </p>

                <p class="c_line">
                    <label for="repwd" class="c_title">비밀번호 확인</label>
                    <input type="text" name="repwd" id="repwd">
                </p>
                
                <p class="c_line">
                    <label for="mobile" class="c_title">전화번호</label>
                    <input type="text" name="mobile" id="mobile" value="<?php echo $array["mobile"]?>">
                    <br><span class="dsp_txt">"-" 없이 숫자만 입력</span>
                </p>

                <?php
                // 문자 치환 : str_replace
                // 변수 = str_replace("어떤 문자를", "어떤 문자로", "어떤 값에서");
                // DB에 입력된 YYYY-MM-DD 형식을 YYYYMMDD로 치환
                $birth = str_replace("-"), "", $array["birth"]);
                ?>               
                           
                <p class="c_line">
                    <label for="birth" class="c_title">생년월일</label>
                    <input type="text" name="birth" id="birth" value="<?php echo $birth; ?>">
                    <br><span class="dsp_txt">ex) 20221006</span>
                </p>
                
                <?php
                    // 문자 분리 : explode
                    // 변수 = explode("기준문자", "어떤 값에서");
                    // 변수가 배열처리되어 분리된 값 사용
                    // DB에서 가져온 이메일을 @ 기준으로 분리
                    $email = explode("@", $array["email"]);
                ?>

                <p class="c_line">
                    <label for="email_id" class="c_title">이메일</label><br>
                    <input type="text" name="email_id" id="email_id" size="12"> @
                    <input type="text" name="email_dns" id="email_dns" size="12">
                    <select name="email_sel" id="email_sel" onchange="change_email()">
                        <option value="">직접입력</option>
                        <option value="naver.com">네이버</option>
                        <option value="hanmail.net">다음</option>
                        <option value="gmail.com">구글</option>
                    </select>
                </p>                
     

                <p class="c_line">
                    <label for="mobile" class="c_title">주소</label>
                    <input type="text" name="ps_code" id="ps_code" value="<?php echo $array["ps_code"];?>">
                    <button type="button" onclick="addr_search()">주소검색</button><br>
                    <label for="addr1_b" class="c_title">기본주소</label>
                    <input type="text" name="addr_b" id="addr_b" size="30" value="<?php echo $array["addr_b"];?>"><br>
                    <label for="addr_d" class="c_title">상세주소</label>
                    <input type="text" name="addr_d" id="addr_d" size="30" value="<?php echo $array["addr_d"];?>">
                </p>

                <p>
                    성별
                    <input type="radio" name="gender" id="male" value="m">
                    <label for="male">남</label>
                    <input type="radio" name="gender" id="female" value="f">
                    <label for="male">여</label>
                </p>

                <p class="c_line">
                    <input type="checkbox" name="apply" id="apply" value="y">
                    <label for="apply">약관 동의 </label>
                    <br><span id="err_apply" class="err_txt"></span>
                </p>
                
                <p class="btn_aln">
                    <button type="button" onclick="history.back()">이전 페이지</button>
                    <button type="submit">정보수정</button>
                    <button type="button" onclick="mem_del()">회원탈퇴</button>
                </p>
        </fieldset>
    </form>
</body>
</html>