@extends('master')
@section('title',"Internetional News")

@section('content')

<!-- content start -->
<div class="container-fluid  py-5 content">
		<div class="container breakingNews">
			<div class="row">
				<div class="col-8 col-md-6 col-lg-3">
					<div class="d-flex justify-content-between align-items-center bg-white" >
						<div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center py-1 text-white px-1 news bg-danger" style="font-size: 20px;font-family: Arial;">
							<span class="align-items-center" >&nbsp;Category</span>
						</div>
						<span class="ml-3">နိုင်ငံတကာသတင်း</span>
						
						
					</div>
				</div>
			</div>
		</div>
		<div class="container my-3">	 
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 blog"> 						
							<a href="#">
								<img src="img/international/img.jpg" class="img-fluid">
							</a>
							<label class="bg-white text-muted">
								<a href="international_detail.html" class="">
								ဗိုင်းရပ်စ်ကူးစက်ခံရပေမယ့် ထရမ့်မောင်နှံ ကျန်းမာရေးကောင်းမွန်နေတယ်လို့ ဆရာဝန် ပြော</a>

								<p class="text-muted my-2">အမေရိကန် သမ္မတ ဒေါ်နယ်ထရမ့်နဲ့ သမ္မတ ကတော် မလာနီယာ ထရမ့်တို့နှစ်ဦး ကိုရိုနာဗိုင်းရပ်စ် ကူးစက်ခံထားရပြီး လက်ရှိမှာ ကွာရန်တင်း ဝင်ကာ အားလုံးနဲ့ သီးခြားခွဲနေနေတယ်လို့ သမ္မတ ထရမ့်က ပြောပါတယ်။

								.....</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>5th Oct,2020 By Info-Channel</h6>
							</label>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog">
							<a href="#">
								<img src="img/international/img5.jpg" class="img-fluid">
							</a>
							
							<label class="bg-white">
								<a href="international_detail.html" class="">
								မလေးရှားမှာ COVID-19 ကူးစက်မှု နေ့အလိုက်အများဆုံး စံချိန်သစ်တင်
							</a>

								<p class="text-muted my-2">အရှေ့တောင်အာရှမှ မလေးရှားနိုင်ငံမှာ ယနေ့ (အောက်တိုဘာ ၂ ရက်) ထုတ်ပြန်ချက်အရ CVID-19 အတည်ပြုလူနာ ၂၈၇ ဦး တိုးလာခဲ့ပြီး ကပ်ရောဂါ စတင်ဖြစ်ပွားချိန်မှစပြီး နေ့အလိုက်ကူးစက်မှု အမြင့်ဆုံးအဖြစ် စံချိန်သစ်တင်ခဲ့ကြောင်း သိရပါတယ်။ကူးစက်မှုအားလုံးဟာ ပြည်တွင်းကူးစက်မှုများဖြစ်ပြီး..
								</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>5th Oct,2020 By Info-Channel</h6>
							</label>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog py-2">
							<img src="img/international/img4.jpg" class="img-fluid">
							<label class="bg-white text-muted">
								<a href="international_detail.html" class="">
								ကမ္ဘာတစ်ဝန် ကိုဗစ်ကူးစက်ခံရသူ ၉ လအတွင်း ၃၄ သန်းကျော်လွန်ပြီဖြစ်
								</a>

								<p class="text-muted my-2">ကမ္ဘာတစ်ဝန်း COVID-19 ကူးစက်ခံရသူ အရေအတွက်ဟာ စက်တင်ဘာ ၃၀ ရက် ညဥ့်နက်ပိုင်းမှာ ၃၄ သန်း ကျော်လွန်လာခဲ့ကြောင်း ကမ္ဘာ့နိုင်ငံအသီးသီးရဲ့ COVID-19 ဖြစ်ပွားမှုအခြေအနေ ကိန်းဂဏန်းတွေကို အချိန်နဲ့တစ်ပြေးညီ ဖော်ပြနေတဲ့ Worldometers ဝက်ဘ်ဆိုက်မှာ ဖော်ပြထားတာ တွေ့ရပါတယ်....</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>4th Oct,2020 By Info-Channel</h6>
							</label>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog py-2">
							<img src="img/international/img6.jpg" class="img-fluid">
							<label class="bg-white">
								<a href="international_detail.html" class="">နိုင်ငံတကာအာကာသစခန်းမှာ ပုံမှန်မဟုတ်တဲ့ လေယိုစိမ့်မှု ဖြစ်ပေါ်</a>

								<p class="text-muted my-2">
									နိုင်ငံတကာအာကာသစခန်း (International Space Station - ISS) ရဲ့ အခန်းထဲမှာ လေယိုစိမ့်မှုတစ်ခု တွေ့ရှိရကြောင်း ရုရှားနိုင်ငံက စက်တင်ဘာ ၂၉ ရက်နေ့မှာ ပြောကြားခဲ့ပါတယ်။
								ISS မှာ ယခု စစ်ဆေးတွေ့ရှိရတဲ့ လေယိုစိမ့်ဆုံးရှုံးမှုဟာ မျှော်မှန်းတွက်ချက်ထားထက် ပိုမိုကျော်လွန်ကြောင်း အကြီးတန်း အာကာသဆိုင်ရာ တာဝန်ရှိသူတစ်ဦးက ဆိုပါတယ်...
							</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>4th Oct,2020 By Info-Channel</h6>
							</label>

						</div>

					
					</div>
					<button class="btn btn-outline-info text-center">View More</button>
					
				</div>
				
				<div class="col-lg-4 col-md-12 col-sm-12 side_right">


					<!-- latest post -->
					<div class="latest_post_right">
						<h6 class="text-dark">Latest News</h6>
						<table class=" table table_latest_post">
							<tr>
								<td>
									<img src="img/international/img.jpg" class="img-fluid">
								</td>
								<td>
									<a href="news_detail.html" class="text-muted">
									ဗိုင်းရပ်စ်ကူးစက်ခံရပေမယ့် ထရမ့်မောင်နှံ ကျန်းမာရေးကောင်းမွန်နေတယ်လို့ ဆရာဝန် ပြော</a>
									<h6 class="text-muted" style="font-size: 13px;">
								<i class="far fa-clock"></i>5th Oct,2020</h6>

								</td>
							</tr>
							<tr>
								<td>
									<img src="img/sports/img1.png" class="img-fluid">
								</td>
								<td>
									<a href="news_detail.html" class="text-muted">
									ဂိုးပြတ်ရှုံးနိမ့်မှုနဲ့အတူ ဆိုးရွားလှတဲ့ မှတ်တမ်းဆိုးတွေကိုပါ ပိုင်ဆိုင်ခဲ့ရတဲ့ အာဆင်နယ်
								</a>
										<h6 class="text-muted" style="font-size: 13px;">
								<i class="far fa-clock"></i>5th Oct,2020</h6>

								</td>
							</tr>
							<tr>
								<td>
									<img src="img/local/img2.jpg" class="img-fluid">
								</td>
								<td>
									<a href="news_detail.html" class="text-muted">Asia Song Festival 2020 ဂီတဖျော်ဖြေပွဲအတွက် ကိုရီးယားကိုသွားတော့မယ့် Project K အဖွဲ့</a>
										<h6 class="text-muted" style="font-size: 13px;">
								<i class="far fa-clock"></i>5th Oct,2020</h6>

								</td>
							</tr>


						</table>



					</div>
					<!-- follow -->
					<div class="category_right my-3">
						<h6 class="text-dark">Follow Us</h6>
						<hr>
						<div class="fb-page" data-href="https://www.facebook.com/Info-Channel-109463740923509" data-tabs="timeline" data-width="300" data-height="190" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Info-Channel-109463740923509" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Info-Channel-109463740923509">Info-Channel</a></blockquote></div>
						
					</div>
					
					
					
					
					
				</div>
				
				
			</div>
			<!-- row end -->
			
		</div>
	</div>




@endsection
