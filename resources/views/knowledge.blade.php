@extends('master')
@section('title',"Knowledge News")

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
						<span class="ml-3">ဗဟုသုတအဖြာဖြာ</span>
						
						
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
								<img src="img/knowledge/img2.jpg" class="img-fluid">
							</a>
							<label class="bg-white text-muted">
								<a href="k_detail.html" class="">
								ညဘက်အိပ်တဲ့အခါမှာ နှစ်နှစ်ခြိုက်ခြိုက်အိပ်ပျော်စေဖို့ စောင်ခြုံပြီး အိပ်ကြမယ်
							</a>

								<p class="text-muted my-2">
									ညဘက်အိပ်စက်အနားယူကြတဲ့အခါမှာ စောင်မပါပဲ ဖြစ်သလိုအိပ်ကြသူတွေလည်း ရှိသလို စောင်ပါမှ အိပ်တတ်တဲ့သူတွေလည်း ရှိကြပါတယ်။တကယ်တော့ စောင်ခြုံပြီးအိပ်တာဟာ မိမိကိုယ်ကို လုံခြုံမှုရှိတယ်လို့ ခံစားရစေပြီး ကောင်းကျိုးတွေများစွာကို ရရှိစေပါတယ်။

								</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>5th Oct,2020 By Info-Channel</h6>
							</label>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog">
							<a href="sports_detail.html">
								<img src="img/knowledge/img1.jpg" class="img-fluid">
							</a>
							
							<label class="bg-white">
								<a href="k_detail.html" class="">
								စမတ်ဖုန်းလောကမှာ နေရာယူလာတဲ့ pro-grade Camera အကြောင်းသိပြီးပြီလား
							</a>

								<p class="text-muted my-2">
									ခေတ်တွေ တိုးတက်ပြောင်းလဲလာတာနဲ့ အညီ စမတ်ဖုန်းတွေမှာ Pro-grade camera တွေ ပါလာတာ ကတော့တကယ့်ကို ကောင်းတဲ့အချက်တစ်ခုပါပဲ။စီးပွားရေး၊ လူမှုရေး၊ ကျန်းမာရေး စတာတွေ အားလုံး ကို မှတ်တမ်းတင်ဖို့ပဲ ဖြစ်ဖြစ်၊ ကြော်ငြာ ရိုက်ကူးဖို့ပဲ ဖြစ်ဖြစ် ဓာတ်ပုံနဲ့ ....
								</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>5th Oct,2020 By Info-Channel</h6>
							</label>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog py-2">
							<a href="sports_detail.html">
								<img src="img/knowledge/img4.jpg" class="img-fluid">
							</a>
							
							<label class="bg-white text-muted">
								<a href="k_detail.html" class="">
									မီးဖိုချောင်သုံး သဘာဝပစ္စည်းလေးတွေနဲ့ အသားအရေထိန်းသိမ်းကြမယ်
								</a>

								<p class="text-muted my-2">အသားအရေထိန်းသိမ်းမှုဟာ အသက်အရွယ်နဲ့မဆိုင်ဘဲ ဆယ်ကျော်သက်အရွယ်ထဲကနေ အသက်တွေကြီးလာတဲ့အထိ ပြုလုပ်ပေးသင့်ပါတယ်။ အသားအရေထိန်းသိမ်းတဲ့နေရာမှာလည်း နည်းလမ်းတွေများစွာရှိပေမယ့် အိမ်မှာနေရင်းမီးဖိုချောင်သုံး သဘာဝပစ္စည်းလေးတွေနဲ့</p>
								<h6 class="text-muted">
								<i class="far fa-clock"></i>4th Oct,2020 By Info-Channel</h6>
							</label>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 blog py-2">
							<a href="k_detail.html">
								<img src="img/knowledge/img6.jpg" class="img-fluid">
							</a>
							<label class="bg-white">
								<a href="k_detail.html" class=""> 
								နှစ်ပေါင်းများစွာ အမေဇုန် သစ်တောထဲမှာ အသက်ရှင် နေထိုင်ခဲ့တဲ့ တွင်းအောင်းလူသား</a>

								<p class="text-muted my-2">
									ဒီတစ်ခါမှာတော့ ကမ္ဘာတစ်လွှားက ထူးခြားဖြစ်စဉ် တစ်ခုလို့ပြောရမယ့် "တွင်းအောင်းလူ"အကြောင်းကို တင်ဆက်ပေးသွားမှာ ဖြစ်ပါတယ်။ အဲ့လူရဲ့ အဖြစ်အပျက်ကတော့ မိသားစုဝင် တစ်ဦးတစ်ယောက်မှ မကျန်ရှိဘဲ နှစ်ပေါင်းများစွာ တစ်ယောက်တည်း အထီးကျန်...

...
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
