<?php 
function cleanURL($course_heading) {
  $filtered_url = strtolower(preg_replace( array('/[^a-z0-9\- ]/i', '/[ \-]+/'), array('', '-'), $course_heading));
            return $filtered_url;
     }


?>