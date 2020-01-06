<div class="container" style="margin-bottom: 40px;"> 
	<section id="fancyTabWidget" class="tabs t-tabs">
	    <?php if(isMobile()){ ?>
    		<button type="button" class="btn abt-btn collapsed" data-toggle="collapse" data-target="#demo">&emsp;<?php echo $branch_selected; ?><i class="fa fa-chevron-down"></i></button>
			<div id="demo" class="collapse">
		<?php } ?>
		<!--   Navigation List  -->
        <ul class="nav nav-tabs fancyTabs lg-device" role="tablist">
            <li class="tab fancyTab <?php if (($theid == '') || ($theid == 'about')) { ?> active <?php } ?>">
            <div class="arrow-down"><div class="arrow-down-inner"></div></div>	
                <a class="navigatethemenu" id="tab0" href="about" role="tab" aria-controls="tabBody0" data-toggle="tab" tabindex="0">About Us</a>
            	<div class="whiteBlock"></div>
            </li>

           <?php if ($getallbranches) { for ($i=0; $i < count($getallbranches); $i++) { ?> 
            <li class="tab fancyTab <?php if($theid == strtolower($getallbranches[$i]['branch_name'])){ ?> active <?php } ?>">
            <div class="arrow-down"><div class="arrow-down-inner"></div></div>
                <a class="navigatethemenu" id="<?= $getallbranches[$i]['branch_id']; ?>" href="<?= strtolower($getallbranches[$i]['branch_name']); ?>" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="1"><?= $getallbranches[$i]['branch_name']; ?></a>
                <div class="whiteBlock"></div>
            </li>
				<?php } } ?>
            <li class="tab fancyTab <?php if($theid == 'international-teachers'){ ?>active <?php } ?>">
            <div class="arrow-down"><div class="arrow-down-inner"></div></div>	
                <a class="navigatethemenu" id="tab5" href="international-teachers" role="tab" aria-controls="tabBody5" aria-selected="true" data-toggle="tab" tabindex="2">International Teachers</a>
            	<div class="whiteBlock"></div>
            </li>
        </ul>
        <?php if(isMobile()){ ?>
        </div>
        <?php }?>
        <!--  // Navigation List  -->
        <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
        	<?php
        	if ($theid == '') {
        		include_once DOC_ROOT.'include-about/about.php';
        	}
    		else{
    			include_once DOC_ROOT.'include-about/'.$theid.'.php';
    		}        	
        	/* Page name should be the branch name saved on the database. It is the value saved in the $theid variable which is sent through GET method */
        	?>
        </div>
	</section>
</div>

<script>
	
$(document).ready(function() {

	var numItems = $('li.fancyTab').length;
		
	if (numItems == 12){
		$("li.fancyTab").width('8.3%');
	}
	if (numItems == 11){
		$("li.fancyTab").width('9%');
	}
	if (numItems == 10){
		$("li.fancyTab").width('10%');
	}
	if (numItems == 9){
		$("li.fancyTab").width('11.1%');
	}
	if (numItems == 8){
		$("li.fancyTab").width('12.5%');
	}
	if (numItems == 7){
		$("li.fancyTab").width('14.28%');
	}
	if (numItems == 6){
		$("li.fancyTab").width('16.666666666666667%');
	}
	if (numItems == 5){
		$("li.fancyTab").width('20%');
	}
	if (numItems == 4){
		$("li.fancyTab").width('25%');
	}
	if (numItems == 3){
		$("li.fancyTab").width('33.3%');
	}
	if (numItems == 2){
		$("li.fancyTab").width('50%');
	}
});

$('.navigatethemenu').click(function() {
	var addressValue = $(this).attr("href");
	window.location.href = "<?php echo HTTP_PATH ?>about-us/"+addressValue;
});
</script>