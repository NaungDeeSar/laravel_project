<!DOCTYPE html>
<html>
<head>
	<title>@yield('title');</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- 	header -->
	<div class="container-fluid bg-secondary  py-1">
		<div class="container">
        <span id="day" class="date"></span>
			
            
		</div>	
	</div>
	<header class="container-fluid py-1">
		<div class="container py-2">
			<div class="logo-bg">
				<a href="{{route('homepage')}}">
					<img src="img/logo.png" class="img-fluid">
				</a>
				<span class="text-danger ml-1">Info</span> <span class="text-muted"> -
				Channel</span>
			</div>

		</div>		

	</header>
	<!-- header end -->
	<!-- navbar start -->
	<nav class="navbar navbar-expand-lg  navbar-light py-3 menu">
		<div class="container">

			<button class="navbar-toggler" data-toggle="collapse"  onclick="openNav()">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="home.html" class="title">
				<img src="img/info2.png">
			</a>
			<i class="fas fa-search menu_search"></i>
			<div class="search-box">
				<div class="input-group">
					<input type="text" class="search_text my-3 ml-4" placeholder="search">
					<span class="input-group-btn ">
						<button class="btn btn-default" type="button" value="search">
							<i class="fas fa-search"></i>
						</button>
					</span>
				</div>
			</div>	

			<div class="sidenav" id="mySidenav">
				<a href="#" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="{{route('homepage')}}">ပင်မစာမျက်နှာ</a>
				<a href="{{route('localpage')}}">ပြည်တွင်းသတင်း</a>
				<a href="{{route('internetionalpage')}}">နိုင်ငံတကာ</a>
				<a href="{{route('sportspage')}}">အားကစား</a>
				<a href="{{route('entertainmentpage')}}">ဖျော်ဖြေရေး</a>
				<a href="{{route('knowledgepage')}}" class="nav-link">ဗဟုသုတအဖြာဖြာ</a>

			</div>
	
			<div class="collapse navbar-collapse">

				<ul class="navbar-nav font-weight-bold">

					<li class="nav-item active">
                    <a href="{{route('homepage')}}" class="nav-link">ပင်မစာမျက်နှာ</a>
					</li>
					<li class="nav-item">
						<a href="{{route('localpage')}}" class="nav-link">ပြည်တွင်းသတင်း</a>
					</li>

					<li class="nav-item">
						<a href="{{route('internetionalpage')}}" class="nav-link">နိုင်ငံတကာ</a>
					</li>					
					
					<li class="nav-item">
						<a href="{{route('sportspage')}}" class="nav-link">အားကစား</a>
					</li>
					<li class="nav-item">
						<a href="{{route('entertainmentpage')}}" class="nav-link">ဖျော်ဖြေရေး</a>
					</li>
					<li class="nav-item">
						<a href="{{route('knowledgepage')}}" class="nav-link">ဗဟုသုတအဖြာဖြာ</a>
					</li>
							

				</ul>
				<ul class="navbar-nav ml-auto search_btn">

					<li class="nav-item">
						<i class="fas fa-search"></i>
						<div class="search-box">
							<div class="input-group">
								<input type="text" class="search_text my-3 ml-4" placeholder="search">
								<span class="input-group-btn ">
									<button class="btn btn-default" type="button" value="search">
										<i class="fas fa-search"></i>
									</button>
								</span>
							</div>
						</div>

					</li>


				</ul>

			</div>
		</div>
	</nav>
	<!-- 	navbar end -->

	<!-- content start -->
