<?php if ($book_name) {
	for ($x=0; $x < count($book_name); $x++) {
		if ($book_name[$x]['book_cat_id'] == $category_name[$y]['book_cat_id']) {
			
		?>
    <div class="tab-content col-md-8">
            <div class="tab-pane" id="tab_<?= $x; ?>">
                 <h4>Pane <?= $x; ?></h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                    ac turpis egestas.</p>
            </div>
            
    </div><!-- tab content -->
<?php }}}?>