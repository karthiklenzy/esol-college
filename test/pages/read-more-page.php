<div class="content">
	<div class="container">
		<div class="col-md-12 info" id="more-content">
				
			<?php
				if ($news_data) {
					for ($i=0; $i < count($news_data); $i++) {
						$name = $news_data[$i]['news_heading'];
						$day = date("d",strtotime($news_data[$i]['news_date']));
						$month = date("m",strtotime($news_data[$i]['news_date']));
						$monthName = date("F", mktime(0, 0, 0, $month, 10));
			?>  
			    <h3><?php echo $name;?></h3>
			    <section class="posts-con">
				<div class="newsitem">
					<article>
						<div class="info">
							<!-- <h3><?php echo $news_data[$i]['news_heading'];?></h3> -->
							<div class="col-md-12 nopadding adimg">
								<img src="<?php echo HTTP_PATH.$news_data[$i]['news_image']; ?>" width="720">
							</div>
							<div class="clearfix">&nbsp;</div>
							<p class="info-line"><span class="time"><?php echo $news_data[$i]['news_time']; ?></span><span class="place"><?php echo $news_data[$i]['news_location']; ?></span><span class="calender"><?php echo $news_data[$i]['news_date']; ?></span></p>
							<p style="text-align: justify;">
								<?php echo $news_data[$i]['news_description'];?>
							</p>
						</div>
						<a class="btn blue" href="<?php echo HTTP_PATH; ?>news" style="margin-top: 15px;"><< Back</a>
					</article>
				</div>
				<?php
					}
				}
				?>
			</section>
		</div>
		<!-- <div class="thenote">
			<p class="upcoming-note">Upcoming events</p>
			<p class="archival-note">Archival events</p>
		</div> -->
	</div>
	<div class="clearfix">&nbsp;</div>
	<!-- / container -->
</div>