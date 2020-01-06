<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Registered Students (<?php 
                $count = $total_child_display;
                if (isset($count)) {
                echo $count;
            } ?>)</h1>
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
                    Students List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                            <thead>
                                <tr role="row">
                                <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Student Name</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">DOB</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Gender</th>
                                
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Parent ID</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Ref number</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Parent Name</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Parent Mail</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Parent Number</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Preferred Branch</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Date</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Export to Excel</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                            if ($student_data) {
                                for ($i=0; $i < count($student_data); $i++) {   
                             ?>
                            
                                <tr class="gradeA odd" role="row">
                                    <td>
                                      <?php echo $student_data[$i]['child_id']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['child_name']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['child_dob']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['child_gender']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['parent_id']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['admission_reference_number']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['parent_name']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['parent_mail']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['parent_mobile']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['branch_name']; ?>  
                                    </td>
                                    <td>
                                      <?php echo $student_data[$i]['admission_date']; ?>  
                                    </td>
                                    <td>
                                        <a href="<?php echo ADMIN_PATH; ?>admission?parentid=<?php echo $student_data[$i]['parent_id']; ?>"><button type="button" class="btn btn-info btn-circle 2x" alt="edit"><i class="fa fa-book"></i></button></a>
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
<!-- Pagination start -->
    <div class="col-md-12" style="text-align: center; ">
        <nav>
          <ul class="pagination">
            <li><a href="<?php echo ADMIN_PATH ?>admission?currentpage=1" aria-label="First" title="First"><i class="fa fa-angle-left"></i></a></li>
                <?php for ($x=1; $x <= $total_pages ; $x++) { if(($x <= $showmaxpagelimit) && ($x >= $showminpagelimit)){ ?><li><a href="<?php echo ADMIN_PATH ?>admission?currentpage=<?php echo $x; ?>" <?php if($current_page_number == $x){ ?> class="activepagination" <?php } ?> ><?php echo $x ?></a></li><?php } } ?>
            <li><a href="<?php echo ADMIN_PATH ?>admission?currentpage=<?php echo $total_pages ?>" aria-label="Last" title="Last"><i class="fa fa-angle-right"></i></a></li>
          </ul>
        </nav>
    </div>
<!-- Pagination end -->
            </div>
        </div>
  </div>
<!-- /#page-wrapper -->










