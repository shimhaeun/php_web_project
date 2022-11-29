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
<link rel="styleSheet" href="css/normalize.css">
<link rel="stylesheet" href="css/sub_header.css">
<link href="css/flexnav.css" media="screen, projection" rel="stylesheet" type="text/css">
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
<script src="js/dropdown.js"></script>
</head>
<body>
    

<div id="headerLogo">
    <div class="logo">
        <a href="../kurly_project/index.php"><img src="img/logo.jpg"></a>
        <div class="logogroup">
            <div class="mkklogo" style="cursor: pointer; font-size: 18px;">
                <a href="../kurly_project/index.php" style="color: white;">
                    마켓컬리
                </a>
            </div>
            <div class="btklogo" style="cursor: pointer; font-size: 18px;">
                뷰티컬리
            </div>
        </div>
    </div>
</div>

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
        <ul class="list_menu">
        <li class="menu none_sub menu_login">
            <a href="login/logout.php" class="link_menu">로그아웃</a>
        </li>
        <li class="menu none_sub menu_login">
            <a href="admin/index.php" class="link_menu">관리자</a>
        </li>
    </ul>
    <?php } else{ ?>
        <ul class="list_menu">
        <li class="menu none_sub menu_login">
            <a href="login/logout.php" class="link_menu">로그아웃</a>
        </li>
        <li class="menu none_sub menu_login">
            <a href="members/member_info.php" class="link_menu">내 정보</a>
        </li>
    </ul>
    <?php }; ?>
        <ul id="nav">
        <li class="menu lst">
                <a href="https://www.kurly.com/shop/board/list.php?id=notice" class="link_menu">고객센터</a>
                <ul>
                    <li><a href="notice/list.php">공지사항</a></li>
                    <li><a href="qna/list.php">자주하는질문</a></li>
                    <li><a href="otoinquiry/otoinquiry.php">1:1 문의</a></li>
                    <li><a href="bulkorder/bulkorder.php">대량주문 문의</a></li>
                </ul>
        </li>
        </ul>
</div>

<!-- <div id="gnbMenu-cover"> -->
<!-- <div id="gnbMenu"> -->
    <!-- <div class="gnb2"> -->
        <!-- category menu -->
        <div class="nav_menu">
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
			<input type="text" placeholder="빵빵한 라인업 온라인 빵지순례!"><a href="#"><img src="img/search_icon.png" class="sch"></a></input>
			<img src="img/heart.png" class="deli" style="cursor: pointer;"><img src="img/cart_icon.png" class="cart" style="cursor: pointer;">
			</div>
			</div>
		</div>
<section id="main-slide">
	<div class="slides">
		<div class="slide"><img src="img/main.png">
		<img src="img/main_image.png">
		<img src="img/slide1.png">
		<img src="img/slide2.png">
		<img src="img/slide3.png">
		<img src="https://product-image.kurly.com/cdn-cgi/image/format=auto/banner/main/pc/img/77a3b012-b6f4-47b5-bd22-60951e68c278.jpg">
		<img src="img/slide6.jpeg">
		</div> 
	</div>
</section>	<!-- end of #main-slide-->
 
 <div class="product-list">
	<h2 class="title-goods">이 상품 어때요?</h2>
	<div class="product-list-inner">
		<div class="box"><div><a href="goods/spec.php">
		 <img src="img/cheeseimg.png"></a></div>
			<div class="txt">
				<p><a href="#">[벨지오이오소] 부라타 치즈</a></p>
				<p><span class="price">4,900원</span></p>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/goods13.png"></a></div>
			<div class="txt">
				<p><a href="#">[자연예찬] 족발 슬라이스</a></p>
				<p><span class="orange">10%</span> <span class="price">7,200원</span></p>
				<del>8,000원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/goods13.png"></a></div>
			<div class="txt">
				<p><a href="#">무농약 브로콜리 2종</a></p>
				<p><span class="orange">15%</span> <span class="price">2,286원</span></p>
				<del>2,690원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/goods13.png"></a></div>
			<div class="txt">
				<p><a href="#">애플민트 10g</a></p>
				<p><span class="price">1,490원</span></p>
			</div>
		</div>
	</div>
