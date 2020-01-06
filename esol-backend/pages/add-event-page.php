            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add event</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Add event
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Event Heading</label>
                                                <input class="form-control" required="required" name="eventheading" value="">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Event Description</label>
                                                <textarea class="form-control" name="eventdescription" rows="3" required="required"></textarea>
                                                
                                            </div>
                                            <div class="form-group" style="width:20%">
                                                <label>Date</label>
                                                <br />
                                                <input type="text" class="form-control clockpicker" id="myDatePicker" name="datepick" required="required" autocomplete="off" />
                                           </div>
                                           
                                            
                                            <div class="form-group">
                                                <label>Event Images <span style="color: red;font-weight: 100">* Recommended size (800x600)</span></label>
                                                <input type="file" id="uploadadditionalImage" name="additionalfiles[]" multiple="multiple" accept="image/*" class="form-control" required="required">
                                            </div>                                            
                                           
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-add">Add event</button>
                                           
                                            
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">&nbsp;</div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                           
                            
                            
                            <!-- /.panel-body -->
                        </div>

                </div>
                
            </div>
            <!-- /#page-wrapper -->

        

       
