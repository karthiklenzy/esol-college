            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add / Edit news</h1>
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
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                News list
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">News</th>
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 5%;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">Edit / Delete</th></tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if ($slider_data) {
                                            for ($i=0; $i < count($slider_data); $i++) {
                                            ?>
                                            <tr class="gradeA odd" role="row">
                                                <td class="sorting_1">
                                                   <?php echo $slider_data[$i]['news_id'];?> 
                                                </td>
                                                <td>
                                                    <?php echo $slider_data[$i]['news_heading']; ?>
                                                </td>
                                                <td>
                                                    <?php if ($slider_data[$i]['news_status'] == 1) { echo "Active"; } else { echo "Deactive"; } ?>
                                                </td>
                                                <td>

                                                    <a href="<?php echo ADMIN_PATH;?>edit-news?newsid=<?php echo $slider_data[$i]['news_id'];?>" title="Edit"><button type="button" class="btn btn-info btn-circle 2x" alt="edit"><i class="fa fa-edit"></i></button></a>

                                                    <?php 
                                                    if ($slider_data[$i]['news_status'] == 1) {
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
                                                    // inside link generated class & icon 
                                                     ?>
                                                    
                                                    <a href="<?php echo ADMIN_PATH;?>news?newsid=<?php echo $slider_data[$i]['news_id'];?>&status=<?php echo $param; ?>" title="<?php echo $title; ?>" onclick="return confirm('Are you sure you want to <?php echo $msg; ?> this news?')"><button type="button" class="btn <?php echo $class; ?> btn-circle 2x" alt="edit"><i class="fa fa-<?php echo $icon; ?>" name="btn-active" title="<?php $msg; ?>"></i></button></a>
                                                    
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
                                            <a href="<?php echo ADMIN_PATH;?>add-news">
                                                <button type="button" class="btn btn-outline btn-info">Add news</button>
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
           

        

       


        

       
