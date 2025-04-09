<?php include "include/header.php"; ?>

<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container">
	<div class="k_cheading">
		<h1><span class="k_greencolor">DUM 2024 AGENDA</span> </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
	<br>
	<!--<div class="k_register k_contact_us">-->
	<iframe src="dumpdf/Dum24.pdf" style="width:90%;height:500px;"></iframe><br><br>
		<!--<div class="col-sm-12" style="text-align: center;">
			<iframe src="http://dumindia.in/dumpdf/Dum 2024 Agenda Abridged.pdf" style="width:100%;height:700px;"></iframe><br><br>
			
			<!--<p style="font-size:17px; text-align:center;"><b>Agenda of DUM 2024 will be updated closer to the Program on Website. To Participate, please write to Organizers at <br/> <a href="mailto:Dum@Indiasmartgrid.org">Dum@Indiasmartgrid.org</a>
		</p>
		</div>-->
	<!--</div>
	<br>
	<br> 
	
</div>-->




<?php include "include/footer.php"; ?>

<script>
	$("#tab1").click(function()
	{
		$("#table1").css('display','block');
		$("#table2").css('display','none');
	});
	$("#tab2").click(function()
	{
		$("#table2").css('display','block');
		$("#table1").css('display','none');
	});
</script>