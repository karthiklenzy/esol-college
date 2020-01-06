<div class="modal fade" id="myModal">
  <div class="modal-dialog">
	<div class="modal-content">
	<div class="modal-styled">
	<a data-dismiss="modal" style="text-align: right;padding: 0px 4px 0px 0px;height: 0px;    margin-top: -1px;cursor: pointer">x</a></div>
        <div class="modal-header" style="background:#f6b33d -moz-linear-gradient(center top , #f6b33d 5%, #d29105 100%) repeat scroll 0 0;">

          <img src="<?= HTTP_PATH; ?>images/esol.jpg">
        </div>
        
      </div>
    </div>
</div>
<section class="posts">
	<div class="container">
		<article>
			<div class="pic"><img width="121" src="images/2.png" alt=""></div>
			<div class="info">
				<h3>Our Vision</h3>
				<p>At ESOL, your child will experience a learning atmosphere like no other. With courses designed specifically to cater to the age, skill and competence specifications, we provide your child with the most sophisticated syllabi.</p>
			</div>
		</article>
		<article>
			<div class="pic"><img width="121" src="images/3.png" alt=""></div>
			<div class="info">
				<h3>Our Mission</h3>
				<p>ESOL is a space where your child will grow and thrive. They will be nurtured and moulded by the loving hands of our teachers and their language skill will know no boundaries.</p>
			</div>
		</article>
	</div>
	<!-- / container -->
</section>

<section class="news">
	<div class="container">
		<h2>Latest news</h2>
		<?php 
		if ($news_data) {
			for ($i=0; $i < count($news_data); $i++) { 
			$day = date("d",strtotime($news_data[$i]['news_date']));
			$month = date("m",strtotime($news_data[$i]['news_date']));
			$year = date("y",strtotime($news_data[$i]['news_date']));
			$monthName = date("F", mktime(0, 0, 0, $month, 10));	
            $desc = substr($news_data[$i]['news_description'], 0, 25);

		?>
		<article>
			<div class="pic crop crop-square"><img src="<?php echo HTTP_PATH.$news_data[$i]['news_image']; ?>" alt="" width="200px" height="140px"></div>
			<div class="info">
				<h4><?php echo $news_data[$i]['news_heading']; ?></h4>
				<p class="date"><?php echo $day." ".$monthName." 20".$year; ?>, @ <?php echo $news_data[$i]['news_location']; ?></p>
				<p><?php echo $desc."..."; ?></p>
				<a class="more" href="<?php echo HTTP_PATH; ?>news#<?php echo $news_data[$i]['news_heading']; ?>">Read more</a>
			</div>
		</article>
		
		<?php 
			}
		}
		?>
		<div class="btn-holder">
			<a class="btn" href="<?php echo HTTP_PATH; ?>news">See more news</a>
		</div>
	</div>
	<!-- / container -->
</section>

<section class="events">
	<div class="container">
		<h2>Our Events</h2>
		<?php 
		$events_data = $db->query("SELECT * FROM tbl_events ORDER BY event_date ASC LIMIT 4");
		if ($events_data) {
			for ($i=0; $i < count($events_data); $i++) { 
			$day = date("d",strtotime($events_data[$i]['event_date']));
			$month = date("m",strtotime($events_data[$i]['event_date']));
			$monthName = date("F", mktime(0, 0, 0, $month, 10));
			

			
		 ?>
		<article>
			<div class="current-date">
				<p><?php echo $monthName;?></p>
				<p class="date"><?php echo $day;?></p>
			</div>
			<div class="info upcoming_events">
				<h4><?php echo $events_data[$i]['event_name'];?></h4>
				<p><?php echo $events_data[$i]['event_description'];?></p>
				<!-- <a class="more" href="#">Read more</a> -->
			</div>
		</article>
		<?php 
		      }
		  }
		?>
		<div class="btn-holder events_btn">
			<a class="btn btn-primary" href="<?php echo HTTP_PATH; ?>events" style="background: rgb(51, 120, 183); color: white;">See all events</a>
		</div>
	</div>
	<!-- / container -->
</section>
<div class="container">
	<a href="#fancy" class="info-request">
		<span class="holder">
			<span class="title">Make an inquiry</span>
			<span class="text">Do you have questions? Fill the form and get an answer!</span>
		</span>
		<span class="arrow"></span>
	</a>
</div>