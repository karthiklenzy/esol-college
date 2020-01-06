            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add images to event</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Add images
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label>Upload Images</label>
                                                <input type="file" id="uploadadditionalImage" name="additionalfiles[]" multiple="multiple" accept="image/*" class="form-control" required="required">
                                            </div>                                            
                                           <input class="form-control" required="required" name="eventheading" value="<?php echo $event_id_value; ?>" type="hidden">
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-update">Upload</button>
                                           
                                            
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

        

       
