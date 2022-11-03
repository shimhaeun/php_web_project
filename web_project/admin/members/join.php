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
        function form_check(){
            // 객체 생성
            var u_name = document.getElementById("u_name");
            var u_id = document.getElementById("u_id");
            var pwd = document.getElementById("pwd");
            var repwd = document.getElementById("repwd");
            var mobile = document.getElementById("mobile");
            var apply = document.getElementById("apply");

            if(u_name.value == ""){ // if(!u_name.value){ //값이 없다면
            // if(u_name.value != ""){ // if(u_name.value){ // 값이 있다면
                // alert("이름을 입력하세요.");
                var txt = document.getElementById("err_name");
                txt.innerHTML = "<em>이름을 입력하세요.</em>";
                // txt.textContent = "<em>이름을 입력하세요.</em>";

                u_name.focus();
                return false;
            };

            if(!u_id.value){
                var txt = document.getElementById("err_id");
                txt.textContent = "아이디를 입력하세요.";
                u_id.focus();
                return false;
            };
            var id_len = u_id.value.length;
            // alert(id_len);
            if( id_len < 4 || id_len > 12 ){
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
            var pw_len = pwd.value.length;
            if(pw_len < 4 || pw_len > 8){
                var txt = document.getElementById("err_pwd");
                txt.textContent = "비밀번호 4~8글자만 입력할 수 있습니다.";
                pwd.focus();
                return false;
            };

            if(pwd.value != repwd.value){
                var txt = document.getElementById("err_repwd");
                txt.textContent = "비밀번호를 확인하세요.";
                repwd.focus();
                return false;
            };

            // 정규식으로 숫자인지 검사
            //  변수 = /패턴(규칙)/플래그(옵션);
            //  변수.메소드( );
            var reg = /^[0-9]+$/g;
            /* var reg = /^[0-9]{3, 11}$/g; */
            if(!reg.test(mobile.value)){
                var txt = document.getElementById("err_mobile");
                txt.textContent = "전화번호는 숫자만 입력할 수 있습니다.";
                mobile.focus();
                return false;
            };

            if(!apply.checked){
                var txt = document.getElementById("err_apply");
                txt.textContent = "약관 동의가 필요합니다.";
                apply.focus();
                return false;
            };
        };

        function change_email(){
            // alert("TEST");
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");

            var idx =email_sel.options.selectedIndex;
            // alert(idx);
            // var val = email_sel.options[1].text;
            // var val = email_sel.options[1].value;
            // alert(val);

            var val = email_sel.options[idx].value;
            email_dns.value = val;
        };

        function id_search(){
            // window.open("팝업될 문서 경로", "팝업 되었을 때의 이름", "옵션");
            window.open("id_search.php", "idsch", "width=600,height=300,left=0,top=0");
        };
        function addr_search(){
            window.open("addr_search.php", "", "width=600,height=300,left=0,top=0");
        };

    </script>
</head>
<body>
    <form name="join_form" action="insert.php" method="post" onsubmit="return form_check()">
        <fieldset>
            <legend>회원가입</legend>
                <p class="c_line">
                    <label for="u_name" class="c_title">이름</label>
                    <input type="text" name="u_name" id="u_name">
                    <br><span id="err_name" class="err_txt"></span>
                </p>
                
                <p class="c_line">
                    <label for="u_id" class="c_title">아이디</label>
                    <!-- <input type="text" name="u_id" id="u_id" maxlength="12" minlength="4"> -->
                    <input type="text" name="u_id" id="u_id">
                    <button type="button" onclick="id_search()">아이디 중복 확인</button>
                    <br><span class="dsp_txt">* 아이디는 4~12글자만 입력할 수 있습니다.</span>
                    <br><span id="err_id" class="err_txt"></span>
                </p>

                <p class="c_line">
                    <label for="pwd" class="c_title">비밀번호</label>
                    <!-- <input type="password" name="pwd" id="pwd"> -->
                    <input type="password" name="pwd" id="pwd">
                    <br><span class="dsp_txt">* 비밀번호는 4~8글자만 입력할 수 있습니다.</span>
                    <br><span id="err_pwd" class="err_txt"></span>
                </p>

                <p class="c_line">
                    <label for="repwd" class="c_title">비밀번호 확인</label>
                    <!-- <input type="password" name="repwd" id="repwd"> -->
                    <input type="text" name="repwd" id="repwd">
                    <br><span id="err_repwd" class="err_txt"></span>
                </p>
                
                <p class="c_line">
                    <label for="mobile" class="c_title">전화번호</label>
                    <input type="text" name="mobile" id="mobile">
                    <br><span class="dsp_txt">"-" 없이 숫자만 입력</span>
                    <br><span id="err_mobile" class="err_txt"></span>
                </p>
                           
                <p class="c_line">
                    <label for="birth" class="c_title">생년월일</label>
                    <input type="text" name="birth" id="birth">
                    <br><span class="dsp_txt">ex) 20221006</span>
                </p>
                
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
                    <input type="text" name="postalCode" id="postalCode">
                    <button type="button" onclick="addr_search()">주소검색</button><br>
                    <label for="addr1_b" class="c_title">기본주소</label>
                    <input type="text" name="addr_b" id="addr_b" size="30"><br>
                    <label for="addr_d" class="c_title">상세주소</label>
                    <input type="text" name="addr_d" id="addr_d" size="30">
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
                    <button type="submit">회원가입 버튼</button>
                </p>
        </fieldset>
    </form>
</body>
</html>