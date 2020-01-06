            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add / Edit Users</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                <?php if (isset($_COOKIE['cookieCourseSuccessMessage'])) {?>
                <div class="alert alert-success">
                    <?php echo $_COOKIE['cookieCourseSuccessMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieCourseErrorMessage'])) {?>
                <div class="alert alert-danger">
                    <?php echo $_COOKIE['cookieCourseErrorMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieCourseInfoMessage'])) {?>
                <div class="alert alert-info">
                    <?php echo $_COOKIE['cookieCourseInfoMessage']; ?>
                </div>
                <?php } ?>

                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Users list
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Users</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">Edit / Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        if ($users_data) {
                                            for ($i=0; $i < count($users_data); $i++) {   
                                         ?>
                                        
                                            <tr class="gradeA odd" role="row">
                                                <td>
                                                  <?php echo $users_data[$i]['user_id']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $users_data[$i]['user_name']; ?>  
                                                </td>
                                                
                                                <td>

                                                    <a href="<?php echo ADMIN_PATH; ?>edit-user?userid=<?php echo $users_data[$i]['user_id']; ?>" title="Edit"><button type="button" class="btn btn-info btn-circle 2x" alt="Edit"><i class="fa fa-edit"></i></button></a>

                                                    <a href="<?php echo ADMIN_PATH;?>users?userid=<?php echo $users_data[$i]['user_id']; ?>" title="" onclick="return confirm('Are you sure you want to delete user?')"><button type="button" class="btn btn-danger btn-circle 2x" name="btn-delete" alt="Delete"><i class="fa fa-trash" name="btn-active" title=""></i></button></a>
                                                    
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
                                            <a href="<?php echo ADMIN_PATH;?>add-user">
                                                <button type="button" class="btn btn-outline btn-info">Add user</button>
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
           

        

       


        

       
