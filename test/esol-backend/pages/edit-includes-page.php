            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">View / Edit Includes</h1>
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
                                Includes file list
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row"><th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Includes</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">Edit / view</th></tr>
                                        </thead>
                                        <tbody>
                                        
                                            <tr class="gradeA odd" role="row">
                                                <td class="sorting_1">
                                                   1 
                                                </td>
                                                <td>Menu</td>
                                                <td>

                                                    <a href="<?php echo ADMIN_PATH."edit-menu";?>"><button type="button" class="btn btn-info btn-circle 2x" alt="edit"><i class="fa fa-edit"></i></button></a>
                                                    
                                                    <!-- <a href="#" onclick="return confirm('Are you sure you want to delete this?')">
                                                        <button type="button" class="btn btn-danger btn-circle" name="btn-delete"><i class="fa fa-eye"></i></button>
                                                    </a> -->
                                                </td>
                                            </tr>
                                            <tr class="gradeA odd" role="row">
                                                <td class="sorting_1">
                                                  2  
                                                </td>
                                                <td>Footer</td>
                                                <td>

                                                    <a href="<?php echo ADMIN_PATH."edit-footer";?>"><button type="button" class="btn btn-info btn-circle 2x" alt="edit"><i class="fa fa-edit"></i></button></a>
                                                    <!-- <button type="button" class="btn btn-success btn-circle"><i class="fa fa-eye"></i></button> -->
                                                    <!-- <a href="#" onclick="return confirm('Are you sure you want to delete this?')">
                                                        <button type="button" class="btn btn-danger btn-circle" name="btn-delete"><i class="fa fa-eye"></i></button>
                                                    </a> -->
                                                </td>
                                            </tr>
                                       
                                        </tbody>
                                    </table>
                                    </div>
                                </div>

                                
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- <a href="<?php echo ADMIN_PATH;?>add-slider">
                                                <button type="button" class="btn btn-outline btn-info">Add slide</button>
                                            </a>  -->
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- <div class="alert alert-danger">You can add only 4 slider images</div> -->
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
           

        

       


        

       
