<?php $slider_data = $db->query("SELECT * FROM tbl_slider"); ?>
<style type="text/css">
	.slider-con .bx-pager-item a {
		width: 16px;
		text-indent: -999em;
		height: 17px;
		display: block;
		background: url(<?php echo HTTP_PATH; ?>images/bg_slider_nav_2.png) no-repeat;
	}
	.slider .bx-pager-item a {
    display: block;
    background: url(<?php echo HTTP_PATH; ?>images/bg_slider_nav.png) no-repeat;
    height: 13px;
    width: 12px;
    text-indent: -999em;
}
</style>
<div class="slider">
	<ul class="bxslider">
        <?php 
        if ($slider_data) {
           for ($i=0; $i < count($slider_data); $i++) {
         ?>
		<li style="background:url(<?php echo HTTP_PATH.$slider_data[$i]['slider_main_img']; ?>)">
			<div class="container">
				<div class="info">
					<h2><?php echo $slider_data[$i]['slider_heading_one']; ?> <br><span><?php echo $slider_data[$i]['slider_heading_two']; ?></span></h2>
					<!-- <a href="#">Check out our new programs</a> -->
				</div>
			</div>
		</li>
		<?php 
             }
         }
		?>
	</ul>
	<div class="bg-bottom"></div>
	<!-- <div class="bx-controls bx-has-pager bx-has-controls-direction"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link active">1</a></div></div><div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next disabled" href="">Next</a></div></div> -->
</div>