<?php 
$internationalteachers_array = array
  ( array("teachername" => "Victoria Jacquet", "teachercountry" => "Argentina", "teacherimage" => "victoria.jpg"),
  array("teachername" => "Shofia Vilina Rianda", "teachercountry" => "Indonesia", "teacherimage" => "sophie-indo.jpg"),    
      array("teachername" => "Sofía González", "teachercountry" => "Colombia", "teacherimage" => "sophie-colo.jpg"),
    array("teachername" => "Dorottya Varga", "teachercountry" => "Hungary", "teacherimage" => "8.jpg"),
   array("teachername" => "Hossam Abouzeid", "teachercountry" => "Egypt", "teacherimage" => "7.jpg"),
    array("teachername" => "Catarina Nimas", "teachercountry" => "Indonesia", "teacherimage" => "6.jpg"),
      array("teachername" => "Polina Krutskikh", "teachercountry" => "Russia", "teacherimage" => "5.jpg"),
      array("teachername" => "Gregorius Aditya", "teachercountry" => "Indonesia", "teacherimage" => "4.jpg"),
      array("teachername" => "David Martinez Sierra", "teachercountry" => "Spain", "teacherimage" => "3.jpg"),
      array("teachername" => "Zana Van Dorp", "teachercountry" => "New Zealand", "teacherimage" => "2.jpg"),
      array("teachername" => "Rebecca Tadevosyan", "teachercountry" => "Armenia", "teacherimage" => "9.jpg"),
      array("teachername" => "Lamek Nkabule", "teachercountry" => "Malawi", "teacherimage" => "1.jpg"));
  
  
  ?>
<div class="row" id="about-content">
    <div class="col-md-12 styleforh3">
		
    </div>
    <?php
    for ($x=0; $x < count($internationalteachers_array); $x++) { 
    ?>
    <div class="col-md-4 height_px">
        <div class="img"><img src="<?= HTTP_PATH; ?>images/international/<?= $internationalteachers_array[$x]['teacherimage']; ?>" alt="img">
	        <div class="styleforh3">
		        <h3><?= $internationalteachers_array[$x]['teachername']; ?></h3>
		        <h4><?= $internationalteachers_array[$x]['teachercountry']; ?></h4>
		        
	        </div>
        </div>	
    </div>
    <?php }?>

    
</div>