<div class="content">
		<div class="container">
			
				<div class="col-md-8 col-xs-12 info">
				<h3 class="single" id="event-content"><?php
				if ((isset($getallpics_query)) && ($getallpics_query)) {
					echo $getallpics_query[0]['event_name'];
				}
				  ?></h1>
				<div class="demo-gallery">
					    <ul id="lightgallery">

					    <?php
							if ($getallpics_query) {

								for ($i=0; $i < count($getallpics_query); $i++) { 
								?>
							<li data-responsive="<?php echo HTTP_PATH.$getallpics_query[$i]['event_image_path']; ?>" data-src="<?php echo HTTP_PATH.$getallpics_query[$i]['event_image_path']; ?>">
					        <a href="">
					          <img class="img-responsive" src="<?php echo HTTP_PATH.$getallpics_query[$i]['event_image_path']; ?>">
					          <!-- <div class="demo-gallery-poster">
					            <img src="<?php echo HTTP_PATH.$getallpics_query[$i]['event_image_path']; ?>">
					          </div> -->
					        </a>
					      </li>
					      <?php
						  }
						}
					       ?>
					      
					    </ul>
					    <div class="col-md-12" style="text-align: center; ">
							<nav>
							  <ul class="pagination pag">
							  <?php for ($x=1; $x <= $total_pages ; $x++) { ?>
								<li>
									<a href="<?php echo HTTP_PATH; ?>events<?php if($pagination_url != ''){ echo $pagination_url.'&'; } else { echo '?'; } ?>currentpage=<?php echo $x; ?>">
									<?php if($x == $cuttent_page_number){ ?>
										<img src="<?php echo HTTP_PATH; ?>images/blue_button.png" width="20">
									<?php } else { ?>
										<img src="<?php echo HTTP_PATH; ?>images/grey_button.png" width="20">
									<?php } ?>
									</a>
								</li>
							  <?php } ?>
							  </ul>
							</nav>
						</div>
				  </div>
			</div>


			<!-- *******************MENU START******************** -->
			<aside id="sidebar">
				<div class="widget sidemenu">
					<ul>
					<?php
					if ($event_data) {
						for ($i=0; $i < count($event_data); $i++) {
							$getcount_array = array('eventid' => $event_data[$i]['event_id']);
							$getcount_query = $db->query("SELECT COUNT(image_id) FROM tbl_events_image WHERE event_id = :eventid", $getcount_array);
					?>
						<li <?php if($eventid == $event_data[$i]['event_id']){ ?> class="current" <?php } ?> >
							<a href="<?php echo HTTP_PATH; ?>events?eventtitle=<?php echo $event_data[$i]['event_url']; ?>&eventid=<?php echo $event_data[$i]['event_id']; ?>"><?php echo $event_data[$i]['event_name']; ?>
								<span class="nr">
									<?php if($getcount_query){ echo $getcount_query[0]['COUNT(image_id)']; } ?>
								</span>
							</a>
						</li>
					<?php 
						}
					}
					?>
					</ul>
				</div>
			</aside>
			<!-- *******************MENU END******************** -->
		</div>
	</div>