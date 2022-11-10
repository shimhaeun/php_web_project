<?php
include "../inc/sub_header.php"

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/join.css">
    <title>join</title>
    <style type="text/css">
        .err_txt{font-size:16px;color: red;}
        .btn_aln{text-align: center;}


    </style>
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript">
        function form_check(){
            var u_id = document.getElementById("u_id");
            var pwd = document.getElementById("pwd");
            var repwd = document.getElementById("repwd");
            var u_name = document.getElementById("u_name");
            var mobile = document.getElementById("mobile");
            var apply1 = document.getElementById("apply1")
            var apply2 = document.getElementById("apply2")
            var apply3 = document.getElementById("apply3")

            
            if(!u_id.value){
                var txt = document.getElementById("err_id");
                txt.textContent = "아이디를 입력하세요.";
                u_id.focus();
                return false;
            };
            if(u_name.value == "") {
                var txt = document.getElementById("err_name");
                alert("ddd");
                txt.textContent = "이름을 입력하세요.";
                u_name.focus();
                return false;
            };

            var id_len = u_id.value.length;
            if(id_len < 4 || id_len > 12){
                var txt = document.getElementById("err_id");
                txt.textContent = "아이디는 4~12글자만 입력할 수 있습니다.";
                u_id.focus();
                return false;
            };

            if(!pwd.value){
                var txt = document.getElementById("err_pwd");
                txt.textContent = "비밀번호를 입력하세요.";
                pwd.focus();
                return false;
            };
            var pwd_len = pwd.value.length;
            if(pwd_len < 4 || pwd_len > 8){
                var txt = document.getElementById("err_pwd");
                txt.textContent = "비밀번호는 4~8글자만 입력할 수 있습니다.";
                pwd.focus();
                return false;
            };
            if(pwd.value != repwd.value){
                var txt = document.getElementById("err_repwd");
                txt.textContent = "비밀번호를 확인하세요";
                repwd.focus();
                return false;
            };
            if(!apply1.checked){
                var txt = document.getElementById("err_apply1");
                txt.textContent = "약관 동의가 필요합니다";
                apply1.focus();
                return false;
            };
            if(!apply2.checked){
                var txt = document.getElementById("err_apply2");
                txt.textContent = "약관 동의가 필요합니다";
                apply1.focus();
                return false;
            };
            if(!apply3.checked){
                var txt = document.getElementById("err_apply3");
                txt.textContent = "약관 동의가 필요합니다";
                apply1.focus();
                return false;
            };
    

        var reg = /^[0-9]+$/g;
        if(!reg.test(mobile.value)){
            var txt = document.getElementById("err_mobile");
            txt.textContent = "전화번호는 숫자만 입력할 수 있습니다.";
            mobile.focus();
            return false;
        };
        if(!apply1.checked){
            var txt = document.getElementById("err_apply1");
            txt.textContent = "이용약관 동의가 필요합니다."
            apply1.focus();
            return false;
        };
        if(!apply2.checked){
            var txt = document.getElementById("err_apply2");
            txt.textContent = "개인정보 수집 이용 동의가 필요합니다."
            apply2.focus();
            return false;
        };
        if(!apply3.checked){
            var txt = document.getElementById("err_apply3");
            txt.textContent = "무료배송, 할인쿠폰 등 혜택/정보 수신 동의가 필요합니다."
            apply3.focus();
            return false;
        };
    };

    function change_email(){
        var email_dns = document.getElementById("email_dns");
        var email_sel = document.getElementById("email_sel");

        var idx = email_sel.options.selectedIndex;

        var val = email_seloptions[idx].value;
        email_dns.value = val;
    };

    function id_search(){
        window.open("id_search.html","","width=600, height=300, left=0, top=0");
    };
    function addr_search(){
        window.open("addr_search.html","","width:600, height=300, left=0, top=0");
    }

    </script>