</div>
<div class="main-special">
	<div class="main-special-inner">
		<div class="special">
			<h1>일일특가</h1><br>
			<p class="txt-style01">
			<div class="clock_img">
				<!-- countdown timer -->
				<div id="the-final-countdown">
					<p></p>
				  </div>
				
			<div class="time">망설이면 늦어요!</div>
			</div>
				<br>
			<p style="font-size: small;">11월, 한 달간 진행! 24시간 한정 특가</p>
		</p><br><br>
		</div>
		<div class="special-box">
			<div class="purple-box">
				<div class="event30">
					
				</div>
				<div><a href="#"><img src="img/spp.gif"></a></div>
			</div>
			
			<div class="event-txt">
				<p>HBAF 매일 색다른 먼투썬 하루견과 6주 (20gX42봉)</p>
				<p class="cheese">주7일 하루 한봉씩 총 42봉의 매일 견과</p>
				<p><span class="orange2">30%</span> <span class="price2">23,730원</span> <del>77,777원</del></p>
			</div>
		</div>
	</div>
</div>

<div class="main-event">
	<h2 class="title-goods">이벤트 소식</h2>
		<div class="main-event-inner">
			<div class="event-box"><div><a href="#"><img src="img/goods01.jpg"></div></a>
				<div class="evt-txt">
					<b>튀김공방 최대 20% 할인</b><br>
					<span class="evt-txt-g">집에서도 바삭하고 촉촉하게!</span>
				</div>
			</div>
			<div class="event-box"><div><a href="#"><img src="img/goods02.jpg"></div></a>
				<div class="evt-txt">
					<b>우드앤브릭 최대 10% 할인</b><br>
					<span class="evt-txt-g">건강한 유럽식 빵의 탄생</span>
				</div>
			</div>
			<div class="event-box"><div><a href="#"><img src="img/goods03.jpg"></div></a>
				<div class="evt-txt">
					<b>외할머니댁 최대 10% 할인</b><br>
					<span class="evt-txt-g">바쁜 날 따뜻한 식사가 생각날 때</span>
				</div>
			</div>
		</div>
</div>

<div class="product-list">
	<h2 class="title-goods">알뜰 상품</h2>
	<!-- <div class="slider" -->
	<div class="product-list-inner">
		<div class="dailyprice">
			일일특가
		</div>
		<div class="box"><div><a href="#"><img src="img/goods04.jpg"></a></div>
			<div class="txt">
				<p><a href="#">[보나쥬르] 가지 BHA 비건 토너</a></p>
				<p><span class="orange">35%</span><span class="price">16,250원</span></p>
				<del>25,000원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/goods05.jpg"></a></div>
			<div class="txt">
				<p><a href="#">[비브] 마이크로비옴 밸런싱 젤 크림</a></p>
				<p><span class="orange">45%</span><span class="price">18,700원</span></p>
				<del>34,000원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/goods06.jpg"></a></div>
			<div class="txt">
				<p><a href="#">[일일특가] [고메공방] 미친 치즈돈까스</a></p>
				<p><span class="orange">30%</span><span class="price">10,430원</span></p>
				<del>14,900원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/goods07.jpg"></a></div>
			<div class="txt">
				<p><a href="#">[켄트] 콤팩트 초극세모 칫솔 4개입 세트</a></p>
				<p><span class="orange">35%</span><span class="price">10,660원</span></p>
				<del>16,400원</del>
			</div>
		</div>
	</div>
</div>

<div class="banner">
	<div class="banner-inner">
		<img src="img/banner.gif">
	</div>
</div>

