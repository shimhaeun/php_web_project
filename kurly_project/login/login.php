<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="styleSheet" href="../normalize.css">
    <link rel="styleSheet" href="../../index.css">
    <link rel="stylesheet" href="../../css/sub_header.css">

    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../j=s/jquery.flexnav.min.js"></script>
<link href="../css/flexnav.css" media="screen, projection" rel="stylesheet" type="text/css">
<!-- <script src="/js/jquery.flexnav.js" type="text/javascript"></script> -->
</head> 
<body>
<script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
<link rel="stylesheet" href="../css/jquery.bxslider.css">
<script src="http://code.jquery.com/jquery-1.9.0.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.flexnav.min.js"></script>
<script src="../js/jquery.bxslider.js"></script>
<script type="text/javascript" src="../js/jquery.flexnav.min.js"></script>
<script type="text/javascript" src="//use.typekit.net/qyb8ood.js"></script>
<script src="../js/timer.js"></script>
<script src="../js/bxslider.js"></script>
<!-- jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script> -->
<link rel="stylesheet" href="../css/dropdown.css">
<script src="../js/dropdown.js"></script>
<script>
	function login_form_check(){
            var u_id = document.getElementById("u_id");
            var pwd = document.getElementById("pwd");

            if(!u_id.value){
                alert("아이디를 입력하세요.");
                u_id.focus();
                return false;
            };
            if(!pwd.value){
                alert("비밀번호를 입력하세요.");
                pwd.focus();
                return false;
            };
        };
</script>
<?php include "../inc/sub_header.php" ?>
<header>
</head>
<body>
<!-- 로그인 -->
<div id="content">
  <div class="section_login">
      <fieldset>
      <h3 class="tit_login">로그인</h3>
      <div class="login_box">
        <div class="login_view">
          <form name="login_form" action="login_ok.php" method="POST" id="login_form" onsubmit="return login_form_check()">
            <input type="text" name="u_id" id="u_id" size="20" tabindex="1" placeholder="아이디를 입력해주세요" label for="u_id" autofocus>
            <input type="password" name="pwd" id="pwd" size="20" tabindex="2" placeholder="비밀번호를 입력해주세요" label for="pwd">
            <div class="checkbox_save">
              <label class="label_checkbox checked" >

                <input type="checkbox" id="chk_security"name="chk_security" value="y" checked="checked" onchange="">보안접속
              </label>
              <div class="login_search">
                <a class="link" onclick="" href="#">아이디 찾기</a>
                <span class="bar"></span>
                <a class="link" onclick="" href="#">
                  비밀번호 찾기
                </a>
              </div>
            </div>
            <button class="btn_type1" type="submit" onclick="">
              <span class="txt_type">로그인</span>
            </button>
            <br>
            <button class="btn_type2" type="submit" onclick="">
                <span class="txt_type">회원가입</span>
            </button>
          </fieldset>
        </form>
        
        <!-- <button type="button" class="btn_type2 btn_member" onclick="history.back();">돌아가기</button> -->
            </a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer-inner">
      <div class="center">
      <p class="happy">고객행복센터</p>
      <dl>
        <dt class="tel">1644-1107</dt>
          <div class="center-txt">
            <dd><span class="bold">365고객센터</span><br>
              <span class="time2">오전7시-오후7시</span>
            </dd>
          </div>
        <dt class="kaka"><a href="#">카카오톡 문의</a></dt>
          <div class="center-txt">
            <dd><span class="bold">365고객센터</span><br>
              <span class="time2">오전7시-오후7시</span>
            </dd>
          </div>
        <dt class="kaka"><a href="#">1:1 문의</a></dt>
          <div class="center-txt">
            <dd><span class="bold">24시간 접수 가능</span><br>
              <span class="time2">고객센터 운영시간에 순차적으로 답변해드리겠습니다.</span>
            </dd>
          </div>
      </dl>
      </div>
      
      <div class="company">
        <ul class="gnb3">
          <li><a href="#">컬리소개</a></li>
          <li><a href="#">컬리소개영상</a></li>
          <li><a href="#">인재채용</a></li>
          <li><a href="#">이용약관</a></li>
          <li><a href="#"><span class="police">개인정보처리방침</span></a></li>
          <li><a href="#">이용안내</a></li>
        </ul>
        <address>
          법인명(상호):주식회사 컬리 | 사업자등록번호:261-81-23567 <span class="purple2">사업자정보 확인</span><br>
          통신판매업:제 2018-서울강남-01646호 | 개인정보보호책임자:이원준<br>
          주소:서울시 도산대로 16길 20,이래빌딩 B1~4F | 대표이사:김슬아<br>
          입점문의:<span class="purple2">입점문의하기</span> | 제휴문의:<span class="purple2">business@kurlycorp.com</span><br>
          채용문의:<span class="purple2">recruit@kurlycorp.com</span><br>
          팩스:070-7500-6098 | 이메일:<span class="purple2">help@kurlycorp.com</span><br><br>
          &copy; KURLY CORP.ALL RIGHTS RESERVED<br>
        </address>
  
        <div class="sns">
          <img src="../img/instagram_icon.png">
          <img src="../img/facebook_icon.png">
          <img src="../img/blog_icon.png">
          <img src="../img/naverpost_icon.png">
          <img src="../img/youtube_icon.png">
        </div>
      </div>
    </div>	<!-- end of .footer-inner -->
  
    <div class="footer-link">
      <dl class="foot">
        <dt><img src="../img/isms_icon.png"></dt>
        <dd class="foot-txt">
          [인증범위]마켓컬리 쇼핑몰 서비스 개발.운영<br>
          [유효기간]2019.04.01~2022.03.31
        </dd>
      </dl>
      
      <dl class="foot">
        <dt><img src="../img/eprivacy_icon.png"></dt>
        <dd class="foot-txt">
          개인정보보호 우수 웹사이트.<br>
          개인정보처리시스템인증(ePRIVACY PLUS)
        </dd>
      </dl>	
  
      <dl class="foot2">
        <dt><img src="../img/toss_icon.png"></dt>
        <dd class="foot-txt2">
          고객님의 안전거래를 위해 현금 등으로 결제 시 저희 쇼핑몰에서 가입한<br>
          토스 페이먼츠 구매안전(에스크로)서비스를 이용하실 수 있습니다.
        </dd>
      </dl>	
    </div>
  </footer> 
</main>
</body>
</html>