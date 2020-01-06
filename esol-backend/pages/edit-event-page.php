            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit event</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php if (isset($_COOKIE['cookieDeleteSuccessMessage'])) {?>
                <div class="alert alert-success">
                    <?php echo $_COOKIE['cookieDeleteSuccessMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieDeleteErrorMessage'])) {?>
                <div class="alert alert-danger">
                    <?php echo $_COOKIE['cookieDeleteErrorMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieDeleteInfoMessage'])) {?>
                <div class="alert alert-info">
                    <?php echo $_COOKIE['cookieDeleteInfoMessage']; ?>
                </div>
                <?php } ?>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                            <?php 
                            if ($edit_event_sql) {
                                for ($c=0; $c < count($edit_event_sql); $c++) { 
                            ?>
                                Edit event <?php echo $edit_event_sql[$c]['event_name']; ?>
                            </div>
                            <?php }}?>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">Id</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Events</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        if ($edit_image_sql) {
                                            for ($i=0; $i < count($edit_image_sql); $i++) {   
                                         ?>
                                        
                                            <tr class="gradeA odd" role="row">
                                                <td>
                                                  <?php echo $edit_image_sql[$i]['image_id']; ?>  
                                                </td>

                                                <td>
                                                <img src="<?php echo HTTP_PATH.$edit_image_sql[$i]['event_image_path']; ?>" width="100px">
                                                  
                                                </td>
                                                
                                                <td>

                                                   <a href="<?php echo ADMIN_PATH;?>edit-event?eventdeleteid=<?php echo $edit_image_sql[$i]['image_id']; ?>&eventidafterdelete=<?php echo $event_id; ?>" title="" onclick="return confirm('Are you sure you want to delete image?')"><button type="button" class="btn btn-danger btn-circle 2x" name="btn-delete" alt="Delete"><i class="fa fa-trash" name="btn-active" title=""></i></button></a>
                                                    
                                                </td>
                                            </tr>
                                            
                                        <?php 
                                           }
                                        } 
                                        ?>
                                       
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                             
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="<?php echo ADMIN_PATH;?>edit-event-image-upload?event_id=<?php echo $event_id; ?>">
                                                <button type="button" class="btn btn-outline btn-info" name="btn-add-image">Add images</button>
                                            </a>
                                            <a href="<?php HTTP_PATH?>events">
                                                <button type="button" class="btn btn-outline btn-info" name="btn-back">Back</button>
                                            </a>  
                                        </div>
                                    </div>
                                
                                    <!-- <div class="row">
                                        <div class="col-sm-6">
                                            <div class="alert alert-danger">You can add only 4 slider images</div>
                                        </div>
                                    </div> -->
                                
                                </div>
                                </div>
                                <!-- /.table-responsive -->
                              
                            </div>
                            <!-- /.panel-body -->
                        </div>

                </div>
                
            </div>
            <!-- /#page-wrapper -->

        

       