<div class="category-type">
<h2 class="title-goods">MD의 추천</h2>
	<div class="category">
		<ul class="tabs">
			<li><a href="goodslist_all.php">전체보기</a></li>
			<li><a href="#content-1">채소</a></li>
			<li><a href="#content-2">과일.견과.쌀</a></li>
			<li><a href="#content-3">수산.해산.건어물</a></li>
			<li><a href="#content-4">정육.계란</a></li>
			<li><a href="#content-5">국.반찬.메인요리</a></li>
			<li><a href="#content-6">샐러드.간편식</a></li>
			<li><a href="#content-7">면.양념.오일</a></li><br>
			<li><a href="#content-8">생수.음료.우유.커피</a></li>
			<li><a href="#content-9">간식.과자.떡</a></li>
			<li><a href="#content-10">베이커리.치즈.델리</a></li>
			<li><a href="#content-11">건강식품</a></li>
			<li><a href="#content-12">생활용품.리빙</a></li>
			<li><a href="#content-13">뷰티.바디케어</a></li>
			<li><a href="#content-14">주방용품</a></li><br>
			<li><a href="#content-15">가전제품</a></li>
			<li><a href="#content-16">베이비.키즈</a></li>
			<li><a href="#content-17">반려동물</a></li>
		</ul>
	</div>
	<div class="category-content">
		<div id="content-1" class="box2">
			<div><div><a href="#"><img src="img/goods08.jpg"></a></div>
				<p class="category-txt"><a href="#">
					[KF365] 흙대파 1단<br></a>
					<b>6,490원</b></p>
			</div>
			<div><div><a href="#"><img src="img/goods09.jpg"></a></div>
				<p class="category-txt"><a href="#">
					[KF365] 가지 2입<br></a>
					<b>1,800원</b></p>
			</div>
			<div><div><a href="#"><img src="img/goods10.jpg"></a></div>
				<p class="category-txt"><a href="#">
					[KF365] 다다기오이 3입<br></a>
					<b>2,970원</b></p>
			</div>
			<div><div><a href="#"><img src="img/goods11.jpg"></a></div>
				<p class="category-txt"><a href="#">
					[KF365] 새송이버섯 400g<br></a>
					<b>1,550원</b></p>
			</div>
		</div>
		<div id="content-2" class="box2">
			<div id="content2-1"><div><a href="#"><img src="img/li-2-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
					GAP 유레카 블루베리 100g 2종<br></a>
					<span class="orange">10% </span><b>1,550원</b><del>10,800원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-2-2.jpg"></a></div>
				<p class="category-txt"><a href="#">
					실속 성주 참외 1.5kg<br></a>
					<span class="orange">15% </span><b>14,960원</b><del>17,600원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-2-3.jpg"></a></div>
				<p class="category-txt"><a href="#">
					칠레산 씨없는 청포도 700g<br></a>
					<b>7,950원</b></p>
			</div>
			<div><div><a href="#"><img src="img/li-2-4.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[fruit salon] 컷팅 파인애플 1kg<br></a>
				<span class="orange">20% </span><b>7,840원</b>
				<del>9,800원</del></p>
			</div>
		</div>
		<div id="content-3" class="box2">
			<div><div><a href="#"><img src="img/li-3-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[우주] 프리미엄 손질 생새우살 200g(냉동)<br></a>
				<span class="orange">25% </span><b>6,300원</b>
				<del>8,400원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-3-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[우주] 프리미엄 손질 생새우살 200g(냉동)<br></a>
				<span class="orange">25% </span><b>6,300원</b>
				<del>8,400원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-3-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[우주] 프리미엄 손질 생새우살 200g(냉동)<br></a>
				<span class="orange">25% </span><b>6,300원</b>
				<del>8,400원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-3-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[우주] 프리미엄 손질 생새우살 200g(냉동)<br></a>
				<span class="orange">25% </span><b>6,300원</b>
				<del>8,400원</del></p>
			</div>
		</div>
		<div id="content-4" class="box2">
			<div><div><a href="#"><img src="img/li-4-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[바븐] 완도 전복 260g 내외(5마리)<br></a>
				<b>3,900원</b>
				</p>
			</div>
			<div><div><a href="#"><img src="img/li-4-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[태우한우] 1+ 한우 안심 구이용 200g(냉장)<br></a>
				<b>3,900원</b>
				</p>
			</div>
			<div><div><a href="#"><img src="img/li-4-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[KF365] 양파 1.8kg<br></a>
				<b>3,900원</b>
				</p>
			</div>
			<div><div><a href="#"><img src="img/li-4-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[KF365] 가지 2입<br></a>
				<b>3,900원</b>
				</p>
			</div>
		</div>
		<div id="content-5" class="box2">
			<div><div><a href="#"><img src="img/li-5-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[KF365] 부추 200g<br></a>
				<span class="orange">5% </span><b>2,265원</b>
				<del>8,700원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-5-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[네떼] 부드러운 샐러드<br></a>
				<span class="orange">5% </span><b>2,265원</b>
				<del>8,700원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-5-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				조각 양배추 500g<br></a>
				<span class="orange">5% </span><b>2,265원</b>
				<del>8,700원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-5-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[문경몰] 프리미엄 오미자 자일로스청 원액 1L<br></a>
				<span class="orange">5% </span><b>2,265원</b>
				<del>8,700원</del></p>
			</div>
		</div>
		<div id="content-6" class="box2">
			<div><div><a href="#"><img src="img/li-6-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[빅마우스피자] 케이준 감자튀김 피자<br></a>
				<span class="orange">20% </span><b>4,960원</b>
				<del>6,200원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-6-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[KF365] 노르웨이 생연어회 200g<br></a>
				<span class="orange">20% </span><b>4,960원</b>
				<del>6,200원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-6-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[닥터유] 제주 용암수 (530mL X 20개)<br></a>
				<span class="orange">20% </span><b>4,960원</b>
				<del>6,200원</del></p>
			</div>
			<div><div><a href="#"><img src="img/li-6-1.jpg"></a></div>
				<p class="category-t트t"><a href="#">
				[마켓컬리 X 울워스] 호주산 부채살스테이크 200g<br></a>
				<span class="orange">20% </span><b>8,400</b>
				<del>10,500원</del></p>
			</div>
		</div>
		<div id="content-7" class="box2">
			<div><div><a href="#"><img src="img/li-7-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[위크위크서울] 고수 페스토<br></a>
				<b>13,900원</b></p>
			</div>
			<div><div><a href="#"><img src="img/li-7-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[위크위크서울] 고수 페스토<br></a>
				<b>13,900원</b></p>
			</div>
			<div><div><a href="#"><img src="img/li-7-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[위크위크서울] 고수 페스토<br></a>
				<b>13,900원</b></p>
			</div>
			<div><div><a href="#"><img src="img/li-7-1.jpg"></a></div>
				<p class="category-txt"><a href="#">
				[위크위크서울] 고수 페스토<br></a>
				<b>13,900원</b></p>
			</div>
		</div>
		<!-- <div id="content-8" class="box2">
			<div><div><a href="#"><img src="img/li-8-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-8-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-8-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-8-1.jpg"></div></a></div>
		</div>
		<div id="content-9" class="box2">
			<div><div><a href="#"><img src="img/li-9-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-9-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-9-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-9-1.jpg"></div></a></div>
		</div>
		<div id="content-10" class="box2">
			<div><div><a href="#"><img src="img/li-10-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-10-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-10-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-10-1.jpg"></div></a></div>
		</div>
		<div id="content-11" class="box2">
			<div><div><a href="#"><img src="img/li-11-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-11-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-11-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-11-1.jpg"></div></a></div>
		</div>
		<div id="content-12" class="box2">
			<div><div><a href="#"><img src="img/li-12-1.webp"></div></a></div>
			<div><div><a href="#"><img src="img/li-12-1.webp"></div></a></div>
			<div><div><a href="#"><img src="img/li-12-1.webp"></div></a></div>
			<div><div><a href="#"><img src="img/li-12-1.webp"></div></a></div>
		</div>
		<div id="content-13" class="box2">
			<div><div><a href="#"><img src="img/li-13-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-13-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-13-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-13-1.jpg"></div></a></div>
		</div>
		<div id="content-14" class="box2">
			<div><div><a href="#"><img src="img/li-14-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-14-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-14-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-14-1.jpg"></div></a></div>
		</div>
		<div id="content-15" class="box2">
			<div><div><a href="#"><img src="img/li-15-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-15-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-15-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-15-1.jpg"></div></a></div>
		</div>
		<div id="content-16" class="box2">
			<div><div><a href="#"><img src="img/li-16-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-16-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-16-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-16-1.jpg"></div></a></div>
		</div>
		<div id="content-17" class="box2">
			<div><div><a href="#"><img src="img/li-17-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-17-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-17-1.jpg"></div></a></div>
			<div><div><a href="#"><img src="img/li-17-1.jpg"></div></a></div>
		</div> -->
	</div> 
	<!-- end of .category-content -->
