@extends('master')
@section('title',"Inf-channel")

@section('content')
<!-- content start -->
<div class="container-fluid  py-5 content">
		<div class="container breakingNews">
			<div class="row">
				<div class="col-12 col-md-12">
					<div class="d-flex justify-content-between align-items-center bg-white" style="border:1px solid #f21dc1">
						<div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center py-2 text-white px-1 news" style="background-color:#f21dc1">
							<span class="align-items-center" >&nbsp;BreakingNews</span>
						</div>
						<marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

							<a href="news_detail.html">အိမ်ထောင်စုစာရင်းပြုလုပ်ရာ၌ ပိုင်ဆိုင်မှုစာချုပ်တောင်းခံနေ၍ ပြည်သူ့အချို့အခက်တွေ့နေဟုဆို </a> 
							<span class="dot"></span>
							<a href="news_detail.html">အမျိုးသားတိုးတက်ရေးပါတီက သံဃာတော်များ မဲပေးပိုင်ခွင့် ရှိ၊ မရှိ လွှတ်တော်တွင် မေးခွန်းထုတ်မည်ဆို </a> <span class="dot"></span> 
							<a href="news_detail.html">အသက် 30 ပြည့်မှာလို့ မယုံနိုင်လောက်အောင်ဖြစ်ရတဲ့ တောင်ကိုရီးယား နာမည်ကျော် Idol များ</a>
						</marquee>

					</div>
				</div>
			</div>
		</div>
		<div class="container my-3">	 
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">	 						
							<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
								
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="img/international/img.jpg" class="d-block w-100" alt="...">
										<div class="img-overlay"></div>
										<div class="carousel-caption">
											<a href="international_detail.html" style="text-decoration: none;color: #fff;">
												<h4 class="py-2" style="background:#F21DC1;">ဗိုင်းရပ်စ်ကူးစက်ခံရပေမယ့် ထရမ့်မောင်နှံ ကျန်းမာရေးကောင်းမွန်နေတယ်လို့ ဆရာဝန် ပြော</h4>
											</a>
											<h6 class="my-3">
											<i class="far fa-clock"></i>7th Oct,2020 <i class="fas fa-user-cog"></i> Info-Channel</h6>
										</div>
									</div>
									<div class="carousel-item">
										<img src="img/international/img1.jpg" class="d-block w-100" alt="image1">
										<div class="img-overlay"></div>
										<div class="carousel-caption">
											<a href="news_detail.html" style="text-decoration: none;color: #fff;">
												<h4 class="bg-success py-2">ကိုဗစ်ပိုးက သွေးအချိုဓာတ်ကို ပိုတက်စေတဲ့အတွက် ဆီးချိုရောဂါအခံရှိသူတွေ သေဆုံးမှုများနေခြင်းဖြစ်</h4>
											</a>
											<h6 class="my-3">
											<i class="far fa-clock"></i>6th Oct,2020 <i class="fas fa-user-cog"></i> Info-Channel</h6>
										</div>
									</div>
									<div class="carousel-item">
										<img src="img/international/img2.jpg" class="d-block w-100" alt="...">
										<div class="img-overlay"></div>
										<div class="carousel-caption">
											<a href="international_detail.html" style="text-decoration: none;color: #fff;">
												<h4 class="bg-warning py-2">ထရမ့်နဲ့ ဘိုင်ဒန် ပထမဆုံးအကြိမ် စကားစစ်ထိုး</h4>
											</a>
											<h6 class="my-3">
											<i class="far fa-clock"></i>5th Oct,2020 <i class="fas fa-user-cog"></i> Info-Channel</h6>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<!-- slider end -->
						<div class="col-lg-12 col-md-12 col-12 my-4">

							<div class="row no-gutters">
								<div class="col-4 col-md-3">
									<a href="#">
										<img src="img/international/img3.jpg" class="img-fluid" alt="...">
									</a>

								</div>
								<div class="col-8 col-md-9 py-2 post_content">      
									<h5 class="text-dark  ml-3">
										<a href="international_detail.html" class="post_title">
											ထရမ့်နဲ့ ဘိုင်ဒန်တို့ အပြိုင်ကြဲကြတဲ့ အမေရိကန်သမ္မတလောင်း စကားစစ်ထိုး
										</a>
									</h5>
									<p class="ml-3 p9">ရီပတ်ဘလီကန်ဘက်က လက်ရှိ အမေရိကန်သမ္မတ ဒေါ်နယ်ထရမ့်ဟာ ဒီမိုကရက်ဘက်က သမ္မတလောင်း ဂျိုးဘိုင်ဒန်ကို စကားစစ်ထိုးရာမှာ ကိုရိုနာဗိုင်းရပ်စ်ကိစ္စ၊ စီးပွားရေးကိစ္စနဲ့ လူမျိုးရေးနဲ့ အကြမ်းဖက် ဆန္ဒပြမှုဆိုင်ရာကိစ္စတွေက...</p>
									<p class="ml-3"><small class="text-muted">
										<i class="far fa-calendar-check"></i>
									September 29,2020</small></p>

								</div>
								<div class="col-4 col-md-3">
									<a href="#">
										<img src="img/sports/img.jpg" class="img-fluid" alt="...">
									</a>

								</div>
								<div class="col-8 col-md-9 py-2 post_content">      
									<h5 class="text-dark  ml-3">
										<a href="sports_detail.html" class="post_title">ယူနိုက်တက်ကွင်းလယ်လူပါရဲရားကို ခေါ်ယူဖို့ လာဇီယို သဘောတူညီမှုရယူနိုင်ခဲ့
										</a>
									</h5>
									<p class="ml-3 p9">မန်ချက်စတာယူနိုက်တက်အသင်းရဲ့ ကွင်းလယ်လူပါရဲရားဟာ လာဇီယိုအသင်းကို ပြောင်းရွှေ့ဖို့ သဘောတူညီမှုရရှိသွားခဲ့ပြီဖြစ်ကြောင်း သိရပါတယ်။ တစ်ရာသီအငှားစာချုပ်နဲ့ ကနဦးပြောင်းရွှေ့မှဖြစ်ပြီး ယူရို ၁၅သန်းနဲ့ အပြီးသတ်ခေါ်ယူခွင့်ပါရှိမယ်လို့ သိရကာ ဒီသတင်းကို နာမည်ကြီးသတင်းထောက် Fabrizio Romano ကိုယ်တိုင်က...</p>
									<p class="ml-3"><small class="text-muted">
										<i class="far fa-calendar-check"></i>
									September 29,2020</small></p>

								</div>
								<div class="col-4 col-md-3">
									<a href="#">
										<img src="img/entertainment/img.jpg" class="img-fluid" alt="...">
									</a>

								</div>
								<div class="col-8 col-md-9 py-2 post_content">      
									<h5 class="text-dark  ml-3">
										<a href="entertainment_detail.html" class="post_title">

										ဒိုင်(၄) ယောက်လုံးသာ လှည့်ကြည့်ခဲ့မယ်ကိုရင် ကို R ကြီး Team ကို သွားမိမှာလို့ ဆိုလာတဲ့ G
										</a>
									</h5>
									<p class="ml-3 p9">The Voice Myanmar (Season-3) မှာ "It Will Rain" သီချင်းနဲ့ သီချင်းဆိုဝင်ပြိုင်ခဲ့တဲ့ G ဟာ အကဲဖြတ်ဒိုင်လူကြီး နီနီခင်ဇော်ရဲ့ လှည့်ကြည့်ခြင်းကို ခံခဲ့ရပါတယ်။သီချင်းဆို ပြိုင်ပွဲမဝင်ခင်အထိဒိုင် (၄)ဦးစလုံးသာ လှည့်ကြည့်ခဲ့ မယ်ဆိုရင် အဆိုတော် Rဇာနည် ရဲ့ Team ကို သွားဖို့ ဆုံးဖြတ်ခဲ့တဲ့ G တစ်ယောက်  ...</p>
									<p class="ml-3"><small class="text-muted">
										<i class="far fa-calendar-check"></i>
									September 29,2020</small></p>

								</div>
								<div class="col-4 col-md-3">
									<a href="#">
										<img src="img/knowledge/img.png" class="img-fluid" alt="...">
									</a>

								</div>
								<div class="col-8 col-md-9 py-2 post_content">      
									<h5 class="text-dark  ml-3">
										<a href="news_detail.html" class="post_title">
											ကျောင်းတွေပြန်မဖွင့်ဖို့ အမေစုကို မေတ္တာရပ်ခံလိုက်တဲ့ ကျောင်းဆရာမလေးရေးတဲ့စာ

										</a>
									</h5>
									<p class="ml-3 p9">COVID-19 ကာကွယ်ဆေးပေါ်သည့်အချိန်အထိကျောင်းတွေက အမြဲပိတ်ထားလို့လည်းမရဘူး။ ကျောင်းတွေပြန်ဖွင့်ရမယ် ဖွင့်တဲ့အခါကျရင် ကလေးတွေကို ခွာခွာထားဖို့ဆိုရင် ဒီနိုင်ငံက ကျောင်းတွေက တစ်တန်းတစ်တန်းမှာဆိုရင် ကျောင်းသူကျောင်းသားတွေများတယ်...</p>
									<p class="ml-3"><small class="text-muted">
										<i class="far fa-calendar-check"></i>
									September 29,2020</small></p>

								</div>




							</div>

						
						</div>

					</div>
					<button class="btn btn-outline-info my-2">View More</button>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12 side_right">
					<div class="recent_post">

						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">

								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
									<i class="far fa-clock"></i>
									RECENT
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
									<i class="fas fa-heart"></i>
									POPULAR
								</a>
							</li>

						</ul>

						<div class="tab-content">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<table class="table">
									<tr>
										<td>
									<img src="img/local/img.png" class="img-fluid"></td>
										<td>
											<a href="local.html" class="text-danger">ပြည်တွင်းသတင်း </a>
											<a href="news_detail.html">
												<p class="text-muted">
											ဇူလိုင်၂၁ ရက်တွင် အခြေခံပညာအထက်တန်းအဆင့်မှစတင်ပြီး ကျောင်းများပြန်လည်ဖွင့်လှစ်မည်</p>
											</a>
											
										</td>
									</tr>
									<tr>
										<td><img src="img/local/img1.jpg" class="img-fluid"></td>
										<td>
											<a href="local.html" class="text-danger">ပြည်တွင်းသတင်း </a>
											<a href="news_detail.html">
												<p class="text-muted">
											အင်းလျားလိတ် ကိုဗစ်စင်တာမှာ အောက်စီဂျင်ကုတင်တွေပါ ပြင်ဆင်ထား၊ အောက်တိုဘာ ၉ ရက်မှာ လူနာစတင်လက်ခံမည်</p>
											</a>
										</td>
									</tr>
									<tr>
										<td><img src="img/portfolio-3.jpg" class="img-fluid"></td>
										<td>
											<a href="international.html" class="text-danger">နိုင်ငံတကာ </a>
											<a href="news_detail.html">
												<p class="text-muted">
											ကိုဗစ်ကူးစက်ခံရတဲ့ ရက်သတ္တပတ်အတွင်း ဒေါ်နယ်ထရန့်ရဲ့ သွားလာလှုပ်ရှားမှုမျာ</p>
											</a>
										</td>
									</tr>
									<tr>
										<td><img src="img/sports/img1.png" class="img-fluid"></td>
										<td>
											<a href="sports.html" class="text-danger">အားကစားသတင်း </a>
											<a href="news_detail.html">
												<p class="text-muted">
											ဂိုးပြတ်ရှုံးနိမ့်မှုနဲ့အတူ ဆိုးရွားလှတဲ့ မှတ်တမ်းဆိုးတွေကိုပါ ပိုင်ဆိုင်ခဲ့ရတဲ့ အာဆင်နယ်</p>
											</a>
										</td>
									</tr>
								</table>	

							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<table class="table">
									<tr>
										<td><img src="img/sports/img2.jpg" class="img-fluid"></td>
										<td>
											<a href="sports.html" class="text-danger">အားကစားသတင်း</a>
											<a href="sports_detail.html">
												<p class="text-muted">
											ဘာကာအတွက် မက်ဆီက အသွေးအသားထဲကပါ ကစားပေးနေတယ်လို့ ရောဘတ်တိုဆို</p>
											</a>
										</td>
									</tr>
									<tr>
										<td><img src="img/local/img2.jpg" class="img-fluid"></td>
										<td>
											<a href="local.html" class="text-danger">ပြည်တွင်းသတင်း</a>
											<a href="news_detail.html">
												<p class="text-muted">
											Asia Song Festival 2020 ဂီတဖျော်ဖြေပွဲအတွက် ကိုရီးယားကိုသွားတော့မယ့် Project K အဖွဲ့</p>
											</a>
										</td>
									</tr>
									<tr>
										<td><img src="img/international/img.jpg" class="img-fluid"></td>
										<td>
											<a href="international.html" class="text-danger">နိုင်ငံတကာသတင်း</a>
											<a href="news_detail.html">
												<p class="text-muted">
											ဗိုင်းရပ်စ်ကူးစက်ခံရပေမယ့် ထရမ့်မောင်နှံ ကျန်းမာရေးကောင်းမွန်နေတယ်လို့ ဆရာဝန် ပြော</p>
											</a>
										</td>
									</tr>
									<tr>
										<td><img src="img/sports/img3.jpg" class="img-fluid"></td>
										<td>
											<a href="sports.html" class="text-danger">အားကစားသတင်း</a>
											<a href="news_detail.html">
												<p class="text-muted">
											ဘာစီလိုနာက လမ်းကြောင်းမှန်ပေါ် ရောက်နေပြီဆိုတဲ့ ရော်နယ်ကိုးမန်း</p>
											</a>
										</td>
									</tr>
								</table>


							</div>

						</div>

					</div>




					<div class="category_right my-3">
						<h6 class="text-dark">Categories</h6>
						<hr>
						<a href="local.html">ပြည်တွင်းသတင်း</a> 
						<br>
						<hr>
						<a href="international.html">နိုင်ငံတကာသတင်း</a> 
						<br>
						<hr>
						<a href="sports.html">အားကစားသတင်း</a>
						<hr>
						<a href="entertainment.html">ဖျော်ဖြေရေး</a> 
						<hr>
						<a href="knowledge.html">ဗဟုသုတအဖြာဖြာ</a>	


					</div>
					<!-- follow -->
					<div class="category_right my-3">
						<h6 class="text-dark">Follow Us</h6>
						<hr>
						<div class="fb-page" data-href="https://www.facebook.com/Info-Channel-109463740923509" data-tabs="timeline" data-width="300" data-height="210" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Info-Channel-109463740923509" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Info-Channel-109463740923509">Info-Channel</a></blockquote></div>
						
					</div>


				</div>


			</div>
			<!-- row end -->

		</div>
	</div>

@endsection