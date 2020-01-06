<!-- accordion start-->
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
          <h4 class="panel-title">
            <a class="accordion-toggle collapsed" href="#collapsefour" >
              Our Staff
            </a>
          </h4>
        </div>
        <!-- Table start -->
        <div id="collapsefour" class="panel-collapse collapse">
        <?php

        if (isset($branch_id)) {
        for ($x=1; $x < 4; $x++) {    
        $getlevel_array = array('branch_id' => $branch_id, 'categoryid' => $x);
        $getlevel_query = $db->query("SELECT Name FROM teacher WHERE teacher_cat_id = :categoryid AND branch_id = :branch_id", $getlevel_array);

        if ($getlevel_query) {
        ?>
          <div class="panel-body">
            <table class="table">
                  <thead>
                    <tr style="background: #8cbee0;color: white;">
                      <th colspan="2" style="background: #8cbee0;color: black;">
                      <?= getteachercategory($x); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php for ($z=0; $z < count($getlevel_query); $z++) { ?>
                  <tr>
                    <td width="25%"><?= $getlevel_query[$z]['Name']; ?></td>
                    <td width="25%">
                      <?php
                      $z++; if($z < count($getlevel_query)){ 
                        echo $getlevel_query[$z]['Name'];
                      }
                      ?>
                    </td>
                  </tr>
                  <?php } ?>
            </tbody>
            </table>
          </div>
        
        <?php  }}} ?>
        </div>
         <!-- Table end -->
    </div>
</div>