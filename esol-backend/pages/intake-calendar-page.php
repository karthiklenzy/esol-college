            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add / Edit calendar</h1>
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
                <div class="panel panel-default" style="overflow-y: scroll;height: 60vh;">
                            <div class="panel-heading">
                                Intake date list
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Start time</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">End time</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Location</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        if (isset($calendar_data)) {
                                            for ($i=0; $i < count($calendar_data); $i++) {   
                                         ?>
                                        
                                            <tr class="gradeA odd" role="row">
                                                <td>
                                                  <?php echo $calendar_data[$i]['calendar_id']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $calendar_data[$i]['calendar_date']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $calendar_data[$i]['calendar_start_time']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $calendar_data[$i]['calendar_end_time']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $calendar_data[$i]['calendar_location']; ?>  
                                                </td>
                                                
                                                <td>

                                                    <a href="<?php echo ADMIN_PATH;?>intake-calendar?datedeleteid=<?php echo $calendar_data[$i]['calendar_id']; ?>" title="" onclick="return confirm('Are you sure you want to delete this date?')"><button type="button" class="btn btn-danger btn-circle 2x" name="btn-delete" alt="Delete"><i class="fa fa-trash" name="btn-delete" title=""></i></button></a>
                                                    
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
                <div style="width: 50%;padding-bottom: 50px;">
                
                                <h2>Add Intake Date</h2>
                           
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Intake Location</label>
                                            <select id='time' class="form-control" name="location" required="required" style="width: 30%">
                                                <option value="">Select Location</option>
                                                <option value="Maharagama">Maharagama</option>
                                                <option value="Battaramulla">Battaramulla</option>
                                                <option value="Malabe">Malabe</option>
                                                <option value="Hanwella">Hanwella</option>
                                            </select>
                                             
                                            </div>
                                            
                                            <div class="form-group" style="width: 20%">
                                            <label>Start Time</label>
                                                <br />
                                            <select id='time' class="form-control" name="starttime" required="required">
                                            <option value="">Select Time</option>
                                            <?php for($i = 1; $i <= 24; $i++): ?>
                                                <option value="<?= date("h.iA", strtotime("$i:00")); ?>"><?= date("h.iA", strtotime("$i:00")); ?></option>
                                                <option value="<?= date("h.iA", strtotime("$i:30")); ?>"><?= date("h.iA", strtotime("$i:30")); ?></option>
                                            <?php endfor; ?>
                                            </select>
                                            </div>

                                            <div class="form-group" style="width: 20%">
                                            <label>End Time</label>
                                                <br />
                                            <select id='time' class="form-control" name="endtime" required="required">
                                            <option value="">Select Time</option>
                                            <?php for($i = 1; $i <= 24; $i++): ?>
                                                <option value="<?= date("h.iA", strtotime("$i:00")); ?>"><?= date("h.iA", strtotime("$i:00")); ?></option>
                                                <option value="<?= date("h.iA", strtotime("$i:30")); ?>"><?= date("h.iA", strtotime("$i:30")); ?></option>
                                            <?php endfor; ?>
                                            </select>
                                            </div>

                                                       
                                            
                                           <div class="form-group" style="width:20%">
                                                <label>Date</label>
                                                <br />
                                                <input type="text" class="form-control clockpicker" id="myDatePicker" name="intake-date" required="required" autocomplete="off" />
                                           </div>
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-intake">Add Date</button>
                                           
                                            
                                        </form>
                                </div>
            </div>

            <!-- /#page-wrapper -->
           

        

       


        

       