</div> 
<div class="full"><a href="#">채소 전체보기</a></div>


<div class="banner">
	<div class="banner-inner">
		<div class="banner-txt">
			<h2 class="lucky">장바구니 자랑하면 5천원의 행운이 매일!</h2>
			매일 20분께 드리는 적립금 혜택!
		</div>	
	</div>
</div>

<div class="product-list">
	<h2 class="title-goods">오늘의 신상품</h2>
	<div class="product-list-inner">
		<div class="box"><div><a href="#"><img src="img/salad1.png"></a></div>
			<div class="txt">
				<p><a href="#">[서동한우] Deep Dry Aging 채끝 200g(냉장)</a></p>
				<p><span class="orange">10% </span><span class="price">35,100원</span></p>
				<del>39,000원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/salad2.png"></a></div>
			<div class="txt">
				<p><a href="#">[리얼베리어] 익스트림 모이스처 립밤</a></p>
				<p><span class="orange">30% </span><span class="price">6,300원</span></p>
				<del>9,000원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/salad3.png"></a></div>
			<div class="txt">
				<p><a href="#">[올반] 구슬함박 스테이크 옐로우 치즈</a></p>
				<p><span class="orange">20% </span><span class="price">3,360원</span></p>
				<del>4,200원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/salad4.png"></a></div>
			<div class="txt">
				<p><a href="#">[펫츠그린] 동결건조 열빙어</a></p>
				<span class="price">9,000원</span>
			</div>
		</div>
	</div>
