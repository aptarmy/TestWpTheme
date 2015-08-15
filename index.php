	<?php  get_header(); ?>
	<link href="<?php echo get_template_directory_uri() ?>/css/index.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/css/index-tablet.css" rel="stylesheet" media="screen and (max-width:1270px)"> <!-- style top nav on tablet -->
	<link href="<?php echo get_template_directory_uri() ?>/css/index-desktop.css" rel="stylesheet" media="screen and (min-width:1271px)"> <!-- style top nav on tablet -->
	<link href="<?php echo get_template_directory_uri() ?>/css/extra-grid.css" rel="stylesheet"><!-- Fix main content grid -->
</head>
<body>
<!--------------------------------------------------------------------------------------------------------------->
<div class='container-fluid'>	<div class='row'>
	<!-- Left column -->
	<div class='leftCol col-md-3 hidden-sm hidden-xs'> <!-- hide column when Extra small : 768px -->
		<img class='logo' src='<?php echo get_template_directory_uri() ?>/img/APT-news-logo.jpg' style='max-height: 168px;'>
		<aside class='barLeft'>
			<div class='menuLeftWrapper'>
				<div class="menuLeft">
					<ul>
					<li><a href='#'> HOT - a week ago</a>
						<ul>
						<li><a href='#'> จีน VS อเมริกา VS รัสเซีย ซ้อมรบถี่ยิบ หรือนี่จะคือ จุดเริ่มต้นของ สงครามโลกครั้งที่ 3</a></li>
						<li><a href='#'> ตำรวจยิงประชาชนตายวันละ 2 คน อเมริกา ณ.วันนี้ กลายเป็นบ้านป่าเมืองเถื่อนไปแล้ว </a></li>
						<li><a href='#'> ทักษิณเพ้อ... คิดว่าตัวเองเป็นพระเจ้าตาก กลับชาติมาเกิด</a></li>
						</ul>
					</li>
					<li><a href='#'> HOT - a month ago</a>
						<ul>
						<li><a href='#'> บันเทิง (Entertain) 1</a></li>
						<li><a href='#'> บันเทิง (Entertain) 2</a></li>
						<li><a href='#'> บันเทิง (Entertain) 2</a></li>
						<li><a href='#'> บันเทิง (Entertain) 2</a></li>
						</ul>
					</li>
					<li><a href='#'> HOT - a year ago</a>
						<ul>
						<li><a href='#'> กีฬา (Sport) 1</a></li>
						<li><a href='#'> กีฬา (Sport) 2</a></li>
						<li><a href='#'> กีฬา (Sport) 3</a></li>
						</ul>
					</li>
					<li><a href='#'> HOT - forever</a>
						<ul>
						<li><a href='#'> ต่างประเทศ (Foreign) 1</a></li>
						<li><a href='#'> ต่างประเทศ (Foreign) 2</a></li>
						<li><a href='#'> ต่างประเทศ (Foreign) 3</a></li>
						<li><a href='#'> ต่างประเทศ (Foreign) 4</a></li>
						<li><a href='#'> ต่างประเทศ (Foreign) 5</a></li>
						</ul>
					</li>
					</ul>
				</div>
			</div>
			<div class='adsWidget'><img src='<?php echo get_template_directory_uri() ?>/img/ads-300x250.jpg'></div>
		</aside>
	</div>
	<!-- Right column -->
	<div class='rightCol col-md-9'>
		<!-- Header -->
		<header>
			<img class='pageIcon' src='<?php echo get_template_directory_uri() ?>/icons/green-circle.png'>
			<div class='pageTitle'><h1>APT News - Wordpress Theme</h1></div>
			<nav><ul>
				<li><a href='#page/ring'><img class='menu-icon' src='<?php echo get_template_directory_uri() ?>/icons/help.png'><span class="menu-caption">Help</span></a></li>
				<li><a href='#page/free'><img class='menu-icon' src='<?php echo get_template_directory_uri() ?>/icons/1.ico'><span class="menu-caption">Shopping</span></a></li>
				<li><a href='#page/organic'><img class='menu-icon' src='<?php echo get_template_directory_uri() ?>/icons/about.png'><span class="menu-caption">Contact</span></a></li>
				<li><a href='#home'><img class='menu-icon' src='<?php echo get_template_directory_uri() ?>/icons/home.png'><span class="menu-caption">Home</span></a></li>
			</ul></nav>
			<div class='collapseNav'><span class='collapseBtn glyphicon glyphicon-menu-hamburger'></span><div class='collapseShadow'></div></div>
			<div class='searchWrapper'><input type='text'></div>
		</header>
		<!-- Running Text -->
		<div class='runningText'><marquee direction="left"> ข่าวด่วนจี๋!!! ... ตกตะลึง ... พบตัวดุ๊กดิ๊กที่ป่าชายเลนสถานตากอากาศบางปู ลักษณะคล้ายปลาตีน แต่ตัวใหญ่เท่าช้าง คนแห่กันมาดู ทำเอารถติดยาวววว... ไปจนถึงซีคอนสแควร์ </marquee></div>
		<!-- Slider & RightMenu -->
		<div class='mainArea'>
			<div class='row'>
				<!-- column slider and content -->
				<div class='col-md-7-in-9'>
					<!-- Margin-top 10px -->
					<div class='sliderWrapper'><!-- Height 545px -->
						<div class='sliderImg' style='background-image:url(<?php echo get_template_directory_uri() ?>/img/slider/img-1.jpg)'><!-- Height 435px -->
							<div class='sliderTitle'><a href='post.html' target='_blank'>Title of Post-1</a></div>
						</div>
						<!-- Margin top 10px -->
						<div class='sliderThumbWrapper'><!-- Height 100px, Padding 20px 0px -->
							<!-- Each SliderThumbBox height 80px, width 20% -->
							<!-- Each sliderThumb height 100%, margin 0 5px; -->
							<div class='sliderThumbBox'><div class='sliderThumb' style='background-image: url(<?php echo get_template_directory_uri() ?>/img/slider/img-1.jpg)' data-title='Title of Post-1'></div></div>
							<div class='sliderThumbBox'><div class='sliderThumb' style='background-image: url(<?php echo get_template_directory_uri() ?>/img/slider/img-2.jpg)' data-title='Title of Post-2'></div></div>
							<div class='sliderThumbBox'><div class='sliderThumb' style='background-image: url(<?php echo get_template_directory_uri() ?>/img/slider/img-3.jpg)' data-title='Title of Post-3'></div></div>
							<div class='sliderThumbBox'><div class='sliderThumb' style='background-image: url(<?php echo get_template_directory_uri() ?>/img/slider/img-4.jpg)' data-title='Title of Post-4'></div></div>
							<div class='sliderThumbBox'><div class='sliderThumb' style='background-image: url(<?php echo get_template_directory_uri() ?>/img/slider/img-1.jpg)' data-title='Title of Post-5'></div></div>
						</div>
					</div>
				</div>
				<!-- Bar Right -->
				<aside class='col-md-2-in-9'>
					<div class='menuRight'><ul>
						<li><a href="category.html">World News</a></li>
						<li><a href="category.html">Computer & Tablet & SmartPhone</a></li>
						<li><a href="category.html">Life Style</a></li>
						<li><a href="category.html">Entertain & Movie & TV online</a></li>
						<li><a href="category.html">Miracle</a></li>
						<li><a href="category.html">Sport & Swimming & Running</a></li>
						<li><a href="category.html">Vehicles</a></li>
						<li><a href="category.html">Miracle</a></li>
						<li><a href="category.html">Sport</a></li>
						<li><a href="category.html">Tecnology & Science</a></li>
						<li><a href="category.html">Mobile</a></li>
						<li><a href="category.html">Vehicles</a></li>
						<li><a href="category.html">Miracle</a></li>
						<li><a href="category.html">Sport</a></li>
						<li><a href="category.html">Travel</a></li>
						<li><a href="category.html">Entertain</a></li>
						<li><a href="category.html">World News</a></li>
					</ul></div>
				</aside>
			</div>
		</div>
		<!-- Content under slider -->
		<div class='pageSlide'>
			<div class='page' style='background-color:whitesmoke'>
				<a href='page/free' style='color:gray;text-decoration:none;text-align:center;'><h2 style='font-size: 100px;'>Free</h2></a>
				<p style='font-size:50px;text-align:center;color:darkgray'>content content</p>
			</div>
			<div class='page' style='background-color:whitesmoke'>
				<a href='page/star' style='color:gray;text-decoration:none;text-align:center;'><h2 style='font-size: 100px;'>Star</h2></a>
				<p style='font-size:50px;text-align:center;color:darkgray'>content content</p>
			</div>
			<div class='page' style='background-color:whitesmoke'>
				<a href='page/organic' style='color:gray;text-decoration:none;text-align:center;'><h2 style='font-size: 100px;'>100% Organic</h2></a>
				<p style='font-size:50px;text-align:center;color:darkgray'>content content</p>
			</div>
			<div class='page' style='background-color:whitesmoke'>
				<a href='page/ring' style='color:gray;text-decoration:none;text-align:center;'><h2 style='font-size: 100px;'>Ring</h2></a>
				<p style='font-size:50px;text-align:center;color:darkgray'>content content</p>
			</div>
			<div class='page' style='background-color:whitesmoke'>
				<a href='page/mail' style='color:gray;text-decoration:none;text-align:center;'><h2 style='font-size: 100px;'>Mail</h2></a>
				<p style='font-size:50px;text-align:center;color:darkgray'>content content</p>
			</div>
		</div>
	</div>
</div> </div>
<footer>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-4'><div class='widget'>Widget</div></div>
			<div class='col-md-4'><div class='widget'>Widget</div></div>
			<div class='col-md-4'><div class='widget'>Widget</div></div>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
</body>
</html>
