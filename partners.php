<?php include "include/header.php"; ?>
<style>
/* Responsive grid and consistent logo sizing (aligned with home page) */
.k_confirmed_als {
	display: block;
	grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
	gap: 12px 18px;
	list-style: none;
	padding: 0;
	margin: 0 auto;
	align-items: start;
	justify-items: center;
	grid-auto-rows: minmax(120px, auto);
	overflow:auto
}
.k_confirmed_als li { text-align:center; margin:0; padding:6px 4px; display:table-cell !important ;
box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(44, 58, 100, 0.08) !important;
	width:0% !important
}
.k_confirmed_als li a { display:flex; flex-direction:column; align-items:center; justify-content:center; text-decoration:none; color:inherit; width:100%; }
.k_confirmed_als li img {
	max-width: 160px !important;
	max-height: 110px !important;
	width: auto !important;
	height: auto !important;
	object-fit: contain;
	/* border-radius: 6px; */
	/* box-shadow: 0 1px 6px rgba(0,0,0,0.06); */
	background: #fff;
	padding: 6px;
	display: block;
	margin: 0 auto 8px;
	border:0px !important
	/* border: 1px solid rgba(44,58,100,0.08) !important; */
}
.k_confirmed_als h5 { text-transform: uppercase; grid-column: 1 / -1; background: rgba(44,58,100,0.06); padding:8px 12px; border-radius:8px; font-size:15px; text-align:center; }
@media (max-width: 576px) {
	.k_confirmed_als { grid-template-columns: repeat(2,1fr); gap:10px; }
	.k_confirmed_als li img { max-width:120px !important; max-height:80px !important; padding:4px; }
	.k_confirmed_als h5 { font-size:13px; padding:6px 8px; }
}

