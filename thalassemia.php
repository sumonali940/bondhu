<?php include "header.php"; ?>


<!-- 
		<div class="oxg_banner">
			<a href="tel:01765018344"><img src="assets/oxg.png" alt="oxg banner"></a>
			<a href="#"  class="oxg_close">X</a>
		</div> -->




		<header class="header2-area">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="table-heading thara_heading"> 
							<h2>থ্যালাসেমিয়াঃ</h2> 
						</div>
						<div class="thala-header-content text-center">
							<p> লক্ষ্য ও উদ্দেশ্যঃ থ্যালাসেমিয়া রোগিদের নির্দিষ্ট সময় অন্তর অন্তর রক্ত গ্রহণ করতে হয়। কারো প্রতিমাসে, অনেকের প্রায় দুই মাস তিন মাস পরপর রক্তের প্রয়োজন হয়। এতে তাদের সবসময়ই পরবর্তী রক্তদাতার খোঁজে দুশ্চিন্তাগ্রস্ত থাকতে হয়। আর্থিক ও মানষিক চাপ পরিবারের সদস্যদেরও অকৃত্রিম হাসি বিলীন করে দেয়। আমরা রক্তবন্ধুর মাধ্যমে তাদের তথ্যগুলো সংগ্রহ করতে চাই এবং প্রতিটি রোগিকে কিছু নির্দিষ্ট সংখ্যক আগ্রহী ব্লাড ডোনার দিয়ে যতোদূর সম্ভব চিন্তামুক্ত রাখার সামান্য উদ্যোগ গ্রহণ করেছি,<a href="/thalassemia-details">আরোও পড়ুন...</a></p>
							
						</div>
					</div>  
				</div>
				
			</div>
		</header>
		<div class="thala-page-area">
			<div class="container">
				<div class="row section_padding">
					<div class="col-md-6">
						<div class="thera-left"> 
							<div class="form-area thara-register-form">
								<div class="form-top"> 
									<h2>আপনার এলাকার কিংবা পরিচিত যে কোন এলাকার থ্যালাসেমিয়া রোগির তথ্য দিন</h2>
								</div> 
								<div class="form-start">
									<?php 
									if(isset($_REQUEST["patient_insert"])){
										echo "<font color='green'>থ্যালাসেমিয়া রোগির তথ্য আপডেট করা হয়েছে । </font>";
									}
									
									?>				                    
				                     
									<form action="thalassemia_core.php" method="POST">  
										<div class="input_item">
											<label for="tp_name">রোগির নামঃ<span>*</span></label>
											<input type="text" name="tp_name" class="form-control" id="tp_name" placeholder="রোগীর নাম" required>
										</div>

										<div class="input_item">
											<label for="tp_blood_group">রক্তের গ্রুপঃ<span>*</span></label>
											<select name="tp_blood_group" class="form-control"  id="tp_blood_group">
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

										<div class="input_item">
											<label for="tp_zila">জেলাঃ<span>*</span></label>
											<select name="tp_zila" class="form-control"  id="tp_zila">
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

										<div class="input_item">
											<label for="tp_thana">থানাঃ<span>*</span></label>
											<input type="text" name="tp_thana" class="form-control" id="tp_thana" placeholder="থানা" required>
										</div>

										<div class="input_item">
											<label for="tp_village">গ্রামের নামঃ<span>*</span></label>
											<input type="text" name="tp_village" class="form-control" id="tp_village" placeholder="গ্রামের নাম" required>
										</div>

										<div class="input_item">
											<label for="tp_guardian">অভিভাবকের নামঃ<span>*</span></label>
											<input type="text" name="tp_guardian" class="form-control" id="tp_guardian" placeholder="অভিভাবকের নাম" required>
										</div>

										<div class="input_item">
											<label for="tp_contact_number">মোবাইল নাম্বারঃ<span>*</span></label>
											<input type="text" name="tp_contact_number" class="form-control" id="tp_contact_number" placeholder="মোবাইল নাম্বার" required>
										</div>
 
										<div class="input_item">
											<label for="tp_submit_name">তথ্যদাতার নামঃ</label>
											<input type="text" name="tp_submit_name" class="form-control" id="tp_submit_name" placeholder="তথ্যদাতার নাম">
										</div>

										<div class="input_item">
											<label for="tp_submit_mobile">মোবাইল নাম্বারঃ</label>
											<input type="text" name="tp_submit_mobile" class="form-control" id="tp_submit_mobile" placeholder="মোবাইল নাম্বার">
										</div>

										<div class="submit font_family_1"> 
											<input type="submit" name="tp_new_submit" value="সাবমিট করুন">
										</div>
						            </form> 
								</div>
							</div>
						</div>
					</div>
					

					<div class="col-md-6">
						<div class="thera-left"> 
							<div class="form-area thara-register-form">
								<div class="form-top"> 
									<h2>আপনার আশেপাশে থাকা কোন থ্যালাসেমিয়া রোগিকে রক্ত উপহার দিয়ে সহযোগিতা করতে চাইলে ফরম পূরণ করুন</h2>
								</div> 

								<div class="form-start"> 
									<p>RoktoBondhu.com এ  রক্তদাতা হিসাবে রেজিস্ট্রেশন করা আছে?</p>
									<div class="checkButtons text-center">
										<a class="btn btn-success" id="btn-yes" href="#"><i class="fa fa-check"></i> &nbsp; হ্যাঁ &nbsp;</a>
										<a class="btn btn-danger" id="btn-no" href="#"><i class="fa fa-check"></i> &nbsp; না &nbsp;</a>
									</div>
													                    
				                    
									<form action="" method="POST" class="yes-form">  
										<div class="input_item">
											<label for="tp_register_number">রক্তবন্ধুতে রেজিস্ট্রেশনকৃত মোবাইল নাম্বারঃ<span>*</span></label>
											<input type="text" name="tp_register_number" class="form-control" id="tp_register_number" placeholder="মোবাইল নাম্বার" required>
										</div>
  
										<div class="submit font_family_1"> 
											<input type="submit" name="tp_old_register_donor" id="btn-yes" value="সাবমিট করুন">
										</div>
						            </form> 


						           <form action="registration_core.php" method="POST" class="no-form"> 
								<div class="input_item">
									<label for="name">নাম<span>*</span></label>
									<input type="text" name="name" class="form-control" id="name" placeholder="নাম" required>
								</div>
								<fieldset>
									<legend>স্থায়ী ঠিকানা</legend>
									<div class="form-group input_item"> 
										<label for="s_district">জেলা<span>*</span></label>
										<select name="s_district" class="form-control custom-select"  id="s_district">
											<option value="পঞ্চগড়">পঞ্চগড়</option>
											<option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>
											<option value="দিনাজপুর">দিনাজপুর </option>
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
									<div class="input_item">
										<label for="s_address">ঠিকানা<span>*</span></label>
										<input type="text" name="s_address" class="form-control" id="s_address" placeholder="ঠিকানা" required>
									</div> 
								</fieldset>

								<fieldset>
									<legend>বর্তমান ঠিকানা </legend>
									<div class="form-group input_item"> 
										<label for="district">জেলা<span>*</span></label>
										<select name="district" class="form-control custom-select"  id="district">
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
									<div class="input_item">
										<label for="address">ঠিকানা<span>*</span></label>
										<input type="text" name="address" class="form-control" id="address" placeholder="ঠিকানা" required>
									</div> 
								</fieldset>

								<div class="input_item">
									<label for="address">ইমেইল  ঠিকানা (যদি থাকে)</label>
									<input type="text" name="email" class="form-control" id="address" placeholder="ইমেইল " />
								</div>
								<div class="input_item mobile_update">
									<label for="mobile">মোবাইল নাম্বার ( ইংরেজি )<span>*</span></label>
									<input type="number" name="mobile" class="form-control" id="mobile" placeholder="মোবাইল নাম্বার" maxlength="11" required>
									<span class="white"></span>
								</div>
								
								<div class="form-group input_item"> 
									<label for="district">রক্তের  গ্রুপ<span>*</span></label>
									<select name="blood_group" class="form-control custom-select"  id="district">
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
								
								
								<div class="date_top_text">
									<div class="input_item">
										<label for="countingD">সর্বশেষ রক্ত দানের তারিখ<span>*</span></label>
										
										<div class="select_date_area">
											<div class="single_date_item">
												<select name="last_day" class="form-control custom-select"  id=""> 
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
												</select>
											</div>
											<div class="single_date_item">
												<select name="last_month" class="form-control custom-select"  id=""> 
													<option value="January">January</option>
													<option value="February">February</option>
													<option value="March">March</option>
													<option value="April">April</option>
													<option value="May">May</option>
													<option value="June">June</option>
													<option value="July">July</option>
													<option value="August">August</option>
													<option value="September">September</option>
													<option value="October">October</option>
													<option value="November">November</option>
													<option value="December">December</option>
												</select>
											</div>
											
											<div class="single_date_item">
												<select name="last_year" class="form-control custom-select"  id=""> 
													
													<option  value="2017">2017</option>
													
													<option  value="2018">2018</option>
													
													<option  value="2019">2019</option>
													
													<option  value="2020">2020</option>
													
													<option  value="2021">2021</option>
													
													<option selected value="2022">2022</option>
																									</select>
											</div>
										</div>	
									</div>	
								</div>	
								
								<div class="input_item">
									<div class="custom-control custom-radio">
										<input type="radio" id="male" name="gender" class="custom-control-input"  value="male" checked>
										<label class="custom-control-label" for="male">পুরুষ</label>
									</div>
									<div class="custom-control custom-radio">
										  <input type="radio" id="female" value="female" name="gender" class="custom-control-input">
										  <label class="custom-control-label" for="female">নারী</label>
									</div>
									<span><small>নারী ডোনারদের ফোন নম্বর গোপন রাখা হবে।</small></span>
								</div>
								<div class="input_item">
									<label for="birthday2">জন্ম তারিখঃ<span>*</span></label>
									<input type="date" name="birthday" class="form-control" id="birthday2" placeholder="জন্ম তারিখ" autocomplete="off">
								</div>

								<div class="input_item">
									<label for="password">পাসওয়ার্ড<span>*</span></label>
									<input type="password" name="password" class="form-control" id="password" placeholder="পাসওয়ার্ড" required>
								</div>
								<div class="input_item">
									<label for="cnfpassword"> কনফার্ম পাসওয়ার্ড<span>*</span></label>
									<input type="password" name="confirm_password" class="form-control" id="cnfpassword" placeholder="কনফার্ম পাসওয়ার্ড" required>
								</div>
								<div class="input_item">
									<label for="cnfpassword">ফেসবুক <span>*</span></label>
									<input type="text" name="facebook" class="form-control" id="cnfpassword" placeholder="ফেসবুক প্রোফাইল লিঙ্ক " required>
								</div>
								<div class="submit " > 
									<input type="submit" name="register_button" value="রেজিস্ট্রেশন" />
								</div>
								  
							</form>
								</div>
							</div>
						</div>
					</div>

				</div>	
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12"> 
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Roktobondhu -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-4331100589850935"
					     data-ad-slot="5393622206"
					     data-ad-format="auto"
					     data-full-width-responsive="true"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>

					<br>
				</div>
			</div> 
		</div> 
		
	</div>
	<div class="main-footer">
		<!-- Start Notice Area -->
		<div class="container">
	<div class="row">
		<div class="col-md-12"> 
			<br>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Roktobondhu -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-4331100589850935"
			     data-ad-slot="5393622206"
			     data-ad-format="auto"
			     data-full-width-responsive="true"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>

			<br>
		</div>
	</div> 
</div> 

<section class="notice-area"> 
	<div class="container"> 
		<div class="row"> 
			<div class="col-xl-12"> 
				<div class="notice_bord text-center"> 
				 
				<p><span>নোটিশঃ</span> রক্তবন্ধুর সাথে কাজ করতে চাইলে, রক্তবন্ধু সম্পর্কে জানতে, পাসওয়ার্ড ভুলে গেলে যোগাযোগ করুন <a href="tel:01716626487, 01778951824
"><span class="engFont"> 01716626487, 01778951824</span></a></p>
				<p><a class="text-black btn-btn-danger" target="_blank" href="/details"><span class="eng"></span></a> <a class="btn btn-danger" target="_blank" href="/details">রক্তবন্ধু সম্পর্কে  বিস্তারিত জানতে ক্লিক করুন </a> </p>
				</div>
			</div>
		</div>
	</div>
</section>		<!-- End Notice Area -->
		

<?php include "footer.php"; ?>