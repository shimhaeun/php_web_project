<?php include "inc/session.php" ?>

<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>마켓컬리 :: 내일의 장보기</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=**Nanum+Gothic+Coding:wght@700**&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<!-- <link rel="styleSheet" href="../css/main2.css"> -->
<link rel="styleSheet" href="css/normalize.css">
<!-- <link rel="styleSheet" href="css/index.css"> -->
<link rel="stylesheet" href="css/sub_header.css">
<link href="/css/flexnav.css" media="screen, projection" rel="stylesheet" type="text/css">
<script src="/js/jquery.flexnav.js" type="text/javascript"></script>
</head> 
<body>
<script type="text/javascript" src="/js/jquery-3.6.1.min.js"></script>
<link rel="stylesheet" href="css/jquery.bxslider.css">
<script src="http://code.jquery.com/jquery-1.9.0.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexnav.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<link rel="stylesheet" type="text/css" href="css/dropdown.css">
<script type="text/javascript" src="js/jquery.flexnav.min.js"></script>
<script type="text/javascript" src="//use.typekit.net/qyb8ood.js"></script>
<script src="/js/timer.js"></script>
<script src="js/bxslider.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script> -->
<script src="js/dropdown.js"></script>
</head>
<body>
    

<div id="headerLogo">
    <div class="logo">
        <a href="#top"><img src="http://localhost/kurly_project/img/logo.jpg"></a>
        <div class="logogroup">
            <div class="mkklogo" style="cursor: pointer; font-size: 18px;">
                <a href="http://localhost/kurly_project" style="color: white;">
                    마켓컬리
                </a>
            </div>
            <div class="btklogo" style="cursor: pointer; font-size: 18px;">
                뷰티컬리
            </div>
        </div>
    </div>
</div>

<!-- <div class="search"> -->
<!-- <input type="text" placeholder="빵빵한 라인업 온라인 빵지순례!"><a href="#"><img src="http://localhost/kurly_project/img/ico_search_x2.png" class="sch"></a></input>
<img src="http://localhost/kurly_project/img/heart.png" class="deli" style="cursor: pointer;"><img src="http://localhost/kurly_project/img/cart_icon.png" class="cart" style="cursor: pointer;"> -->
<!-- </div>  -->
<div id="userMenu">
    <?php if(!$s_idx){ ?>
    <ul class="list_menu">
        <li class="menu none_sub menu_join">
            <a href="members/join.php" class="link_menu">회원가입</a>
        </li>
        <li class="menu none_sub menu_login">
            <a href="login/login.php" class="link_menu">로그인</a>
        </li>
    </ul>
    <?php } else if($s_id == "admin"){ ?>
        <li class="menu none_sub menu_login">
            <a href="login/logout.php" class="link_menu">로그아웃</a>
        </li>
        <li class="menu none_sub menu_login">
            <a href="admin/index.php" class="link_menu">관리자 페이지</a>
        </li>
    </ul>
    <?php } else{ ?>
        <li class="menu none_sub menu_login">
            <a href="login/logout.php" class="link_menu">로그아웃</a>
        </li>
        <li class="menu none_sub menu_login">
            <a href="login/logout.php" class="link_menu">내 정보</a>
        </li>
    <?php }; ?>
        <div class="nav">
        <li class="menu lst">
                <a href="https://www.kurly.com/shop/board/list.php?id=notice" class="link_menu">고객센터</a>
                <ul>
                    <li><a href="notice/list.php">공지사항</a></li>
                    <li><a href="notice/qna.php">자주하는질문</a></li>
                    <li><a href="notice/otoinquiry.php">1:1 문의</a></li>
                    <li><a href="notice/bulkorder.php">대량주문 문의</a></li>
                </ul>
        </li>
        </div>
</ul>
</div>

