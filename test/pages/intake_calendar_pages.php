<div class="content">
	<div class="container">
		<div class="col-md-12">
			<section class="posts">
				<div class="info">
					<h3>Intakes</h3>
					<p>The intake calendar shows the dates where placement tests for new students will take place. During the placement test process, the students will face a verbal test and will be placed in the most appropriate level according to their knowledge level. The same day, information on class starting date and academic process will be conveyed to the students and parents along with the stationary list with the holiday notice calendar.</p>
					
					<div class="row">
						<div class="col-md-12">
						<table class="table table-hover">
							  <thead>
							    <tr style="background: #0866a7;color: white;">
							      <th scope="col">Intake date</th>
							      <th scope="col">Start time</th>
							      <th scope="col">End time</th>
							      <th scope="col">Location</th>
							    </tr>
							  </thead>
							  <tbody>
							  <?php if ($calendar_data) {
							  		for ($x=0; $x < count($calendar_data); $x++) { 
							  			
							  	 ?>
							    <tr>
							      <th scope="row"><?php echo $calendar_data[$x]['calendar_date']; ?></th>
							      <td><?php echo $calendar_data[$x]['calendar_start_time']; ?></td>
							      <td><?php echo $calendar_data[$x]['calendar_end_time']; ?></td>
							      <td><?php echo $calendar_data[$x]['calendar_location']; ?></td>
							      
							    </tr>
							   <?php }}?>
							  </tbody>
							</table>	
						</div>
						
					</div>
					
				</div>

				
			</section>
			<!--  Calendar Code  -->
			<section class="posts" style="padding-bottom: 20px;">
				<div class="info">
					<h3>Semester Calendar</h3>
					<p>The calendar in the bottom has highlighted the dates where classes will not be held. Apart from the highlighted days, classes will be held on their allocated date irrespective of the day being a public holiday, a Poya day or mercantile holiday.</p>
				</div>
				<!-- <div id="chosenDates"></div>
				<input type="hidden" name="startDate2" value="0">
				<input type="hidden" name="endDate" value="0"> -->
				<div id="calendar"></div>
				<div class="calendar_details">
					<!-- <ul>
						<li><p class="upcoming-note">Current Date</p></li>
						<li><p class="archival-note">Academic Holiday</p></li>
					</ul> -->
					<div class="note">
						<p class="upcoming-note">Current Date</p><br>
						<p class="archival-note">Academic Holiday</p>
					</div>
				</div>
			</section>
			<!--  //Calendar Code  -->
		</div>
		
	</div>
    <!-- Alert Message -->
		<div class="container">
		<?php if (isset($semester_alert_data)) {
			for ($x=0; $x < count($semester_alert_data); $x++) { ?>
	  	  <div class="alert alert-blue alert-dismissible">
	  	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong><i class="fa fa-info-circle"></i>&emsp;<?php echo $semester_alert_data[$x]['calendar_alert_msg']; ?></strong>
		  </div>
		  <?php }}?>
		</div>
	<!-- END Alert Message -->
	<div class="clearfix">&nbsp;</div>
	<!-- / container -->
</div>

<script>

$(function() {
	var currentYear = new Date().getFullYear();
	var currentMonth = new Date().getMonth();
	var currentDate = new Date().getDate();

	var borderDateTime = new Date(currentYear, currentMonth, currentDate).getTime();

	$('#calendar').calendar({ 
        enableContextMenu: true,
        enableRangeSelection: true,
        selectRange: function(e) {
            editEvent({ startDate: e.startDate, endDate: e.endDate });
        },
        mouseOnDay: function(e) {
            if(e.events.length > 0) {
                var content = '';
                
                for(var i in e.events) {
                    content += '<div class="event-tooltip-content">'
                                    + '<div class="event-name" style="color:' + e.events[i].textcolor + '">' + e.events[i].name + '</div>'
                                    + '<div class="event-location">' + e.events[i].location + '</div>'
                                + '</div>';
                }
            
                $(e.element).popover({ 
                    trigger: 'manual',
                    container: 'body',
                    html:true,
                    content: content
                });
                
                $(e.element).popover('show');
            }
        },
        mouseOutDay: function(e) {
            if(e.events.length > 0) {
                $(e.element).popover('hide');
            }
        },
        dayContextMenu: function(e) {
            $(e.element).popover('hide');
        },
        customDayRenderer: function(element, date) {
            if(date.getTime() == borderDateTime) {
                $(element).css('background', '#0866a7');
                $(element).css('color', '#FFF');
            }   
        },
        style:'background',
        dataSource: [
        <?php if($semester_calendar_data){ 
        	for ($i=0; $i < count($semester_calendar_data); $i++) {  ?>
            {
                id: <?= $i; ?>,
                color: '#efefef',
                textcolor: '#0866a7',
                name: '<?= $semester_calendar_data[$i]["sem_cal_message"]; ?>',

				<?php $myLocationArray = explode(',', $semester_calendar_data[$i]["sem_cal_location"]); ?>
                location: '<?php $x=0; while($x < count($myLocationArray)){ echo getbranchname($myLocationArray[$x]); $x++; if($x < count($myLocationArray)){ echo ", "; } } ?>',

                <?php $startDateArray = explode('-', $semester_calendar_data[$i]["sem_cal_start_date"]); $startMonth = $startDateArray[1] - 1; ?>
                startDate: new Date(<?= $startDateArray[0].",".$startMonth.",".$startDateArray[2] ?>),

                <?php $endDateArray = explode('-', $semester_calendar_data[$i]["sem_cal_end_date"]); $endMonth = $endDateArray[1] - 1; ?>
                endDate: new Date(<?= $endDateArray[0].",".$endMonth.",".$endDateArray[2] ?>)
            } <?php if($i < count($semester_calendar_data)) { ?>,<?php } ?>
            <?php } } ?>
        ]
    });
});
</script>