/* Section spacing like home page */
.k_cheading { margin: 36px 0 12px; padding-top: 6px; }
.k_cheading h1 { margin: 0 0 10px; font-size: 30px; line-height: 1.08; }
.k_container { padding-top: 28px; padding-bottom: 28px; }
.k_cheading img {margin-top:8px; }
@media (max-width: 768px) {
	.k_cheading { margin: 24px 0 8px; }
	.k_cheading h1 { font-size: 22px; }
	.k_container { padding-top: 18px; padding-bottom: 18px; }
}
</style>
<!-- key objective starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container key_div">
	<div class="k_cheading">
		<h1><span class="k_greencolor">DUM 2025 </span> PARTNERS </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

	<BR/>
		<ul class="k_confirmed_als">
		<h5><STRONG>HOST UTILITIES</STRONG></h5>
		
		<li><a href="https://www.tatapower.com/" target="_blank"><img src="images/2024/tatapower.png" style="height: 135px;">Tata Power </a></li>
		<li><a href="https://www.mahadiscom.in/en/home/" target="_blank"><img src="images/MSEDCL_logo.jpg" style="height:120px;">MSEDCL</a></li>
		<!-- <li><a href="https://cea.nic.in/?lang=en" target="_blank"><img src="/images/2026/CEA.png" style="width: 183px;">Central Electricity of Authority</a></li> -->
		</ul>

		<!-- Knowledge Partner inserted below Host Utilities -->
		<ul class="k_confirmed_als">
		<h5><STRONG>KNOWLEDGE PARTNER</STRONG></h5>
		<li><a href="https://www.powerfoundation.org.in/" target="_blank"><img src="images/2026/PowerFoundationofIndia.jpeg">Power Foundation of India</a></li>
		</ul>

	<BR/>
		<ul class="k_confirmed_als">
		<h5><STRONG>CO HOST UTILITIES</STRONG></h5>
		<li><a href="https://www.bsesdelhi.com/web/brpl/home" target="_blank"><img src="images/utilities2019/bsess.png">BSES Rajdhani Power Limited</a></li>
		<li><a href="https://www.bsesdelhi.com/web/bypl/home" target="_blank"><img src="images/utilities2019/bsess_yahh.png">BSES Yamuna Power Limited</a></li>
		</ul>	
	
		<BR/>
		<ul class="k_confirmed_als">
		<h5><STRONG>SUPPORTED BY</STRONG></h5>
		<li><a href="https://energy.maharashtra.gov.in/en/" target="_blank"><img src="images/2026/energydepartment1.png">Energy Department of Maharashtra</a></li>
		<li><a href="https://cea.nic.in/?lang=en" target="_blank"><img src="images/2026/CEA.png">Central Electricity Authority</a></li>
		<li><a href="https://aida-india.org/" target="_blank"><img src="images/2026/AIDANew.png">All India Discoms Associations (AIDA)</a></li>
		<li><a href="https://powermin.gov.in/" target="_blank"><img src="/images/MOP.png" >Ministry of Power</a></li>
		</ul>	

		<BR/>
		<ul class="k_confirmed_als">
		<h5><STRONG>THEMATIC SESSION PARTNERS</STRONG></h5>
		<li><a href="https://www.enspar.com/" target="_blank"><img src="images/2026/Enspar.jpeg">Enspar Energy Solutions Pvt. Ltd.</a></li>
		<li><a href="https://www.impresa.ai/" target="_blank"><img src="images/2025/ImpressaFinal.png" style="height: 135px;">Impresa.ai </a></li>	
	</ul>	

		<BR/>
		<ul class="k_confirmed_als">
			<h5><STRONG>TECHNOLOGY INNOVATION PARTNERS</STRONG></h5>
			<li><a href="https://edx.com/" target="_blank"><img src="images/2026/EDXWireless.jpeg">EDX Wireless</a></li>
			<li><a href="https://apar.com/" target="_blank"><img src="/images/apar.png" style="border: 1px solid #aeb4b2; height:100px;">APAR Industries </a></li>
			<li><a href="https://kimbal.io/" target="_blank"><img src="/images/Kimbal.jpg" style="border: 1px solid #aeb4b2; height: 120px;">Kimbal </a></li>
			<li><a href="https://www.wirepas.com/" target="_blank"><img src="/images/WIREPASS.png" style="border: 1px solid #aeb4b2; height:120px;">Wirepas</a></li>
			<li><a href="https://aewinfra.com/" target="_blank"><img src="images/2024/allied.png" style="border: 1px solid #aeb4b2; height: 120px;">Allied Engineering Works Limited</a></li>	
			<li><a href="https://stelmec.com/" target="_blank"><img src="/images/stelmac.png" style="border: 1px solid #aeb4b2; height: 120px;">Stelmec</a></li>	
			<li><a href="https://www.megger.com/en" target="_blank"><img src="/images/2025/Megger.jpeg" style="border: 1px solid #aeb4b2;">Megger India Pvt Ltd</a></li>
			<li><a href="https://www.eaton.com/in/en-us.html" target="_blank"><img src="/images/2024/eaton.png" style="border: 1px solid #aeb4b2;">Eaton </a></li>
			<li><a href="https://trilliant.com/" target="_blank"><img src="/images/2025/Trilliant.jpeg" style="border: 1px solid #aeb4b2;">Trilliant </a></li>
			<li><a href="https://radius.co.in/" target="_blank"><img src="/images/2026/Radius.jpeg" style="border: 1px solid #aeb4b2; height:100px;">Radius Synergies International Private Limited</a></li>
		</ul>	

</div>	

