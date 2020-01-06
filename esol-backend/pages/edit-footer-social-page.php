            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">View / Edit Footer social</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                <?php if (isset($_COOKIE['cookieSocialSuccessMessage'])) {?>
                <div class="alert alert-success">
                    <?php echo $_COOKIE['cookieSocialSuccessMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieSocialErrorMessage'])) {?>
                <div class="alert alert-danger">
                    <?php echo $_COOKIE['cookieSocialErrorMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieSocialInfoMessage'])) {?>
                <div class="alert alert-info">
                    <?php echo $_COOKIE['cookieSocialInfoMessage']; ?>
                </div>
                <?php } ?>

                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Footer social list
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row"><th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Social</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 50px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">Edit / Hide</th></tr>
                                        </thead>
                                        <tbody>
                                        
                                            
                                            <?php 

                                            if ($social_data) {
                                                for ($i=0; $i < count($social_data); $i++) { 
                                                   
                                              
                                            ?> 
                                            <tr class="gradeA odd" role="row">
                                                <td class="sorting_1">
                                                <?php echo $social_data[$i]['social_id'];?>
                                                     
                                                  
                                                </td>
                                                <td>
                                               <?php echo $social_data[$i]['social_name'];?>
                                                </td>

                                                <td>
                                                <?php
                                                if ($social_data[$i]['social_status'] == 1) {
                                                 echo "Active";  
                                                }
                                                else {
                                                    echo "Deactive";  
                                                }
                                                 ?>
                                                </td>

                                                
                                                <td>
                                                <a href="<?php echo ADMIN_PATH; ?>edit-footer-social-item?socialid=<?php echo $social_data[$i]['social_id'];?>"><button type="button" class="btn btn-info btn-circle 2x" alt="edit"
                                            ><i class="fa fa-edit"></i></button></a>
                                              
                                            <?php
                                                if ($social_data[$i]['social_status'] == 1) {
                                                        $title = "Deactive";
                                                        $icon = "eye-slash";
                                                        $class = "btn-danger";
                                                        $param = 0;
                                                        $msg = "dective";

                                                    }
                                                    else {
                                                        $title = "Active";
                                                        $icon = "eye";
                                                        $class = "btn-green";
                                                        $param = 1;
                                                        $msg = "active";

                                                    }
                                             ?>    
                                            <a href="<?php echo ADMIN_PATH; ?>edit-footer-social?socialid=<?php echo $social_data[$i]['social_id']; ?>&socialstatus=<?php echo $param; ?>" onclick="return confirm('Are you sure you want to <?php echo $msg; ?> this?')">
                                                <button type="button" title="<?php echo $title; ?>" class="btn <?php echo $class; ?> btn-circle" name="btn-active"><i class="fa fa-<?php echo $icon; ?>"></i></button>
                                            </a>
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

                                </div>
                                </div>
                                <!-- /.table-responsive -->
                              
                            </div>
                            <!-- /.panel-body -->
                        </div>

                </div>
                
            </div>
            <!-- /#page-wrapper -->
           

        

       


        

       
