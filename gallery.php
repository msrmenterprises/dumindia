<style>
	.key_div h3{font-size:18px;}

</style>
<?php include "include/header.php"; ?>
<!-- Bootstrap 5 JS (include before </body> or at the end of header.php if possible) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container key_div">

    <h1 class="key_head">Our Gallery</h1>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs" id="galleryTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button" role="tab" aria-controls="photos" aria-selected="true">Photos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab" aria-controls="videos" aria-selected="false">Videos</button>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" id="galleryTabContent" style="width:100%">
        <div class="tab-pane fade show active" id="photos" role="tabpanel" aria-labelledby="photos-tab">
            <p>This is the <strong>Photos</strong> tab. Add your photo gallery content here.</p>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
            <p>This is the <strong>Videos</strong> tab. Add your video gallery content here.</p>
        </div>
    </div>
</div>


<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery("#gallery").unitegallery();

	});

</script>


<?php include "include/footer.php"; ?>
