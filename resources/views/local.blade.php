@extends('master')
@section('title',"Local News")

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
						<span class="ml-3">ပြည်တွင်းသတင်း</span>
						
						
					</div>
				</div>
			</div>
		</div>
		<div class="container my-3">	 
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 blog"> 						
							<a href="{{route('detailpage')}}">
								<img src="img/local/img5.jpg" class="img-fluid">
							</a>
							<label class="bg-white text-muted">
								<a href="{{route('detailpage')}}" class="">
								ကိုဗစ်ကာကွယ်ဆေးအတုတွေကို ဝယ်ယူမသုံးစွဲဖို့ ဝန်ကြီးသတိပေး၊</a>

								<p class="text-muted my-2">အွန်လိုင်းမှာရောင်းချနေတဲ့ ကိုဗစ်ကာကွယ်ဆေးတွေကို ဝယ်ယူမသုံးစွဲကြဖို့ ကျန်းမာရေးဝန်ကြီး ဒေါက်တာမြင့်ထွေးက သတိပေးပြောကြားခဲ့ပြီး ကိုဗစ်ကာကွယ်ဆေးဆိုပြီး ရောင်းချနေသူတွေ .....</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>5th Oct,2020 By Info-Channel</h6>
							</label>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog">
							<a href="news_detail.html">
								<img src="img/local/img6.jpg" class="img-fluid">
							</a>
							<label class="bg-white">
								<a href="news_detail.html" class="">ပြည်တွင်းလေကြောင်းလိုင်းခရီးစဉ်များကို အောက်တိုဘာ ၃၁ ရက်အထိ တိုးမြှင့်ရပ်ဆိုင်</a>

								<p class="text-muted my-2">ပြည်တွင်းလေကြောင်းခရီးစဉ်ပြေးဆွဲမှုများရပ်ဆိုင်းမှုကို အောက်တိုဘာလ (၃၁) ရက်နေ့အထိ တိုးမြှင့်သတ်မှတ်လိုက်ကြောင်း ရန်ကုန်အပြည်ပြည်ဆိုင်ရာလေဆိပ်က သတင်းထုတ်ပြန်လိုက်ပါတယ်။</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>5th Oct,2020 By Info-Channel</h6>
							</label>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog py-2">
						 <a href="news_detail.html">
						 		<img src="img/local/img4.jpg" class="img-fluid">
						 </a>
							<label class="bg-white text-muted">
								<a href="news_detail.html" class="">အွန်လိုင်းကနေ မဲစာရင်းစတင်ကြေညာတဲ့နေ့မှာ ကြည့်ရှုလို့မရတဲ့ အခက်အခဲများဖြစ်နေ</a>

								<p class="text-muted my-2">
								ဒုတိယအကြိမ် မဲစာရင်းကြေညာခြင်းကို အောက်တိုဘာလ ၁ရက်က စတင်ပြီး အွန်လိုင်းဝက်ဘ်ဆိုဒ်ကနေ ကြည့်ရှူနိုင်မယ့်လိပ်စာကို ပြည်ထောင်စုရွေးကောက်ပွဲကော်မရှင်က   ...</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>4th Oct,2020 By Info-Channel</h6>
							</label>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog py-2">
							<a href="news_detail.html">
								<img src="img/local/img7.jpg" class="img-fluid">
							</a>
							<label class="bg-white">
								<a href="news_detail" class="">နှင်းဆီပါတီ(UDP) ဥက္ကဋ္ဌ ဦးကျော်မြင့်ကို ဖမ်းဆီ</a>

								<p class="text-muted my-2">
								UDP ညီညွတ်သောဒီမိုကရက်တစ်ပါတီ (နှင်းဆီပါတီ)ဥက္ကဋ္ဌ ဦးကျော်မြင့်ကို စက်တင်ဘာလ ၂၉ ရက်နေ့ညပိုင်းမှာရဲတပ်ဖွဲ့ကဖမ်းဆီးလိုက်ပြီဖြစ်တယ်လို့ သိရပါတယ်။</p>
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