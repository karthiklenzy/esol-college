            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">View / Edit Footer Forum</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                <?php if (isset($_COOKIE['cookieSliderSuccessMessage'])) {?>
                <div class="alert alert-success">
                    <?php echo $_COOKIE['cookieSliderSuccessMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieSliderErrorMessage'])) {?>
                <div class="alert alert-danger">
                    <?php echo $_COOKIE['cookieSliderErrorMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieSliderInfoMessage'])) {?>
                <div class="alert alert-info">
                    <?php echo $_COOKIE['cookieSliderInfoMessage']; ?>
                </div>
                <?php } ?>

                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Footer forum list
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row"><th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">forum</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">Edit / Hide</th></tr>
                                        </thead>
                                        <tbody>
                                        
                                            
                                            <?php 

                                            if ($slider_data) {
                                                for ($i=0; $i < count($slider_data); $i++) { 
                                                   
                                              
                                            ?> 
                                            <tr class="gradeA odd" role="row">
                                                <td class="sorting_1">
                                                <?php echo $slider_data[$i]['forum_id'];?>
                                                     
                                                  
                                                </td>
                                                <td>
                                               <?php echo $slider_data[$i]['forum_name'];?>
                                                </td>
                                                <td>

                                            <a href="<?php echo ADMIN_PATH; ?>edit-footer-forum-item?forumid=<?php echo $slider_data[$i]['forum_id'];?>"><button type="button" class="btn btn-info btn-circle 2x" alt="edit"
                                            ><i class="fa fa-edit"></i></button></a>
                                                
                                            <a href="#" onclick="return confirm('Are you sure you want to delete this?')">
                                                <button type="button" class="btn btn-danger btn-circle" name="btn-delete"><i class="fa fa-eye-slash"></i></button>
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
           

        

       


        

       
