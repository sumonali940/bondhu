<?php include "header.php"; ?>
	
		<!-- End Header Area -->


<!-- 
		<div class="oxg_banner">
			<a href="tel:01765018344"><img src="assets/oxg.png" alt="oxg banner"></a>
			<a href="#"  class="oxg_close">X</a>
		</div> -->		<!-- Start Search Area -->
		<section class="header_search_area">
			<div class="container">	
				<div class="header_content_area">
				
				<div class="row section_padding home_search_area" >
					<div class="col-md-6 platelet-left-header">
						<h2>রক্তবন্ধু খুঁজুন  ....</h2>
						<hr>
						<form action="search.php" method="GET">
							<div class="form-group">
								<div class="select_grouph_area">
									<select name="group" class="form-control custom-select"  id="blood_group">
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="select_location_area select_grouph_area"> 
									<select name="district" id="district" class="district">
										<option value="পঞ্চগড়">পঞ্চগড়</option>
										<option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>
										<option value="দিনাজপুর ">দিনাজপুর </option>
										<option value="রংপুর">রংপুর </option>
										<option value="ঢাকা">ঢাকা</option>
										<option value="কুড়িগ্রাম">কুড়িগ্রাম</option>
										<option value="লালমনিরহাট">লালমনিরহাট</option>
										<option value="নীলফামারী">নীলফামারী </option>
										<option value="গাইবান্ধা">গাইবান্ধা</option>
										
										
										<option value="চট্টগ্রাম">চট্টগ্রাম</option> 
											<option value="রাজশাহী">রাজশাহী </option>
											<option value="সিলেট"> সিলেট </option>
											<option value="যশোর">যশোর</option>
											<option value="ময়মনসিংহ">ময়মনসিংহ</option>
											<option value="কুমিল্লা">কুমিল্লা </option>
											<option value="বরিশাল">বরিশাল</option>
											<option value="ফরিদপুর">ফরিদপুর </option>
											<option value="বগুড়া">বগুড়া </option>
											<option value="পাবনা">পাবনা </option>
											<option value="রাঙ্গামাটি">রাঙ্গামাটি </option>
											<option value="কুষ্টিয়া">কুষ্টিয়া </option>
											<option value="নোয়াখালী">নোয়াখালী </option>
											<option value="খুলনা">খুলনা</option>
											<option value="টাঙ্গাইল">টাঙ্গাইল </option> 
											<option value="ভোলা">ভোলা </option>
											<option value="বান্দরবান">বান্দরবান </option>
											<option value="চাঁদপুর">চাঁদপুর </option>
											<option value="হবিগঞ্জ">হবিগঞ্জ </option>
											<option value="লক্ষীপুর">লক্ষীপুর</option>
											<option value="বরগুনা">বরগুনা </option>
											<option value="ঝালকাঠি">ঝালকাঠি </option>
											<option value="পিরোজপুর">পিরোজপুর </option>
											<option value="পটুয়াখালী">পটুয়াখালী </option>
											<option value="ঝিনাইদহ">ঝিনাইদহ</option>
											<option value="নড়াইল">নড়াইল </option>
											<option value="মাগুরা">মাগুরা </option> 
											<option value="সাতক্ষিরা">সাতক্ষিরা</option>
											<option value="বাগেরহাট">বাগেরহাট </option>
											<option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা </option>
											<option value="মেহেরপুর">মেহেরপুর </option>
											<option value="সিরাজগঞ্জ">সিরাজগঞ্জ </option>
											<option value="জয়পুরহাট">জয়পুরহাট </option>
											<option value="নাটোর">নাটোর</option>
											<option value="নওগাঁ">নওগাঁ </option>
											<option value="চাঁপাইনবাবগঞ্জ">চাঁপাইনবাবগঞ্জ</option>
											<option value="খাগড়াছড়ি">খাগড়াছড়ি </option>
											<option value="ফেনী">ফেনী </option>
											<option value="ব্রাহ্মণবাড়ীয়া">ব্রাহ্মণবাড়ীয়া </option>
											<option value="সুনামগঞ্জ">সুনামগঞ্জ</option>
											<option value="কক্সবাজার">কক্সবাজার </option>
											<option value="মৌলভীবাজার">মৌলভীবাজার </option>
											<option value="গোপালগঞ্জ">গোপালগঞ্জ </option>
											<option value="শরীয়তপুর">শরীয়তপুর </option>
											<option value="মাদারীপুর">মাদারীপুর </option>
											<option value="রাজবাড়ী">রাজবাড়ী </option>
											<option value="গাজীপুর">গাজীপুর </option>
											<option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option>
											<option value="জামালপুর">জামালপুর </option>
											<option value="শেরপুর">শেরপুর </option>
											<option value="নেত্রকোনা">নেত্রকোনা</option>
											<option value="মুন্সীগঞ্জ">মুন্সীগঞ্জ </option>
											<option value="নরসিংদী">নরসিংদী </option>
											<option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option>
											<option value="মানিকগঞ্জ">মানিকগঞ্জ </option>
										
										<option value="অন্যান্য">অন্যান্য</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="search_button"> 
									<!-- <input name="send" value="খুঁজুন" name="search_button" type="submit"> -->
									<button type="submit" name="search_button"><i class="fa fa-search"></i> <span>খুঁজুন</span></button>
								</div>
							</div>

							

						</form>
					</div>
				<!--	<div class="col-md-6">
						<div class="platelet-left-header">
							<h2>প্লাটিলেট - রক্তবন্ধু খুঁজুন ....</h2>
							<hr>
							<div class="plat-form-area">
								<form action="plateletsearch.php" method="POST">
									<div class="form-group">
										<div class="select_grouph_area">
											<select name="blood_group" class="form-control custom-select" id="district">
												<option value="A+">A+</option>
												<option value="A-">A-</option>
												<option value="B+">B+</option>
												<option value="B-">B-</option>
												<option value="O+">O+</option>
												<option value="O-">O-</option>
												<option value="AB+">AB+</option>
												<option value="AB-">AB-</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="select_grouph_area">
											
											<select name="donate_zila" class="district"  id="district">
										
												<option value="ঢাকা">ঢাকা</option>
												<option value="চট্টগ্রাম">চট্টগ্রাম</option>
												<option value="সিলেট">সিলেট</option>
												<option value="অন্যান্য">অন্যান্য</option> 


												<option value="পঞ্চগড়">পঞ্চগড়</option>
												<option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>
												<option value="দিনাজপুর ">দিনাজপুর </option>
												<option value="রংপুর">রংপুর </option> 
												<option value="কুড়িগ্রাম">কুড়িগ্রাম</option>
												<option value="লালমনিরহাট">লালমনিরহাট</option>
												<option value="নীলফামারী">নীলফামারী </option>
												<option value="গাইবান্ধা">গাইবান্ধা</option>
											
											 
												<option value="রাজশাহী">রাজশাহী </option> 
												<option value="যশোর">যশোর</option>
												<option value="ময়মনসিংহ">ময়মনসিংহ</option>
												<option value="কুমিল্লা">কুমিল্লা </option>
												<option value="বরিশাল">বরিশাল</option>
												<option value="ফরিদপুর">ফরিদপুর </option>
												<option value="বগুড়া">বগুড়া </option>
												<option value="পাবনা">পাবনা </option>
												<option value="রাঙ্গামাটি">রাঙ্গামাটি </option>
												<option value="কুষ্টিয়া">কুষ্টিয়া </option>
												<option value="নোয়াখালী">নোয়াখালী </option>
												<option value="খুলনা">খুলনা</option>
												<option value="টাঙ্গাইল">টাঙ্গাইল </option> 
												<option value="ভোলা">ভোলা </option>
												<option value="বান্দরবান">বান্দরবান </option>
												<option value="চাঁদপুর">চাঁদপুর </option>
												<option value="হবিগঞ্জ">হবিগঞ্জ </option>
												<option value="লক্ষীপুর">লক্ষীপুর</option>
												<option value="বরগুনা">বরগুনা </option>
												<option value="ঝালকাঠি">ঝালকাঠি </option>
												<option value="পিরোজপুর">পিরোজপুর </option>
												<option value="পটুয়াখালী">পটুয়াখালী </option>
												<option value="ঝিনাইদহ">ঝিনাইদহ</option>
												<option value="নড়াইল">নড়াইল </option>
												<option value="মাগুরা">মাগুরা </option> 
												<option value="সাতক্ষিরা">সাতক্ষিরা</option>
												<option value="বাগেরহাট">বাগেরহাট </option>
												<option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা </option>
												<option value="মেহেরপুর">মেহেরপুর </option>
												<option value="সিরাজগঞ্জ">সিরাজগঞ্জ </option>
												<option value="জয়পুরহাট">জয়পুরহাট </option>
												<option value="নাটোর">নাটোর</option>
												<option value="নওগাঁ">নওগাঁ </option>
												<option value="চাঁপাইনবাবগঞ্জ">চাঁপাইনবাবগঞ্জ</option>
												<option value="খাগড়াছড়ি">খাগড়াছড়ি </option>
												<option value="ফেনী">ফেনী </option>
												<option value="ব্রাহ্মণবাড়ীয়া">ব্রাহ্মণবাড়ীয়া </option>
												<option value="সুনামগঞ্জ">সুনামগঞ্জ</option>
												<option value="কক্সবাজার">কক্সবাজার </option>
												<option value="মৌলভীবাজার">মৌলভীবাজার </option>
												<option value="গোপালগঞ্জ">গোপালগঞ্জ </option>
												<option value="শরীয়তপুর">শরীয়তপুর </option>
												<option value="মাদারীপুর">মাদারীপুর </option>
												<option value="রাজবাড়ী">রাজবাড়ী </option>
												<option value="গাজীপুর">গাজীপুর </option>
												<option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option>
												<option value="জামালপুর">জামালপুর </option>
												<option value="শেরপুর">শেরপুর </option>
												<option value="নেত্রকোনা">নেত্রকোনা</option>
												<option value="মুন্সীগঞ্জ">মুন্সীগঞ্জ </option>
												<option value="নরসিংদী">নরসিংদী </option>
												<option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option>
												<option value="মানিকগঞ্জ">মানিকগঞ্জ </option>
												 
											</select> 
										</div>
									</div>

									<div class="form-group search_button">
										<button type="submit"   name="search_button"><i class="fa fa-search"></i> <span>খুঁজুন</span></button>
									</div>
								</form>
							</div>
						</div>
					</div>-->
				</div>

				</div>
			</div>
		</section>
		<!-- End Search Area -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<br>
					<!-- Roktobondhu -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-4331100589850935"
					     data-ad-slot="5393622206"
					     data-ad-format="auto"
					     data-full-width-responsive="true"></ins>

				</div>
			</div>
		</div>

		<!-- Start services Area  -->
		<section class="services-area">
			<div class="container">
				<div class="row section_padding">
					<div class="col-xl-12 col-md-12"> 
						<div class="services_chat_area text-center"> 
							<a href="registration.php">রক্তবন্ধু হতে রেজিস্ট্রেশন করুন</a> 
						</div>
						<br>
	
					</div>
					<!-- <div class="col-xl-6 col-md-6"> 
						<div class="services_chat_area text-center"> 
							<a href="lg_chat.php">তাৎক্ষণিক  চ্যাট  </a>
						</div>
					</div> -->
				</div>
				<!--  <div class="row section_padding"> 
					<div class="col-xl-12"> 
						<div class="Associate_organization_bottom owl-carousel">
														
						</div>
					</div>
				</div>  -->

					<div class="row">
						<div class="col-md-12">
							<br>

						</div>
					</div> 

				<div class="row home_card_area">
					<div class="col-md-5">
						<div class="home_card_left">
							<h1>বন্ধু ব্লাড ব্যাংক কার্ড </h1>
							<p>এখনি ডাউনলোড করে ফেলুন আপনার কার্ডটি </p>

							<a href="/card.php" class="btn btn-rounded btn-success">কার্ড তৈরি করুন</a>
							<br><br><br>

							<p>কিভাবে কার্ড তৈরি করব?</p>
							<a href="#" target="_blank" class="btn btn-rounded btn-danger">ভিডিও টি দেখুন </a>
						</div>
					</div>
					<div class="col-md-7">
						<div class="bloodCard">
	 						
	 						<div id="card" class="zoom-out">
	 							<div class="c_header">
	 								<div class="c_header_left c_avatar">
  										<img  src="assets/img/avatar.png" alt=" "/>
	 								</div>
	 								<div class="c_group">A+</div>
	 								<div class="c_header_left c_header_right"> 
	 									<img src="assets/img/logo2.png" alt="logo">
	 								</div> 
	 							</div>

	 							<div class="c_details">
 									<h4><span id="c_o_name"><b>বন্ধু ব্লাড ব্যাংক</b></span></h4> 
 									<p><b>রক্তের গ্রুপঃ </b><span id="c_o_blood">A+</span></p> 
 									<p><b>মোবাইলঃ </b><span id="c_o_mobile">017xxxxxxxx</span></p> 
 									<p><b>ঠিকানাঃ </b><span id="c_o_address">xxxxxx, Bangladesh.</span></p>
									<p style="color:#f11d1d"><b>প্রতিষ্ঠাতা সভাপতিঃ  </b>মোঃ বোরহান উদ্দিন ।</p>									
 								</div>

	 							<div class="c_footer">
	 								<p>www.Bondhubloodbank.com</p>
	 							</div>
	 						</div>

	 						
	 					</div>
					</div>
				</div>
				<!-- Calender download -->
				<!-- <div class="row">
					
					<div class="col-md-6">
						<div class="calender_right">
							<img src="assets/Calender.png" alt="Roktobondhu Calender">
						</div>
					</div>
					<div class="col-md-6">
						<div class="calender_left">
							<div class="home_card_left">
								<h1>রক্তবন্ধু ক্যালেন্ডার ২০২১</h1>
								<p>২০২১ সালের ক্যালেন্ডার PDF ও PNG ফরমেটে। প্রিন্ট করে বাড়িতে, অফিসে, প্রতিষ্ঠানে লাগিয়ে দিন।</p>
								<p>মন চাইলে কাউকে উপহার দিন! রক্তদানের আহ্বান ছড়িয়ে দিন।</p>

								<a style="margin-bottom:15px;"  href="/assets/RoktobondhuCalender.png" target="_blank" class="btn btn-rounded btn-info">PNG Download</a> <br>
								<a href="/assets/RoktobondhuCalender.pdf" target="_blank" class="btn btn-rounded btn-info">PDF Download</a>
								<br>
							</div>
						</div>
					</div>
				</div> -->
				<!-- Calender download -->

				<!-- <div class="row">
					<div class="col-md-12">
						<br>
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						 
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-4331100589850935"
						     data-ad-slot="5393622206"
						     data-ad-format="auto"
						     data-full-width-responsive="true"></ins>
						<script>
						     (adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div>  -->



			</div>
		</section>
		<!-- End services Area  -->

		<!-- <div class="course-banner-area">
			<div class="container">
				<div class="row course_banner_row">
					<div class="col-md-4">
						<div class="home_card_left course_banner_left">
							<h1>প্রফেশনাল ওয়েব ডিজাইন কোর্স  ✅</h1>
							<p>ওয়েব ডিজাইন শিখে ফ্রিল্যান্সিং করতে আগ্রহী?</p>
							<p>একটু একটু পারেন কিন্তু প্রফেশনালি কোনো ওয়েব সাইট ডিজাইন করতে পারেন না?</p> 

							<p>আপনাদের জন্য সাজানো হয়েছে ৫০ ঘন্টার পূর্ণাঙ্গ  ওয়েব ডিজাইন সিরিজ। </p>
							<p>২০% ছাড় পেতে কোর্স কেনার সময়  ROKTOBONDHU এই কুপন কোড ব্যবহার করুন।</p>		
							<br>
							<a style="margin-bottom:15px;"  href="https://coderitsolution.com/courses/professional-web-design" target="_blank" class="btn btn-rounded btn-success">কোর্সের বিস্তারিত</a> <br>
						</div>
					</div>
					<div class="col-md-8">
						<div class="course_banner">
							<a href="https://coderitsolution.com/courses/professional-web-design" target="_blank" ><img src="/assets/cits-banner-21.jpg" alt="CITS Banner"></a>
						</div>
					</div>
				</div>
			</div>

		</div> -->

		<!-- <div class="ads-area">
			<div class="container">
				
				<div class="row"> 
					<div class="col-md-12">
						<div class="campain_banner">
							<img src="assets/campain_banner/campain_banner.jpg" alt="campain_banner ">
						</div>
					</div>
					<div class="col-xl-12"> 
						<div class="call_add_area"> 
							<img src="assets/images/ad.gif" alt="ad">
						</div>
						<div class="call_text_area_1"> 
							<p>বিজ্ঞাপন-সহযোগিতা থেকে প্রাপ্ত অর্থ শুধু  ওয়েবসাইট ও রক্ত সম্পর্কিত ক্যাম্পেইনে ব্যবহৃত হবে।</p>
						</div>
					</div>
					
				</div>
			</div>
		</div> -->

		<div class="container">
			<div class="row">
				<div class="col-md-12"> 


				</div>
			</div> 
		</div> 
		
		<!-- Start socila Area -->
		<section class="socila_area"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-xl-12"> 
						<div class="social_area"> 
						<div class="fb-group" data-href="https://www.facebook.com/groups/350952575327783" data-width="280" data-show-metadata="false"><blockquote cite="https://www.facebook.com/groups/350952575327783" class="fb-xfbml-parse-ignore">বন্ধু ব্লাড ব্যাংক</blockquote></div>
						
						
							<iframe src="https://www.facebook.com/plugins/group.php?href=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F350952575327783&width=280&show_metadata=false&height=239&appId" width="280" height="239" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End socila Area -->
	</div>
	<div class="main-footer">
		<!-- Start Notice Area -->
		<div class="container">
	<div class="row">
		<div class="col-md-12"> 
			

			<br>
		</div>
	</div> 
</div> 

<section class="notice-area"> 
	<div class="container"> 
		<div class="row"> 
			<div class="col-xl-12"> 
				<div class="notice_bord text-center"> 
				 
				<p><span>নোটিশঃ</span> বন্ধু ব্লাড ব্যাংক এর সাথে কাজ করতে চাইলে, বন্ধু ব্লাড ব্যাংক সম্পর্কে জানতে, পাসওয়ার্ড ভুলে গেলে যোগাযোগ করুন <a href="tel:01723275785
"><span class="engFont">01723275785</span></a></p>
				<p><a class="text-black btn-btn-danger" target="_blank" href="/details"><span class="eng"></span></a> <a class="btn btn-danger" target="_blank" href="/details">বন্ধু ব্লাড ব্যাংক  সম্পর্কে  বিস্তারিত জানতে ক্লিক করুন </a> </p>
				</div>
			</div>
		</div>
	</div>
</section>		<!-- End Notice Area -->

<?php include "footer.php"; ?>

