<div class="content">
	<div class="container">
		<div class="col-md-12 info">
			<h3>Latest News</h3>
			<section class="posts-con">
			<?php
				if ($news_data) {
					for ($i=0; $i < count($news_data); $i++) {

						$day = date("d",strtotime($news_data[$i]['news_date']));
						$month = date("m",strtotime($news_data[$i]['news_date']));
						$monthName = date("F", mktime(0, 0, 0, $month, 10));
						$current_date = date('Y-m-d');
			?>
				<div class="newsitem"  id="<?php echo $news_data[$i]['news_heading'];?>">
					<article>
						<div class="current-date date-style <?php if($news_data[$i]['news_date'] <= $current_date){ ?> archieved-event <?php } ?>">
							<p><?php echo $monthName;?></p>
							<p class="date"><?php echo $day; ?></p>
							
						</div>
						<div class="info">
							<h3><?php echo $news_data[$i]['news_heading'];?></h3>
							<div class="col-md-12 nopadding adimg">
								<img src="<?php echo HTTP_PATH.$news_data[$i]['news_image']; ?>" width="720">
							</div>
							<div class="clearfix">&nbsp;</div>
							<p class="info-line"><span class="time"><?php echo $news_data[$i]['news_time']; ?></span><span class="place"><?php echo $news_data[$i]['news_location']; ?></span></p>
							<p class="desc-limit">
								<?php echo excerpt($news_data[$i]['news_description'], 140);?>
								&nbsp;
								<a href="<?php echo HTTP_PATH; ?>read-more/<?php echo $news_data[$i]['news_url']; ?>">Read More >>></a>
							</p>
						</div>
					</article>
				</div>
				<?php
					}
				}
				?>
			</section>
		</div>
		<div class="col-md-12" style="text-align: center; ">
			<nav>
			  <ul class="pagination">
				<li><a href="<?php echo HTTP_PATH ?>news?currentpage=1" aria-label="First" title="First"><i class="fa fa-angle-left"></i></a></li>
					<?php for ($x=1; $x <= $total_pages ; $x++) { if(($x <= $showmaxpagelimit) && ($x >= $showminpagelimit)){ ?><li><a href="<?php echo HTTP_PATH ?>news?currentpage=<?php echo $x ?>" <?php if($cuttent_page_number == $x){ ?> class="activepagination" <?php } ?> ><?php echo $x ?></a></li><?php } } ?>
				<li><a href="<?php echo HTTP_PATH ?>news?currentpage=<?php echo $total_pages ?>" aria-label="Last" title="Last"><i class="fa fa-angle-right"></i></a></li>
			  </ul>
			</nav>
		</div>
		<div class="thenote">
			<p class="upcoming-note">Upcoming events</p>
			<p class="archival-note">Archival events</p>
		</div>
	</div>
	<div class="clearfix">&nbsp;</div>
	<!-- / container -->
</div>