<div class="row dum_container key_div">
	<div class="k_cheading">
		<h1><span class="k_greencolor">DUM 2024 </span> PARTNERS </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
	<BR/>
		<ul class="k_confirmed_als">
		<h5><STRONG>HOST UTILITIES</STRONG></h5>
		
		<li><a href="https://uppcl.org/uppcl/hi/" target="_blank"><img src="images/2024/uppcl.png" style="height:155px;"> UPPCL</a></li> 
		<li><a href="https://uppcl.org/uppcl/hi/" target="_blank"><img src="/images/UPREV_Logo D.png" style="height: 135px;">UPREV </a></li>
		</ul>
		
		<br>
		<ul class="k_confirmed_als">
		<h5><STRONG>CO HOST UTILITIES</STRONG></h5>
		<li><a href="https://www.bsesdelhi.com/web/brpl" target="_blank"><img src="images/bsesllt.png" style="width:180px; height: 140px;">BSES Rajdhani Power Limited </a></li>
		<li><a href="https://www.tatapower.com/" target="_blank"><img src="images/2024/tatapower.png" style="height: 135px;">Tata Power </a></li>
		<li><a href="https://www.noidapower.com/" target="_blank"><img src="images/utilities2019/npcl.png" style="width:180px; height: 120px;">NPCL</a></li>
		<li><a href="https://www.bsesdelhi.com/web/bypl" target="_blank"><img src="/images/bses.png" style="width:180px; height: 140px;">BSES Yamuna Power Limited</a></li>
		<li><a href="https://www.cesc.co.in/home" target="_blank"><img src="images/2024/CESC_Logo.svg.png" style="height: 135px;">CESC Limited</a></li>		
		</ul>
		
         <br>	 
	    <ul class="k_confirmed_als">	
		<h5><strong>SUPPORTED BY</strong></h5>
			<li><a href="https://upneda.org.in/" target="_blank"><img src="/images/UP Department of Energy.png" alt="" style="height: 135px;">UP Department of Energy</a></li>
			<li><a href="https://powermin.gov.in/" target="_blank"><img src="/images/MOP.png" style="width: 183px;">Ministry of Power</a></li>
			<li><a href="https://cea.nic.in/?lang=en" target="_blank"><img src="/images/CEA.jpg" style="width: 183px;">Electricity Authority</a></li>
			<li><a href="https://www.niti.gov.in/" target="_blank"><img src="/images/NITI Aayog.png" style="height: 135px;">NITI Aayog</a></li>

        <!--<li><a href="https://www.niti.gov.in/" target="_blank"><img src="/images/NITI Aayog.png" style="height: 135px;">NITI Aayog</a></li>
	    <li><a href="https://www.keralatourism.org/" target="_blank"><img src="/images/Kerala.png" style="height: 135px;">Kerala Tourism</a></li>-->
		</ul>
		
		<br>