</div>

<div class="product-list">
	<h2 class="title-goods">지금 가장 핫한 상품</h2>
	<div class="product-list-inner">
		<div class="box"><div><a href="#"><img src="img/mara.png"></a></div>
			<div class="txt">
				<p><a href="#">[주전부리연구소] 어린 시절 쥐치포 200g</a></p>
				<p><span class="orange">20% </span><span class="price">7,120원</span></p>
				<del>8,900원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/pork.png"></a></div>
			<div class="txt">
				<p><a href="#">[프레시지] 백년가게 이화횟집 낙지볶음</a></p>
				<p><span class="orange">10% </span><span class="price">19,701원</span></p>
				<del>21,890원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/roll.png"></a></div>
			<div class="txt">
				<p><a href="#">홍제동 사랑의집 떡볶이</a></p>
				<p><span class="orange">25% </span><span class="price">4,050원</span></p>
				<del>5,400원</del>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/worktionary.png"></a></div>
			<div class="txt">
				<p><a href="#">[팔도] 비빔면5입</a></p>
				<del>4,500원</del>
			</div>
</div>

<div class="product-list">
	<h2 class="title-goods">마감세일</h2>
	<div class="product-list-inner">
		<div class="sale_coupon">+20% 쿠폰</div>
		<div class="box"><div><a href="#"><img src="img/goods01.jpg"></a></div>
		<div class="txt">
			<p><a href="#">[Kurly's] R15 통밀 식빵</a></p>
			<p><span class="orange">35% </span><span class="price">2,275원</span></p>
			<del>3,500원</del>
		</div>
	</div>
	<div class="box"><div><a href="#">
		<div class="sale_coupon">+20% 쿠폰</div>
		<img src="img/goods02.jpg"></a></div>
		<div class="txt">
			<p><a href="#">[은하수산] 노르웨이 생연어회 120g(냉장)</a></p>
			<p><span class="orange">35% </span><span class="price">6,825원</span></p>
			<del>10,500원</del>
		</div>
	</div>
	<div class="box"><div><a href="#">
			<div class="sale_coupon">다다익선 쿠폰</div>	
			
			<img src="img/goods03.jpg"></a></div>
			<div class="txt">
				<p><a href="#">[더오담] 맛좋은 찰순대 500g</a></p>
				<p><span class="orange">35% </span><span class="price">2,275원</span></p>
				<del>3,500원</del>
			</div>
		</div>
		<div class="box"><div><a href="#">
			<div class="sale_coupon">일일특가</div>	
			<img src="img/goods04.jpg"></a></div>
			<div class="txt">
				<p><a href="#">베트남 용과 3입팩</a></p>
				<p><span class="orange">30% </span><span class="price">6,930원</span></p>
				<del>9,900원</del>
			</div>
		</div>
	</div>
</div>

<div class="product-list">
	<h2 class="title-goods">늘 기분 좋은 가격</h2>
	<div class="product-list-inner">
		<div class="box"><div><a href="#"><img src="img/salad1.png"></a></div>
			<div class="txt">
				<p><a href="#">대저 토마토 2.5kg/박스</a></p>
				<span class="price">24,800원</span>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/salad2.png"></a></div>
			<div class="txt">
				<p><a href="#">[연세우유x마켓컬리] 전용목장우유</a></p>
				<span class="price">1,980원</span>
			</div>
		</div>
		<div class="box">
			<div class="event11">1+1</div>
				<div><a href="#"><img src="img/salad3.png"></a></div>
			<div class="txt">
				<p><a href="#">[종가집] 아침에on 국산콩 고소한 두부 반모 2종</a></p>
				<span class="price">2,200원</span>
			</div>
		</div>
		<div class="box"><div><a href="#"><img src="img/salad4.png"></a></div>
			<div class="txt">
				<p><a href="#">[KF365] 깐마늘 200g</a></p>
				<span class="price">2,000원</span>
			</div>
		</div>
	</div>
</div>

<div class="main-recipe">
	<h2 class="title-goods">컬리의 레시피</h2>
	<div class="main-recipe-inner">
		<div class="recipe-box">
			<div><a href="#"><img src="img/recipe_1.png"></a></div>
			<p>메밀 갈레트</p>
		</div>
		<div class="recipe-box">
			<div><a href="#"><img src="img/recipe_2.png"></a></div>
			<p>플랫 브레드 루꼴라 피자</p>
		</div>
		<div class="recipe-box">
			<div><a href="#"><img src="img/recipe_1.png"></a></div>
			<p>시금치 페스토 파스타</p>
		</div>
	</div>
</div>

<div class="insta">
	<h2 class="title-goods">인스타그램 고객 후기</h2>
	<ul class="insta-inner">
		<li class="insta-box"><img src="img/instaimg1.png"></li>
		<li class="insta-box"><img src="img/instaimg2.png"></li>
		<li class="insta-box"><img src="img/instaimg3.png"></li>
		<li class="insta-box"><img src="img/instaimg1.png"></li>
		<li class="insta-box"><img src="img/instaimg2.png"></li>
		<li class="insta-box"><img src="img/instaimg3.png"></li>
	</div>
</div>
<div class="bnr">
	<p class="review">더 많은 후기가 궁금하다면?</p><br>
	<b>@marketkurly_regram</b>
</div>

<div class="banner">
	<div class="banner-inner">
		<img src="img/banner.gif" id="foot-banner">
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
				<li><a href="https://www.youtube.com/embed/WEep7BcboMQ?rel=0&amp;showinfo=0&amp;wmode=opaque&amp;enablej" 
				onclick="window.open(this.href, 'pop', 'width=1330,height=660,scrollbars=yes');return false;">컬리소개영상</a></li>
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
				<img src="img/ico_instagram.png">
				<img src="img/ico_facebook.png">
				<img src="img/ico_blog.png">
				<img src="img/ico_naverpost.png">
				<img src="img/ico_youtube.png">
			</div>
		</div>
	</div>	<!-- end of .footer-inner -->

	<div class="footer-link">
		<dl class="foot">
			<dt><img src="img/logo_isms.png"></dt>
			<dd class="foot-txt">
				[인증범위]마켓컬리 쇼핑몰 서비스 개발.운영<br>
				[유효기간]2019.04.01~2022.03.31
			</dd>
		</dl>
		
		<dl class="foot">
			<dt><img src="img/logo_eprivacyplus.png"></dt>
			<dd class="foot-txt">
				개인정보보호 우수 웹사이트.<br>
				개인정보처리시스템인증(ePRIVACY PLUS)
			</dd>
		</dl>	

		<dl class="foot2">
			<dt><img src="img/logo_payments.png"></dt>
			<dd class="foot-txt2">
				고객님의 안전거래를 위해 현금 등으로 결제 시 저희 쇼핑몰에서 가입한<br>
				토스 페이먼츠 구매안전(에스크로)서비스를 이용하실 수 있습니다.
			</dd>
		</dl>	
	</div>
</footer>

<div class="top-button"><a href="#top"><img src="img/topbutton.png"></a></div>
</body>
</html>