<!-- <div id="gnbMenu-cover"> -->
<!-- <div id="gnbMenu"> -->
    <!-- <div class="gnb2"> -->
        <!-- category menu -->
        <ul id="nav">
                <li class="yahoo"><a href="#">카테고리</a>
                    <ul>
        <li><a href="goods/goodslist_all.php">전체보기</a></li>

        <li><a href="#">선물하기</a>            
            <ul>
                <li><a href="#">홍삼·즙</a></li>
                    <li><a href="#">건강식품</a></li>
                    <li><a href="#">과일·수산정육</a></li>
                    <li><a href="#">베이커리·커피·차</a></li>
                    <li><a href="#">간편식·오일·캔류</a></li>
                    <li><a href="#">뷰티·향수·꽃</a></li>
                    <li><a href="#">리빙·생활·유아동</a></li>
            </ul>
        </li>
        <li><a href="#">채소</a>            
            <ul>
                <li><a href="goods/goodslist_eco.html">친환경</a></li>
                <li><a href="goods/goodslist_sweetpotato.html">고구마·감자·당근</a></li>
                <li><a href="goods/goodslist_spinach.html">시금치·쌈채소·나물</a></li>
                <li><a href="goods/goodslist_broccoli.html">브로콜리·파프리카·양배추</a></li>
                <li><a href="goods/goodslist_onion.html">양파·대파·마늘·배추</a></li>
                <li><a href="goods/goodslist_cucumber.html">오이·호박·고추</a></li>
                <li><a href="goods/goodslist_frozen.html">냉동·이색·간편채소</a></li>
                <li><a href="gooods/goodslist_beansprouts.html">콩나물·버섯</a></li>
              </ul>
        </li>
        <li><a href="#">과일·견과·쌀</a>            
            <ul>
                <li><a href="goods/goodslist_eco.html">친환경</a></li>
                <li><a href="#">제철과일</a>
                <li><a href="#">국산과일</a>
                <li><a href="#">수입과일</a>
                <li><a href="#">간편과일</a>
                <li><a href="#">냉동·건과일</a>
                <li><a href="#">견과류</a>
                <li><a href="#">쌀·잡곡</a>
                </li>
              </ul>
        </li>
        <li><a href="#">수산·해산·건어물</a>
            <ul>
                <li><a href="#">제철수산</a></li>
                <li><a href="#">생선류</a></li>
                <li><a href="#">굴비·반건류</a></li>
                <li><a href="#">오징어·낙지·문어</a></li>
                <li><a href="#">새우·게·랍스터</a></li>
                <li><a href="#">해산물·조개류</a></li>
                <li><a href="#">수산가공품</a></li>
                <li><a href="#">김·미역·해조류</a></li>
                <li><a href="#">건어물·다시팩</a></li>
            </li>
        </li>
    </ul>
    <li><a href="#">정육·계란</a>            
        <ul>
            <li><a href="#">국내산 소고기</a></li>
                <li><a href="#">수입산 소고기</a></li>
                <li><a href="#">돼지고기</a></li>
                <li><a href="#">계란류</a></li>
                <li><a href="#">닭·오리고기</a></li>
                <li><a href="#">양념육·돈까스</a></li>
                <li><a href="#">양고기</a></li>
            </li>
          </ul>
    </li>
    <li><a href="#">국·반찬·메인요리</a>            
        <ul>
            <li><a href="#">국·탕·찌개</a></li>
            <li><a href="#">밀키트·메인요리</a></li>
            <li><a href="#">밑반찬</a></li>
            <li><a href="#">김치·젓갈·장류</a></li>
            <li><a href="#">두부·어묵·부침개</a></li>
            <li><a href="#">베이컨·햄·통조림</a></li>
          </ul>
    </li>
    <li><a href="#">샐러드·간편식</a>            
        <ul>
            <li><a href="#">샐러드·닭가슴살</a></li>
            <li><a href="##">도시락·밥류</a></li>
            <li><a href="##">파스타·면류</a></li>
            <li><a href="##">떡볶이·튀김·순대</a></li>
            <li><a href="##">피자·핫도그·만두</a></li>
            <li><a href="##">폭립·떡갈비·안주</a></li>
            <li><a href="##">죽·스프·카레</a></li>
          </ul>
    </li>
    <li><a href="#">면·양념·오일</a>            
        <ul>
            <li><a href="#">파스타·면</a></li>
            <li><a href="##">식초·소스·드레싱</a></li>
            <li><a href="##">양념·액젓·장류</a></li>
            <li><a href="##">식용유·참기름·오일</a></li>
            <li><a href="##">소금·설탕·향신료</a></li>
            <li><a href="##">밀가루·가루·믹스</a></li>
          </ul>
    </li>
    <li><a href="#">생수·음료·우유·커피</a>            
        <ul>
            <li><a href="#">생수·탄산수</a></li>
            <li><a href="#">음료·주스</a></li>
            <li><a href="#">우유두유·요거트</a></li>
            <li><a href="#">커피</a></li>
            <li><a href="#">차</a></li>
          </ul>
    </li>
    <li><a href="#">간식·과자·떡</a>            
        <ul>
            <li><a href="#">과자·스낵·쿠키 </a></li>
            <li><a href="#">초콜릿·젤리·캔디</a></li>
            <li><a href="#">떡·한과</a></li>
            <li><a href="#">아이스크림</a></li>
          </ul>
    </li>
    
    <li><a href="#">베이커리·치즈·델리</a>            
        <ul>
            <li><a href="#">식빵·빵류</a></li>
            <li><a href="#">잼·버터·스프레드</a></li>
            <li><a href="#">케이크·파이·디저트</a></li>
            <li><a href="#">치즈</a></li>
            <li><a href="#">델리</a></li>
            <li><a href="#">올리브·피클</a></li>
          </ul>
    </li>
    <li><a href="#">건강식품</a>            
        <ul>
            <li><a href="#">영양제</a></li>
            <li><a href="#">유산균</a></li>
            <li><a href="#">홍삼·인삼·꿀</a></li>
            <li><a href="#">건강즙·건강음료</a></li>
            <li><a href="#">건강분말·건강환·</a></li>
            <li><a href="#">다이어트·이너뷰티</a></li>
            <li><a href="#">유아동</a></li>
          </ul>
    </li>
    <li><a href="#">와인</a>            
        <ul>
            <li><a href="#">레드와인</a></li>
            <li><a href="#">화이트와인</a>
            <li><a href="#">샴페인·스파클링</a>
          </ul>
    </li>
    <li><a href="#">전통주</a>            
        <ul>
            <li><a href="#">막걸리·탁주</a></li>
            <li><a href="#">증류주·약주·청주</a>
            <li><a href="#">과실주·리큐르</a>
          </ul>
    </li>
    <li><a href="#">생활용품·리빙·캠핑</a>            
        <ul>
            <li><a href="#">휴지·티슈</a></li>
            <li><a href="#">여성·위생용품</a>
            <li><a href="#">세제·청소용품</a>
            <li><a href="#">의류·인테리어소품</a>
            <li><a href="#">의약외품·마스크</a>
            <li><a href="#">생활잡화·문구</a>
            <li><a href="#">캠핑용품</a>
            </li>
          </ul>
    </li>
    <li><a href="#">스킨케어·메이크업</a>            
        <ul>
            <li><a href="#">스킨·미스트·패드</a></li>
            <li><a href="#">에센스·앰플·로션</a>
            <li><a href="#">크림·오일</a>
            <li><a href="#">클렌징</a>
            <li><a href="#">마스크팩</a>
            <li><a href="#">선케어</a>
            <li><a href="#">메이크업</a>
            <li><a href="#">렌즈케어</a>
            <li><a href="#">뷰티소품·기기</a>
            </li>
          </ul>
    </li>
    <li><a href="#">헤어·바디·구강</a>            
        <ul>
            <li><a href="#">구강·면도</a></li>
            <li><a href="#">샴푸·컨디셔너</a>
            <li><a href="#">트리트먼트·팩</a>
            <li><a href="#">헤어에센스·염모</a>
            <li><a href="#">바디워시·스크럽</a>
            <li><a href="#">바디로션·크림</a>
            <li><a href="#">핸드·립·데오</a>
            <li><a href="#">향수·디퓨저</a>
            <li><a href="#">헤어·바디소품</a>
            </li>
          </ul>
    </li>
    <li><a href="#">주방용품</a>            
        <ul>
            <li><a href="#">주방소모품·잡화</a></li>
            <li><a href="#">주방·조리도구</a>
            <li><a href="#">냄비·팬·솥</a>
            <li><a href="#">보관용기·텀블러</a>
            <li><a href="#">식기·테이블웨어</a>
            <li><a href="#">컵·잔·커피도구</a>
            </li>
          </ul>
    </li>
    <li><a href="#">가전제품</a>            
        <ul>
            <li><a href="#">주방가전</a></li>
            <li><a href="#">생활가전</a>
            <li><a href="#">계절가전</a>
            <li><a href="#">디지털·PC</a>
            <li><a href="#">대형·설치가전</a>
            </li>
          </ul>
    </li>
    <li><a href="#">반려동물</a>            
        <ul>
            <li><a href="#">강아지 간식</a></li>
            <li><a href="#">강아지 주식</a>
            <li><a href="#">고양이 간식</a>
            <li><a href="#">고양이 주식</a>
            <li><a href="#">건강관리</a>
            <li><a href="#">배변·위생</a>
            <li><a href="#">장난감</a>
            <li><a href="#">미용·외출·하우스</a>
            </li>
          </ul>
    </li>
    <li><a href="#">베이비·키즈·완구</a>            
        <ul>
            <li><a href="#">분유·간편 이유식</a></li>
            <li><a href="#">이유식 재료</a>
            <li><a href="#">간식·음식</a>
            <li><a href="#">건강식품</a>
            <li><a href="#">이유·수유용품</a>
            <li><a href="#">기저귀·물티슈</a>
            <li><a href="#">세제·위생용품</a>
            <li><a href="#">스킨·구강케어</a>
            <li><a href="#">완구·잡화류</a>
            </li>
        </ul>
    </li>
    <li><a href="#">컬리의 추천</a>            
        <ul>
            <li><a href="#">여행·문화</a></li>
            <li><a href="#">홈캉스</a>
            <li><a href="#">식단관리</a>
            <li><a href="#">간편한 아침식사</a>
            <li><a href="#">재구매 BEST</a>
            <li><a href="#">3천원의 행복</a>
            <li><a href="#">컬리마트</a>
            <li><a href="#">대용량 상품</a>
            <li><a href="#">캠핑</a>
            <li><a href="#">1인 가구</a>
            <li><a href="#">비건</a>
            <li><a href="#">오프라인 맛집</a>
            <li><a href="#">컬리가 만든 상품</a>
            <li><a href="#">Kurly Only</a>
            <li><a href="#">KF365 / KS365</a>
            <li><a href="#">1% Table</a>
            </li>
        </ul>
    </li>
        </ul>
    </li>
    <!-- category -->
    <li class="google"><a href="#">신상품</a></li>
    <li class="twitter"><a href="#">베스트</a></li>
    <li class="twitter"><a href="#">알뜰쇼핑</a></li>
    <li class="twitter"><a href="#">특가/혜택</a></li>
</ul>
<div id="side_search" class="gnb_search">
    <form action="https://www.kurly.com/shop/goods/goods_search.php?&">
        <input type="hidden" name="searched" value="Y">
        <input type="hidden" name="log" value="1">
        <input type="hidden" name="skey" value="all">
        <input type="hidden" name="hid_pr_text" value>
        <input type="hidden" name="hid_link_url" value>
        <input type="hidden" id="edit" name="edit" value>
    </form>
</div>
<div class="search">
<input type="text" placeholder="빵빵한 라인업 온라인 빵지순례!"><a href="#"><img src="http://localhost/kurly_project/img/search_icon.png" class="sch"></a></input>
<img src="http://localhost/kurly_project/img/heart.png" class="deli" style="cursor: pointer;"><img src="http://localhost/kurly_project/img/cart_icon.png" class="cart" style="cursor: pointer;">
</div>
<!-- <div class="cart_count">
    <div class="inner_cartcount">
        <a href="https://www.kurly.com/shop/goods/goods_cart.php" class="btn_cart">
            <span class="screen_out">장바구니</span>
            <span id="cart_item_count" class="nu realtime_cartcount" style="display: none;"></span>
        </a>
    </div>
</div> -->
<!-- category menu -->
    </div>
