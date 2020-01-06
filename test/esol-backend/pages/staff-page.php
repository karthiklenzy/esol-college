            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add / Edit Staff</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                <?php if (isset($_COOKIE['cookieSuccessMessage'])) {?>
                <div class="alert alert-success">
                    <?php echo $_COOKIE['cookieSuccessMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieErrorMessage'])) {?>
                <div class="alert alert-danger">
                    <?php echo $_COOKIE['cookieErrorMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieInfoMessage'])) {?>
                <div class="alert alert-info">
                    <?php echo $_COOKIE['cookieInfoMessage']; ?>
                </div>
                <?php } ?>

                <!-- /.row -->
                <div class="row" style="padding: 10px 50px;">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Staff
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                            
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Batch Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Batch Level</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Batch Day</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Teacher</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Asst. Teacher</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        if ($staff_data_list) {
                                            for ($i=0; $i < count($staff_data_list); $i++) {   
                                         ?>
                                        
                                            <tr class="gradeA odd" role="row">
                                                
                                                <td>
                                                  <?php echo $staff_data_list[$i]['batch_name']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $staff_data_list[$i]['batch_level']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $staff_data_list[$i]['batch_day']; ?>  
                                                </td>
                                                <td>
                                                <?php  echo getTeacherNamebyId($staff_data_list[$i]['batch_teacher_id']);?>
                                                </td>
                                                <td>
                                                  <?php echo getTeacherNamebyId($staff_data_list[$i]['batch_assisting_teacher_id']); ?>  
                                                </td>
                                                
                                               
                                            </tr>
                                        <?php 
                                    }}
                                        ?>
                                       
                                        </tbody>
                                    </table>

                                    </div>
                                </div>
                                <div class="col-md-12" style="text-align: center; ">
                                    <nav>
                                      <ul class="pagination">
                                        <li><a href="<?php echo ADMIN_PATH ?>staff?currentpage=1" aria-label="First" title="First"><i class="fa fa-angle-left"></i></a></li>
                                            <?php for ($x=1; $x <= $total_pages ; $x++) { if(($x <= $showmaxpagelimit) && ($x >= $showminpagelimit)){ ?><li><a href="<?php echo ADMIN_PATH ?>staff?currentpage=<?php echo $x ?>" <?php if($cuttent_page_number == $x){ ?> class="activepagination" <?php } ?> ><?php echo $x ?></a></li><?php } } ?>
                                        <li><a href="<?php echo ADMIN_PATH ?>staff?currentpage=<?php echo $total_pages ?>" aria-label="Last" title="Last"><i class="fa fa-angle-right"></i></a></li>
                                      </ul>
                                    </nav>
                                </div>
                                
                                </div>
                                </div>

                                
                                <!-- /.table-responsive -->
                              
                            </div>
                            <!-- /.panel-body -->
                        </div>

                </div>
                
            </div>

           

        

       


        

       