</head>
<body>
    <header id="header" class="header">
        <h1>회원가입</h1>
    </header>
    <hr>
    <div class="join">
        <form id="join_form" name="join_form" action="joincomplete.html" method="get" onsubmit="return form_check()">
                <fieldset class="info">
                <p>
                    <span id="id">
                        <label for="u_id">아이디</label>
                        <input type="text" name="u_id" id="u_id" placeholder="아이디를 입력해주세요" onclick="id_search()">
                        <button type="button" onclick="id_search()">중복 확인</button><br>
                        <span class="dsp_txt">* 아이디는 4~12글자만 입력할 수 있습니다.</span>
                    </span>
                    <span id="err_id" class="err_txt"></span>
                </p>
                <p>
                    <label for="pwd">비밀번호</label>
                    <input type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력해주세요">
                    <br><span class="dsp_txt">*비밀번호는 4~8글자만 입력할 수 있습니다.</span>
                    <br><span id="err_pwd" class="err_txt"></span>
                </p>
                <p>
                    <label for="repwd">비밀번호 확인<input type="password" id="repwd" placeholder="비밀번호를 한번 더 입력해주세요"></label><br>
                </p>
                <p>
                    <label for="u_name">이름</label><input type="text" id="uname" placeholder="이름을 입력해주세요">
                    <br><span id="err_name" class="err_txt"></span>
                    
                </p>
                <p>
                    <label for="email_id" class="c_title">이메일</label>
                    <input type="text" name="email_id" id="email_id" size="12"> @
                    <input type="text" name="email_dns" id="email_dns" size="12" onchange="change_email()" >
                    <select name="email_sel" id="email_sel" onchange="change_email()">
                        <option value="">직접입력</option>
                        <option value="naver.com">네이버</option>
                        <option value="hanmail.net">다음</option>
                        <option value="google.com">구글</option>
                    </select> 
                    </label><br>
                </p>
                <p>
                    <label for="mobile">휴대폰</label>
                    <input type="text" name="mobile" id="mobile" placeholder="숫자만 입력해주세요">
                    <br><span id="err_mobile" class="err_txt"></span>
                </p>
                <p>
                    <label for="user_address">주소</label>
                    <input type="text" name="postalCode" id="postalCode">
                    <button type="button" onclick="addr_search()">주소 검색</button><br>
                    <label for="addr1">기본주소</label>
                    <input type="text" id="addr1" placeholder="주소를 입력해주세요." size="30"><br>
                    <label for="addr2">상세주소</label>
                    <input type="text" id="addr2" placeholder="상세주소를 입력해주세요."><br>
                </p>
                <p>
                    <label for="sex">성별 
                    <input type="radio" id="sex">남자</label>
                    <input type="radio">여자
                    <input type="radio" checked>선택안함
                </p>
                <p class="birth">
                    <label>생년월일</label>
                    <input type="text" name="birth" id="birth" placeholder="ex) 20221009"><br>
                </p>
                <p class="addinfo">
                    <label>추가입력 사항<input type="radio"> 추천인 아이디 <input type="radio">참여 이벤트명</div></label><br>
                    <input type="text" placeholder="추천인 아이디를 입력해 주세요.">
                    추천인 아이디와 참여 이벤트명 중 하나만 선택 가능합니다.
                </p>
                <p class="info">가입 이후는 수정이 불가능합니다.<br>대소문자 및 띄어쓰기에 유의해주세요.</p>                          
                
                <hr>
                <div class="agree">
                    
                    <label class="select"><input type="radio" id="check" name="check" value="동의"></label>
                    <input type="checkbox" name="allapply" id="allapply" value="y">전체 동의합니다.<br>선택항목에 동의하지 않은 경우도 회원가입 및 일반적인 서비스를 이용할 수 있습니다.<br>
                    <input type="checkbox" name="apply1" id="apply1" value="y">이용약관 동의 (필수)<br>
                    <input type="checkbox" name="apply2" id="apply2" value="y">개인정보 수집 이용 동의 (필수)<br>
                    <input type="checkbox" name="apply3" id="apply3" value="y">무료배송, 할인쿠폰 등 혜택/정보 수신 동의<br>
                    <br><span id="err_apply" class="err_txt"></span>
                    <input type="radio">SMS <input type="radio">이메일<br>
                    <p>동의 시 한달 간 [5% 적립] + [2만원 이상 무료배송] 첫 주문 후 안내</p>
                    <input type="checkbox" name="apply4" class="err_txt" id="apply4">본인은 만 14세 이상입니다.(필수)<br>
                </div>
                <div class="button_group">
                    <button class="btn-sign" type="submit" onclick="form_check()">가입하기</button>
                    <button class="btn-return" type="button" onclick="history.back()">돌아가기</button>
                </div>
                </div>
                </fieldset>
            </form>
</body>
</html>