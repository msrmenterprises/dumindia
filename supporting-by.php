<?php include "include/header.php"; ?>
<style>
.k_confirmed_als {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	gap: 12px 18px;
	list-style: none;
	padding: 0;
	margin: 0 auto;
	align-items: stretch;
}
.k_confirmed_als li {
	position: relative;
	box-sizing: border-box;
	min-width: 0;
	text-align: center;
	margin: 0;
	padding: 6px 4px;
	display: flex !important;
	flex: 0 0 calc((100% - 72px) / 5);
	width: auto !important;
	min-height: 156px;
	align-items: stretch;
	background: #fff;
	border-radius: 6px;
	box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06);
	border: 1px solid rgba(44, 58, 100, 0.08) !important;
}
.k_confirmed_als li::after {
	position: absolute;
	inset: 5px;
	border: 1px solid rgba(44, 58, 100, 0.12);
	border-radius: 4px;
	content: "";
	pointer-events: none;
}
.k_confirmed_als li a {
	box-sizing: border-box;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	gap: 8px;
	width: 100%;
	padding: 10px;
	text-decoration: none;
	color: inherit;
	font-size: 14px;
	line-height: 1.35;
}
.k_confirmed_als li img {
	max-width: 100% !important;
	width: auto !important;
	height: 96px !important;
	max-height: 96px !important;
	object-fit: contain;
	background: #fff;
	padding: 4px;
	display: block;
	margin: 0 auto;
	border: 0 !important;
}
.k_confirmed_als h5 {
	box-sizing: border-box;
	display: flex;
	flex: 0 0 100%;
	align-items: center;
	justify-content: center;
	min-height: 40px;
	margin: 0;
	padding: 8px 12px;
	border-radius: 8px;
	background: rgba(44, 58, 100, 0.06);
	font-size: 15px;
	line-height: 1.2;
	text-align: center;
	text-transform: uppercase;
}
@media (max-width: 991px) {
	.k_confirmed_als li { flex-basis: calc((100% - 36px) / 3); }
}
@media (max-width: 576px) {
	.k_confirmed_als { gap:10px; }
	.k_confirmed_als li { flex-basis: calc((100% - 10px) / 2); }
	.k_confirmed_als li img { max-width:120px !important; max-height:80px !important; padding:4px; }
	.k_confirmed_als h5 { font-size:13px; padding:6px 8px; }
}
</style>

<!-- key objective starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container key_div">
	
	<div class="k_cheading">
		<h1><span class="k_greencolor">DUM 2026 </span>SUPPORTED BY </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
	<p>

		<br>
		<ul class="k_confirmed_als">
			<li><a href="https://www.powermin.gov.in/" target="_blank"><img src="/images/2026/MOP.png" alt="Ministry of Power" style="border: 1px solid #aeb4b2;height: 135px;">Ministry of Power</a></li>
			<li><a href="https://www.niti.gov.in/" target="_blank"><img src="images/2026/NITIAayog1.png" alt="NITI Aayog" style="border: 1px solid #aeb4b2;height: 135px;">NITI Aayog</a></li>
			<li><a href="https://energy.rajasthan.gov.in/energy/#/home/dptHome" target="_blank"><img src="images/2026/energydepartment.png" alt="Department of Energy, Govt. of Rajasthan" style="border: 1px solid #aeb4b2;height: 135px;">Department of Energy, Govt. of Rajasthan</a></li>
			<li><a href="https://cea.nic.in/?lang=en" target="_blank"><img src="images/2026/CEAv1.png" alt="Central Electricity Authority (CEA)" style="border: 1px solid #aeb4b2;">Central Electricity Authority (CEA)</a></li>
			<li><a href="https://aida-india.org/" target="_blank"><img src="images/2026/AIDANew.png" alt="All India Discoms Association (AIDA)" style="border: 1px solid #aeb4b2;height: 135px;">All India Discoms Association (AIDA)</a></li>
		</ul>	
	</p>
	 
</div>

<div class="row dum_container key_div">
	
	<div class="k_cheading">
		<h1><span class="k_greencolor">Dum 2025 </span>Supported By </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
	<p>

		<br>
		<!-- <ul class="k_confirmed_als">
			<li><a href="https://aida-india.org/" target="_blank"><img src="images/2026/AIDANew.png" style="border: 1px solid #aeb4b2;">AIDA</a></li>
			<li><a href="#" target="_blank"><img src="images/2026/energydepartment.png" style="border: 1px solid #aeb4b2;">Energy Department of Maharashtra</a></li>
			 <li><a href="https://cea.nic.in/?lang=en" target="_blank"><img src="/images/2026/CEAv1.png" style="border: 1px solid #aeb4b2;">Central Electricity of Authority</a></li>
			</ul>	 -->

		<ul class="k_confirmed_als">
			<li><a href="https://aida-india.org/" target="_blank"><img src="images/2026/AIDANew.png" alt="AIDA" style="border: 1px solid #aeb4b2;height: 135px;">AIDA</a></li>
			<li><a href="#" target="_blank"><img src="images/2026/energydepartment.png" alt="Energy Department of Maharashtra" style="border: 1px solid #aeb4b2;height: 135px;">Energy Department of Maharashtra</a></li>
			<li><a href="https://cea.nic.in/?lang=en" target="_blank"><img src="images/2026/CEAv1.png" alt="Central Electricity Authority (CEA)" style="border: 1px solid #aeb4b2;">Central Electricity Authority (CEA)</a></li>
		</ul>	
	</p>
	 
</div>


<div class="row dum_container key_div">
	
	<div class="k_cheading">
		<h1><span class="k_greencolor">Dum 2024 </span>Supported By </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
	<p>

		<br>
		<ul class="k_confirmed_als">
			<li><a href="https://upneda.org.in/" target="_blank"><img src="images/UP Department of Energy.png" style="border: 1px solid #aeb4b2;height: 135px;">Energy Department of Uttar Pradesh</a></li>
			<li><a href="https://cea.nic.in/?lang=en" target="_blank"><img src="images/cea .jpg" style="border: 1px solid #aeb4b2;">Central Electricity Authority</a></li>
			<li><a href="https://powermin.gov.in/" target="_blank"><img src="/images/MOP.png" style="border: 1px solid #aeb4b2;height: 135px;">Ministry of Power</a></li>

			<!--<li><a href="https://www.niti.gov.in/" target="_blank"><img src="/images/NITI Aayog.png" style="border: 1px solid #aeb4b2;height: 135px;">NITI Aayog</a></li>
			 <li><a href="https://www.keralatourism.org/" target="_blank"><img src="/images/Kerala.png" style="border: 1px solid #aeb4b2;height: 135px;">Kerala Tourism</a></li>
		     -->
			 
			</ul>	
	</p>
	 
</div>




<!-- key objective ends here -->

<?php include "include/footer.php"; ?>