<ul class="k_confirmed_als">

			<h5><b>Powered by Partner</b></h5>

			<li><a href="https://www.insolutions.in/" target="_blank"><img src="/images/2024/inventive_logo.png" style="height: 135px;">Inventive Software Solutions Private Limited </a></li>
			
			</ul> 

			<ul class="k_confirmed_als">
			<h5><b>Knowledge Partners</b></h5>
			<li><a href="https://www.giz.de/en/html/index.html" target="_blank"><img src="/images/Giz & German Cooperation.jpg" style="height: 135px;">GIZ GmbH, Germany</a></li>
			<li><a href="https://www.epri.com/" target="_blank"><img src="images/epri.jpg" alt="" style="height: 135px;">EPRI, USA</a></li>
			<li><a href="https://www.nrel.gov/index.html" target="_blank"><img src="images/NREL.jpg" alt="" style="height: 135px;">NREL, USA</a></li>
			</ul> 
		
		<br/>
				
		
					<ul class="k_confirmed_als">
					<h5><b>Lunch Reception Partner</b></h5>
					<li><a href="https://lteindia.in/" target="_blank"><img src="/images/2024/lakshmi.png" style="border: 1px solid #aeb4b2; height:100px;">Lakshmi Transformer & Electricals </a></li>		
					</ul>
					
		<br/>

		<ul class="k_confirmed_als">
			<h5><b>Thematic Session Partners</b></h5>
			<li><a href="https://www.polarisgrids.com/" target="_blank"><img src="images/2024/Polaris-logo.svg" style="border: 1px solid #aeb4b2; height: 120px;">Polaris Smart Metering</a></li>
			<li><a href="https://ltptd-des.com/" target="_blank"><img src="/images/LT.png" style="border: 1px solid #aeb4b2; height:120px;">L&T Digital Energy Solutions - Power, Transmission and Distribution</a></li>
		</ul> 
		<br/>		
		<ul class="k_confirmed_als">
			<h5><b>Technology Innovation Partners</b></h5>
			<li><a href="https://trilliant.com/" target="_blank"><img src="/images/Exhibitors/2019/Trilliant.png" style="border: 1px solid #aeb4b2;">Trilliant Networks, Inc. </a></li>
			<li><a href="https://havells.com/" target="_blank"><img src="images/2024/havells.png" style="border: 1px solid #aeb4b2; height: 120px;">Havells India Pvt Ltd</a></li>
			<li><a href="https://www.phoenixcontact.com/en-in/" target="_blank"><img src="/images/Logo - Phoenix Contact.jpg" style="height:100px;">Phoenix Contact</a></li>
			<!--<li><a href="https://apar.com/" target="_blank"><img src="/images/apar.png" style="border: 1px solid #aeb4b2; height:100px;">APAR Industries </a></li>
			<li><a href="https://www.se.com/in/en/" target="_blank"><img src="/images/Exhibitors/2019/schneider.png" style="border: 1px solid #aeb4b2; height:120px;">Schneider Electric </a></li> -->			
			<li><a href="https://stelmec.com/" target="_blank"><img src="/images/stelmac.png" style="border: 1px solid #aeb4b2; height: 120px;">Stelmec</a></li>				
			<li><a href="https://kimbal.io/" target="_blank"><img src="/images/Kimbal.jpg" style="border: 1px solid #aeb4b2; height: 120px;">Kimbal </a></li>
			<li><a href="https://www.dnv.com/" target="_blank"><img src="/images/DNV.jpg" style="border: 1px solid #aeb4b2;">DNV </a></li>			
			<li><a href="https://www.thesaicomputers.com/" target="_blank"><img src="/images/SaiComputers.png" style="border: 1px solid #aeb4b2; height: 120px;">Sai Computers </a></li>
			<li><a href="https://www.eaton.com/in/en-us.html" target="_blank"><img src="/images/2024/eaton.png" style="border: 1px solid #aeb4b2;">Eaton </a></li>
			<li><a href="https://aewinfra.com/" target="_blank"><img src="images/2024/allied.png" style="border: 1px solid #aeb4b2; height: 120px;">Allied Engineerings</a></li>			
			<!--<li><a href="https://www.polarisgrids.com/" target="_blank"><img src="images/2024/Polaris-logo.svg" style="border: 1px solid #aeb4b2; height: 120px;">Polaris Grids</a></li>-->		
		</ul> 
		
	<br/>
					<ul class="k_confirmed_als">
					<h5><b>Bronze Partners</b></h5>
					<li><a href="#" target="_blank"><img src="/images/2024/modern.png" style="border: 1px solid #aeb4b2; height:100px;">Modern Transformer Pvt Ltd </a></li>	