@yield('content');
	<footer class="container-fluid py-2">
		<div class="container">
			<div class="row">
				<div class="col-12  col-md-12 col-lg-4">
					<h5 class="my-3" style="border-bottom: 2px groove #f21dc1;width: 60px">About</h5>

					<img src="img/info1.png" class="img-fluid py-2">
					<p class="text-justify" > 
					Info channel is a online  news platform in Myanmar.
					Info-channel brings you myanmar news,international news,sports,entertainment 
					and Knowledge and features.
					Visit us on Facebook Page.
				</p>
					<ul class="footer_nav my-4">
						<li>
							<a href="" class="text-decoration-none wrapper" title="Facebook">
								<span class="fa-stack fa-1x">
									<i class="fas fa-circle fa-stack-2x"></i>
									<i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
								</span>

							</a>
						</li>
						<li>
							<a href="" class="text-decoration-none wrapper" title="instagram">
								<span class="fa-stack fa-1x">
									<i class="fas fa-circle fa-stack-2x"></i>

									<i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
								</span>

							</a>
						</li>					

						<li>
							<a href="#" class="text-decoration-none wrapper" title="twitter">
								<span class="fa-stack fa-1x">
									<i class="fas fa-circle fa-stack-2x"></i>
									<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
								</span>

							</a>
						</li>
						<li>
							<a href="" class="text-decoration-none wrapper" title="email">
								<span class="fa-stack fa-1x">
									<i class="fas fa-circle fa-stack-2x"></i>

									<i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
								</span>

							</a>
						</li>


					</ul>
				</div>
				<div class="col-12  col-md-12 col-lg-4">
					<h5 class="my-3" style="border-bottom: 2px groove #f21dc1;width: 120px">Latest News</h5>

					<div class="row no-gutters">
						<div class="col-3 col-md-2 col-lg-4 latest_img">
							<img src="img/international/img.jpg" class="img-fluid" alt="...">
						</div>
						<div class="col-9 col-md-10 col-lg-8">
							<a href="news_detail.html" style="text-decoration: none;" class="text-dark">
								<h6 class="lasted-title">
					ဗိုင်းရပ်စ်ကူးစက်ခံရပေမယ့် ထရမ့်မောင်နှံ ကျန်းမာရေးကောင်းမွန်နေတယ်လို့ ဆရာဝန် ပြော
							</h6>
							</a>
							<p><small class="text-muted">
								<i class="far fa-calendar-check"></i>
							September 29,2020</small></p>
						</div>
						<div class="col-3 col-md-2 col-lg-4 latest_img">
							<img src="img/entertainment/img.jpg" class="img-fluid" alt="...">
						</div>
						<div class="col-9 col-md-10 col-lg-8">
							<a href="news_detail.html" style="text-decoration: none;" class="text-dark">
								<h6 class="lasted-title">
								ဒိုင်(၄) ယောက်လုံးသာ လှည့်ကြည့်ခဲ့မယ်ကိုရင် ကို R ကြီး Team ကို သွားမိမှာလို့ ဆိုလာတဲ့ G
							</h6>
							</a>
							<p><small class="text-muted">
								<i class="far fa-calendar-check"></i>
							September 29,2020</small></p>
						</div>
						<div class="col-3 col-md-2 col-lg-4 latest_img">
							<img src="img/sports/img1.png" class="img-fluid" alt="...">
						</div>
						<div class="col-9 col-md-10 col-lg-8">
							<a href="news_detail.html" style="text-decoration: none;" class="text-dark">
								<h6 class="lasted-title">
							ဂိုးပြတ်ရှုံးနိမ့်မှုနဲ့အတူ ဆိုးရွားလှတဲ့ မှတ်တမ်းဆိုးတွေကိုပါ ပိုင်ဆိုင်ခဲ့ရတဲ့ အာဆင်နယ်
							</h6>
							</a>
							<p><small class="text-muted">
								<i class="far fa-calendar-check"></i>
							September 29,2020</small></p>
						</div>

					</div>


				</div>
				<div class="col-12  col-md-12 col-lg-4">
					<h5 class="my-3" style="border-bottom: 2px groove #f21dc1;width: 110px">Contact Us</h5>


					<p class="text-muted ml-2">
					<label class="text-danger font-weight-bold">Address: </label> New Mingalar Market, Yangon
						
						 <br>
						 <label class="text-danger font-weight-bold">	Tel:  </label> 
						 (+95)2593xxxxx
						
						 <br>
					<label class="text-danger font-weight-bold">	Email:  </label> 
						infochannel2020@info.com
						
						 <br>

						 
					</p>

				</div>
			</div>

		</div>
		<hr>
		<div class="footer_bottom">

			<h6 class="text-muted text-center py-2">

				@2020 Info-Channel

			</h6>

		</div>

	</footer>

		<a href="#" class="back-to-top">
  <i class="far fa-arrow-alt-circle-up"></i>
</a>

	


	

 


	<!--===============================================================-->	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="WBwsOahe"></script>

	<!--================================================================-->	
</body>
</html>