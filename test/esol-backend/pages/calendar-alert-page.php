            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add / Edit Semester Calendar</h1>
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
                                Semester Calendar Dates
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Message</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 60px;">Delete</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        if (isset($semester_alert_data)) {
                                            for ($i=0; $i < count($semester_alert_data); $i++) {   
                                         ?>
                                        
                                            <tr class="gradeA odd" role="row">
                                                <td>
                                                  <?php echo $semester_alert_data[$i]['calendar_alert_id']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $semester_alert_data[$i]['calendar_alert_msg']; ?>  
                                                </td>
                                                <td>

                                                    <a href="<?php echo ADMIN_PATH;?>calendar-alert?deleteid=<?php echo $semester_alert_data[$i]['calendar_alert_id']; ?>" title="" onclick="return confirm('Are you sure you want to delete this semester alert?')"><button type="button" class="btn btn-danger btn-circle 2x" name="btn-delete" alt="Delete"><i class="fa fa-trash" name="btn-delete" title=""></i></button></a>
                                                    
                                                </td>
                                            </tr>
                                        <?php 
                                    }}
                                        ?>
                                       
                                        </tbody>
                                    </table>

                                    </div>
                                </div>

                                
                                </div>
                                </div>

                                
                                <!-- /.table-responsive -->
                              
                            </div>
                            <!-- /.panel-body -->
                        </div>

                </div>
                <div class="row" style="padding: 10px 50px;">
                <div style="width: 70%;padding-bottom: 50px;">
                <h2>Add Semester Alert</h2>
                    <form role="form" method="POST" enctype="multipart/form-data">
                        <div class="form-group" style="width:30%">
                                <label>Alert Message</label>
                                <textarea type="text" class="md-textarea form-control" rows="4" name="semester_message" required></textarea>
                           </div>
                           
                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-sem-alert">Add alert</button>
                    </form>
                </div>
            </div>
            </div>


           

        

       


        

       
