@extends('master')
@section('title',"Sports News")

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
						<span class="ml-3">အားကစားသတင်း</span>
						
						
					</div>
				</div>
			</div>
		</div>
		<div class="container my-3">	 
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 blog"> 						
							<a href="sports_detail.html">
								<img src="img/sports/img1.png" class="img-fluid">
							</a>
							<label class="bg-white text-muted">
								<a href="sports_detail.html" class="">
								ဂိုးပြတ်ရှုံးနိမ့်မှုနဲ့အတူ ဆိုးရွားလှတဲ့ မှတ်တမ်းဆိုးတွေကိုပါ ပိုင်ဆိုင်ခဲ့ရတဲ့ အာဆင်နယ်</a>

								<p class="text-muted my-2">
									ပရီးမီးယားလိဂ် ပြန်လည် စတင်ခြင်းမှာတော့ အာဆင်နယ်တို့အနေနဲ့ ဆုံးရှုံးမှုတွေကို ခံစားခဲ့ရပြီး ဒီရာသီ ပရီးမီးယားလိဂ်ပြိုင်ပွဲမှာ ပထမဆုံးအကြိမ်အဖြစ် တစ်ပွဲလုံးမှာ ဂိုးပေါက်တည့်မတ်ခြင်း တစ်ကြိမ်မှမရှိခဲ့တဲ့ မှတ်တမ်းဆိုးကို ပိုင်ဆိုင်ခဲ့ရပါတယ်...

								</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>5th Oct,2020 By Info-Channel</h6>
							</label>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog">
							<a href="sports_detail.html">
								<img src="img/sports/img4.png" class="img-fluid">
							</a>
							
							<label class="bg-white">
								<a href="sports_detail.html" class="">
								BTS နဲ့ K-pop ကိုချစ်ပါတယ်ဆိုပြီး ပြောခဲ့ဖူးတဲ့ ကမ္ဘာကျော်ဘောလုံးကစားသမားကြီး Paul Pogba
							</a>

								<p class="text-muted my-2">မန်ချက်စတာယူနိုက်တက် အသင်းရဲ့ကစားသမားကြီး Paul Pogba ကိုတော့ ပရိတ်သတ်ကြီးလည်း သိပြီးသားဖြစ်မှာပါ။ မန်ချက်စတာယူနိုက်တက် အသင်းဟာဆိုလည်း ကမ္ဘာပေါ်မှာ မသိတဲ့....
								</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>5th Oct,2020 By Info-Channel</h6>
							</label>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog py-2">
							<a href="sports_detail.html">
								<img src="img/sports/img5.png" class="img-fluid">
							</a>
							
							<label class="bg-white text-muted">
								<a href="sports_detail.html" class="">
								သူဟာ ထိပ်တန်းတိုက်စစ်မှူး တစ်ဦးဖြစ်သလို လူသားဆန်တဲ့ လူတစ်ယောက်ပါ” လို့ ရက်ရှ်ဖို့ဒ်အပေါ် ချီးကျူးခဲ့တဲ့ ဆိုးလ်ရှား
								</a>

								<p class="text-muted my-2">မန်ယူအသင်းရဲ့ နည်းပြဖြစ်သူ ဆိုးလ်ရှားက ရက်ရှိဖို့ဒ်အား ကွင်းတွင်း၊ ကွင်းပြင် တည်ငြိမ်ရင့်ကျက်တဲ့ ခြေစွမ်းနဲ့ အပြုအမူတွေကြောင့် အင်္ဂလန်လက်ရွေးစင်ရဲ့ အသင်းခေါင်းဆောင်ဖြစ်သင့်ကြောင်း ထောက်ခံသွားခဲ့ပါတယ်။...</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>4th Oct,2020 By Info-Channel</h6>
							</label>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog py-2">
							<a href="sports_detail.html">
								<img src="img/sports/img6.png" class="img-fluid">
							</a>
							<label class="bg-white">
								<a href="sports_detail.html" class="">Kluivert ကို ပေါင် (၃၅) သန်းနဲ့ ညှိနှိုင်းနေပြီဖြစ်တဲ့ အာဆင်နယ်</a>

								<p class="text-muted my-2">
									အာဆင်နယ်အသင်းဟာ ရိုးမားအသင်းရဲ့ တောင်ပံတိုက်စစ်ကစားသမား Kluivert တစ်နှစ်လျှင် လုပ်ခလစာ (၃.၁) သန်းကြေးရှိ စာချုပ်တစ်ရပ်နဲ့ ကမ်းလှမ်းထားခဲ့ကြောင်း သိရပါတယ်။သတင်းတွေအရ အဆိုပါ အသက် (၂၁) နှစ်အရွယ် ကစားသမားကို ခေါ်ယူနိုင်ဖို့အရေး ပြောင်းရွှေ့...
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
