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
                            <div class="panel-body" style="overflow-y: scroll;height: 45vh;">
                                <div class="dataTable_wrapper">
                                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                            <tr role="row">
                                            <th class="" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 4%;">No</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Start Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">End Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Message</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 300px;">Location</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        if (isset($semester_calendar_data)) {
                                            for ($i=0; $i < count($semester_calendar_data); $i++) {   
                                         ?>
                                        
                                            <tr class="gradeA odd" role="row">
                                                <td>
                                                  <?php echo $semester_calendar_data[$i]['sem_cal_id']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $semester_calendar_data[$i]['sem_cal_start_date']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $semester_calendar_data[$i]['sem_cal_end_date']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $semester_calendar_data[$i]['sem_cal_message']; ?>  
                                                </td>
                                                <td>
                                                  <?php echo $semester_calendar_data[$i]['sem_cal_location']; ?>  
                                                </td>
                                                
                                                
                                                <td>

                                                    <a href="<?php echo ADMIN_PATH;?>semester-calendar?deleteid=<?php echo $semester_calendar_data[$i]['sem_cal_id']; ?>" title="" onclick="return confirm('Are you sure you want to delete this semester date?')"><button type="button" class="btn btn-danger btn-circle 2x" name="btn-delete" alt="Delete"><i class="fa fa-trash" name="btn-delete" title=""></i></button></a>
                                                    
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
                <h2>Add Semester Date</h2>
                    <form role="form" method="POST" enctype="multipart/form-data">
                        <div class="form-group" style="width: 30%">
                        <label>Start Date</label>
                         <input type="text" class="form-control clockpicker" id="myDatePicker_start" name="start-date" required="required" autocomplete="off" />
                         </div>

                            <div class="form-group" style="width: 30%">
                            <label>End Date</label>
                              <input type="text" class="form-control clockpicker" id="myDatePicker_end" name="end-date" required="required" autocomplete="off" />  
                            
                            </div>

                           <div class="form-group" style="width:30%">
                                <label>Message</label>
                                <textarea type="text" class="md-textarea form-control" rows="6" name="semester_message" required></textarea>
                           </div>
                           <div class="form-group" style="width:30%">
                                <label>Branch</label></br>
                                <input class="disableoption" type="checkbox" name="chkboxbranchhanwella" id="chkboxbranchhanwella" value="1002">
                                <label for="chkboxbranchhanwella" class="thin">&emsp;Hanwella</label> </br> 

                                <input class="disableoption" type="checkbox" name="chkboxbranchmalabe" id="chkboxbranchmalabe" value="1001"><label for="chkboxbranchmalabe" class="thin">&emsp;Malabe</label> </br>

                                <input class="disableoption" type="checkbox" name="chkboxbranchmaharagama" id="chkboxbranchmaharagama" value="1000"><label for="chkboxbranchmaharagama" class="thin">&emsp;Maharagama</label></br> 

                                <input class="disableoption" type="checkbox" name="chkboxbranchbattaramulla" id="chkboxbranchbattaramulla" value="1003"><label for="chkboxbranchbattaramulla" class="thin">&emsp;Battaramulla</label></br> 

                                <input type="checkbox" name="chkboxbranchall" id="chkboxbranchall" value="999"><label for="chkboxbranchall" class="thin">&emsp;All Branches</label>
                           </div>
                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-sem-date" id="checkBtn">Add date</button>
                           
                            
                        </form>
                </div>
            </div>
            </div>

<script>
$('#chkboxbranchall').click(function() {
    if($(this).prop("checked") == true){
        $(".disableoption").attr("disabled", true);
    }
    else if($(this).prop("checked") == false){
        $(".disableoption").attr("disabled", false);
    }
});
$(function() {
         // Just one method to add a date picker!
        $( "#myDatePicker_start" ).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true, yearRange: "-1:+1"}); 
     
     });
        $(function() {
         // Just one method to add a date picker!
        $( "#myDatePicker_end" ).datepicker({ dateFormat: 'yy-mm-dd', changeYear: true, yearRange: "-1:+1"}); 
     
     });


</script>
<script>
// Disble dates on selection
$(function () {
    $("#myDatePicker_start").datepicker().change(function () {
        $("#myDatePicker_end").datepicker('option', 'minDate', $(this).datepicker('getDate'));
    });
    $("#myDatePicker_end").datepicker();
});
$(function () {
    $("#myDatePicker_end").datepicker().change(function () {
        $("#myDatePicker_start").datepicker('option', 'maxDate', $(this).datepicker('getDate'));
    });
    $("#myDatePicker_start").datepicker();
});
</script>
<!-- /#page-wrapper -->
<!-- checkbox alert -->
<script type="text/javascript">
$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});

</script>
           

        

       


        

       