<li><a href="https://radius.co.in/" target="_blank"><img src="/images/2024/radius.png" style="border: 1px solid #aeb4b2; height:100px;">Radius Synergies International Private Limited</a></li>					
					</ul>
		
		
			<!-- <br>

			<ul class="k_confirmed_als">
			<h5><b>Platinum Exhibitors</b></h5>
			<li><a href="https://havells.com/" target="_blank"><img src="images/2024/havells.png" style="border: 1px solid #aeb4b2; height: 120px;">Havells India Pvt Ltd</a></li>
			<li><a href="https://www.3mindia.in/3M/en_IN/company-in/" target="_blank"><img src="images/2024/sm.png" style="border: 1px solid #aeb4b2; height: 120px;">SM Systems</a></li>
			<li><a href="https://www.tatapower.com/" target="_blank"><img src="/images/tatapower.png" style="border: 1px solid #aeb4b2; height: 120px;">TATA Power</a></li>
			<li><a href="https://www.polarisgrids.com/" target="_blank"><img src="images/2024/Polaris-logo.svg" style="border: 1px solid #aeb4b2; height: 120px;">Polaris Grids</a></li>
			</ul>		
		<br/>				
		<ul class="k_confirmed_als">
			<h5><b>Gold Partner</b></h5>
			<li><a href="https://www.phoenixcontact.com/en-in/" target="_blank"><img src="/images/Logo - Phoenix Contact.jpg" style="height:100px;">Phoenix Contact</a></li>
			<li><a href="https://apar.com/" target="_blank"><img src="/images/apar.png" style="border: 1px solid #aeb4b2; height:100px;">APAR Industries </a></li>
			<li><a href="https://stelmec.com/" target="_blank"><img src="/images/stelmac.png" style="border: 1px solid #aeb4b2; height: 120px;">Stelmac</a></li>
			<li><a href="https://kimbal.io/" target="_blank"><img src="/images/Kimbal.jpg" style="border: 1px solid #aeb4b2; height: 120px;">Kimbal </a></li>	
			<li><a href="https://www.thesaicomputers.com/" target="_blank"><img src="/images/SaiComputers.png" style="border: 1px solid #aeb4b2; height: 120px;">Sai Computers </a></li>
			<li><a href="https://aewinfra.com/" target="_blank"><img src="images/2024/allied.png" style="border: 1px solid #aeb4b2; height: 120px;">Allied Engineerings</a></li>
			<li><a href="https://www.securemeters.com/" target="_blank"><img src="images/2024/secure.png" style="border: 1px solid #aeb4b2; height: 120px;">Secure Meters</a></li>
			<li><a href="https://bentecindia.com/" target="_blank"><img src="images/2024/bentec.png" style="border: 1px solid #aeb4b2; height: 120px;">Bentec</a></li>
			<li><a href="https://www.compaqinternational.com/" target="_blank"><img src="/images/Compaq.jpg" style="border: 1px solid #aeb4b2; height:123px;">Compaq International</a></li>
			<li><a href="https://www.tauruspowertronics.com/" target="_blank"><img src="/images/Exhibitors/TAURUS LOGO.jpg" alt="Tauras Power Tronics">Tauras Power Tronics</a></li>			
			<li><a href="https://www.powerxchange.io/" target="_blank"><img src="/images/2024/powrChange.jpeg" alt="Tauras Power Tronics">Power Xchange</a></li>
			<li><a href="https://www.noidapower.com/" target="_blank"><img src="images/utilities2019/npcl.png">Noida Power Company Ltd.</a></li>
			<li><a href="https://genuspower.com/" target="_blank"><img src="http://dumindia.in/images/Exhibitors/2019/genus.png">GENUS Power Infrastructures Limited</a></li>		
		</ul> 	-->	
	
	<!--<div class="k_cheading">
		<h1><span class="k_greencolor">DUM 2023 </span> PARTNERS </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
	<BR/>
	<ul class="k_confirmed_als">
			<h5><STRONG>POWERED BY PARTNER</STRONG></h5>
			<li><a href="https://aws.amazon.com/?nc2=h_lg" target="_blank"><img src="/images/AWS_logo_RGB.png" style="border: 1px solid #aeb4b2; height:133px;">Amazon Web Services</a></li>
			
			</ul>
	<BR/>
	<ul class="k_confirmed_als">
			<h5><STRONG>THEMATIC SESSION PARTNERS</STRONG></h5>
			<li><a href="https://www.rti.org/" target="_blank"><img src="/images/rti.jpg" style=" height:100px;">RTI INTERNATIONAL</a></li>
			<li><a href="https://www.wirepas.com/" target="_blank"><img src="/images/WIREPASS.png" style="border: 1px solid #aeb4b2; height:100px;">Wirepas</a></li> 
			<li><a href="https://www.lntecc.com/we-are/our-businesses/power-transmission-distribution/" target="_blank"><img src="/images/LT.png" style="border: 1px solid #aeb4b2; height:120px;">L&T </a></li>
			</ul>
			<BR/>
			<ul class="k_confirmed_als">
			<h5><STRONG>TECHNOLOGY INNOVATION PARTNERS</STRONG></h5>
			<li><a href="https://www.phoenixcontact.com/en-in/" target="_blank"><img src="/images/Logo - Phoenix Contact.jpg" style="height:100px;">Phoenix Contact</a></li>
			 <li><a href="https://apar.com/" target="_blank"><img src="/images/apar.png" style="border: 1px solid #aeb4b2; height:100px;">APAR Industries </a></li>
			 <li><a href="https://www.se.com/in/en/" target="_blank"><img src="/images/Exhibitors/2019/schneider.png" style="border: 1px solid #aeb4b2; height:120px;">Schneider Electric </a></li> 
			 <li><a href="https://trilliant.com/" target="_blank"><img src="/images/Exhibitors/2019/Trilliant.png" style="border: 1px solid #aeb4b2;">Trilliant Networks, Inc. </a></li>
			 <li><a href="https://www.dnv.com/" target="_blank"><img src="/images/DNV.jpg" style="border: 1px solid #aeb4b2;">DNV </a></li>
			</ul> -->
	<!--<div class="k_cheading">
		<h1><span class="k_greencolor">DUM 2022 </span> PARTNERS </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

			<br>
			<ul class="k_confirmed_als">
			<h5><STRONG>HOST UTILITIES</STRONG></h5>
			
			<li><a href="https://www.tatapower.com/" target="_blank"><img src="/images/tatapower.png" style="height:133px;">TATA POWER </a></li>
