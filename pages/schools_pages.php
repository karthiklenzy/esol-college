 <section class="posts">
	<div class="container">
		<div class="col-md-12">
			<div class="info">
			<h3>Courses</h3>
			<p>
				<b>When you partner with ESOL College, we help you identify the qualification that fits you!</b>
			</p>
			<p>
				You may be a complete beginner, student, professional or even a fluent speaker desiring to take your language skills to the next level; at ESOL there is a course that suits everyone’s requirements.
			</p>
			
				<img src="<?php echo HTTP_PATH; ?>images/course/bd0349ba700b973aeb45701baf2fc567.jpg" class="cntr" align="middle" width=400px>
			
			<hr>
			<?php if(isMobile()){ ?>
    			<button type="button" class="abt-btn collapsed sm-device hght" data-toggle="collapse" data-target="#demo">Courses<i class="fa fa-chevron-down"></i></button>
				<div id="demo" class="collapse">
				<div class="col-lg-4 col-lg-offset-2 col-md-6 col-xs-12">
			<aside id="sidebar" class="aside_width">
				<div class="widget sidemenu">
					<ul>
					<?php 
					if ($course_names) {
						for ($x=0; $x < count($course_names); $x++) {
					?>
						<li <?php if($course_data){ if($course_data[0]['course_url'] == $course_names[$x]['course_url']){ ?> class="current" <?php } } ?> id="<?php echo $course_names[$x]['course_name']; ?>"><a href="<?php echo HTTP_PATH; ?>courses/<?php echo $course_names[$x]['course_url']; ?>"><?php echo $course_names[$x]['course_name'];?></a></li>

					<?php
						}
					}
					 ?>	

					</ul>
				</div>
			</aside> 
			</div>
				</div>
			<?php } ?>

		  	<div class="col-md-6 col-xs-12 stylul">
				<div class="slider-con">
					<div class="bx-wrapper" style="max-width: 100%;">
						<div class="bx-viewport" style="width: 98%; overflow: hidden; position: relative;" id="course-content">
							
							<div>
							<?php 
								if ($course_data) {
									echo html_entity_decode($course_data[0]['course_description']); 
								}
							?>	
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-lg-offset-2 col-md-6 col-xs-12 lg-device">
			<aside id="sidebar" class="aside_width">
				<div class="widget sidemenu">
					<ul>
					<?php 
					if ($course_names) {
						for ($x=0; $x < count($course_names); $x++) {
					?>
						<li <?php if($course_data){ if($course_data[0]['course_url'] == $course_names[$x]['course_url']){ ?> class="current" <?php } } ?> id="<?php echo $course_names[$x]['course_name']; ?>"><a href="<?php echo HTTP_PATH; ?>courses/schools/<?php echo $course_names[$x]['course_url']; ?>"><?php echo $course_names[$x]['course_name'];?></a></li>

					<?php
						}
					}
					 ?>	

					</ul>
				</div>
			</aside> 
			</div>
			<div>
				
			</div>
		</div>
	</div>
	<!-- / container -->
</section>
