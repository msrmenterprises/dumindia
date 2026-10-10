<?php include "include/header.php"; ?>

<style>
.agenda-actions {
	display: flex;
	justify-content: center;
	margin: 0 0 16px;
}
.agenda-open-button {
	display: inline-block;
	padding: 12px 22px;
	border-radius: 4px;
	background: #8cc63e;
	color: #fff !important;
	font-size: 16px;
	font-weight: 700;
	text-decoration: none;
}
.agenda-open-button:hover,
.agenda-open-button:focus {
	background: #76ae32;
	color: #fff !important;
	text-decoration: none;
}
.agenda-viewer {
	display: block;
	width: 100%;
	height: 1000px;
	border: 1px solid #dfe3e8;
	border-radius: 4px;
	background: #f5f5f5;
}
@media (max-width: 767px) {
	.agenda-viewer {
		height: 80vh;
		min-height: 650px;
	}
}
</style>

<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container key_div">
	<div class="k_cheading">
		<h1><span class="k_greencolor">DUM 2026 AGENDA</span></h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

	<div class="agenda-actions">
		<a class="agenda-open-button" href="https://dumindia.in/images/2026/DUM2026At%20aGlance09oct.pdf" target="_blank" rel="noopener noreferrer">
			Download Agenda
		</a>
	</div>

	<iframe class="agenda-viewer" src="https://dumindia.in/images/2026/DUM2026At%20aGlance09oct.pdf" title="DUM 2026 Conference Agenda">
		Your browser cannot display the agenda PDF. Use the button above to open it in a new tab.
	</iframe>
</div>

<?php include "include/footer.php"; ?>