<li><a href="https://www.tpcentralodisha.com/" target="_blank"><img src="images/TPCODL.jpg" style=" height:133px;">Tata Power Central Odisha Distribution Limited</a></li>
			</ul>
			<ul class="k_confirmed_als">
			<h5><STRONG>CO-HOST UTILITIES</STRONG></h5>			
			<li><a href="https://www.tatapower-ddl.com/billpay/paybillonline.aspx" target="_blank"><img src="/images/tataddl.jpg" style=" height:133px;">TATA POWER DDL</a></li>
			<li><a href="https://www.tpnodl.com/" target="_blank"><img src="images/TPNODL.jpg" style=" height:133px;">Tata Power Northern Odisha Distribution Limited</a></li>
			  <li><a href="https://www.tpsouthernodisha.com/" target="_blank"><img src="images/TPSODL.jpg" style=" height:133px;">Tata Power Southern Odisha Distribution Limited</a></li>
			<li><a href="https://www.tpwesternodisha.com/" target="_blank"><img src="images/TPWODL.jpg"  style=" height:133px;">Tata Power Western Odisha Distribution Limited</a></li>
			<li><a href="https://www.bsesdelhi.com/web/bypl/home#loaded" target="_blank"><img src="images/utilities2019/bsess_yahh.png" style=" height:133px;">BSES Yamuna Private Limited</a></li>
			<li><a href="https://www.bsesdelhi.com/web/brpl/home#loaded" target="_blank"><img src="images/utilities2019/bsess.png" style=" height:133px;">BSES Rajdhani Private Limited</a></li> 
			
			</UL>
			
		<ul class="k_confirmed_als">
		    <h5><STRONG>PLATINUM PARTNER</STRONG></h5>
			<li><a href="https://aws.amazon.com/ " target="_blank"><img src="/images/AWS_logo_RGB.png" style=" height:120px;">Amazon Web Services</a></li>
			<li><a href="https://fluentgrid.com/" target="_blank"><img src="/images/FluentGrid.jpg" style=" height:120px;">Fluentgrid Limited </a></li>
		
			</ul>
			<ul class="k_confirmed_als">
			<h5><STRONG>THEMATIC SESSION PARTNERS</STRONG></h5>
			<li><a href="https://www.rti.org/" target="_blank"><img src="/images/rti.jpg" style=" height:100px;">RTI INTERNATIONAL</a></li>
			<li><a href="https://www.gridspertise.com/" target="_blank"><img src="/images/Gridspertise_claim_flag_flat_color (1).jpg" style=" height:100px;">Gridspertise </a></li>
			
		
			</ul>
			<ul class="k_confirmed_als">
		    <h5><STRONG>TECHNOLOGY INNOVATION PARTNER</STRONG></h5>
			<li><a href="https://www.auto-grid.com/" target="_blank"><img src="/images/ag-full-color.png" style=" height:100px;">Autogrid</a></li>
			
			</ul>
			
</div> -->




<!-- key objective ends here -->

<?php include "include/footer.php"; ?>