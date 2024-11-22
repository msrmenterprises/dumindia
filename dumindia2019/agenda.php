<?php include "include/header.php"; ?>

<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container">
	<div class="k_cheading">
		<h1><span class="k_greencolor">DUM 2019 AGENDA</span> </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
	<br>

	<div class="k_register k_contact_us">
		<div class="col-sm-12" style="text-align: center;">
		
		
			<iframe src="http://dumindia.in/dumpdf/DUM2019Agenda(Final).pdf" style="width:100%;height:900px;"></iframe><br><br>
		</div>
	</div>
	<br>
	<br>
	
</div>




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