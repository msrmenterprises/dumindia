<style>
	.key_div h3{font-size:18px;}

</style>
<?php include "include/header.php"; ?>


<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container key_div">
    <h1 class="key_head">Our Gallery</h1>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#photos" role="tab" data-toggle="tab">Photos</a></li>
        <li><a href="#videos" role="tab" data-toggle="tab">Videos</a></li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" style="width:100%">
        <div class="tab-pane fade in active" id="photos">
            <p>This is the <strong>Photos</strong> tab. Add your photo gallery content here.</p>
            <!-- Example photo -->
            <img src="images/sample-photo.jpg" alt="Sample Photo" class="img-responsive" style="max-width:300px;">
        </div>
        <div class="tab-pane fade" id="videos">
            <p>This is the <strong>Videos</strong> tab. Add your video gallery content here.</p>
            <!-- Example video embed -->
            <div class="embed-responsive embed-responsive-16by9" style="max-width:560px;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery("#gallery").unitegallery();

	});

</script>
<!-- Make sure jQuery and Bootstrap 3 JS are included in your header or before </body> -->
<!-- Example (if not already in header.php): -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<?php include "include/footer.php"; ?>
