            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add new slide</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Adding new slides
                            </div>
                            <!-- /.panel-heading -->
                            <?php 
                            $number_of_slides = count($slider_data);

                            if ($number_of_slides < 4) {
                                
                            
                            ?>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Slider name</label>
                                                <input class="form-control" required="required" name="txtslidername">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Slider heading one</label>
                                                <input class="form-control" required="required" name="txtsliderheading1">
                                            </div>
                                            <div class="form-group">
                                                <label>Slider heading two</label>
                                                <input class="form-control" required="required" name="txtsliderheading2">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Select slider image <span style="color: red;font-weight: 100">* Recommended size (1200x400)</span></label>
                                                <input type="file" name="files" required="required">
                                            </div>
                                           
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-save">Save</button>
                                            
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        
                                       
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <?php 
                                }
                                else {

                            ?>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="alert alert-info">
                                                <?php echo "You only allowed to add four sliders"; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Slider name</label>
                                                <input class="form-control" disabled="disabled" name="txtslidername">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Slider heading one</label>
                                                <input class="form-control" disabled="disabled" name="txtsliderheading1">
                                            </div>
                                            <div class="form-group">
                                                <label>Slider heading two</label>
                                                <input class="form-control" disabled="disabled" name="txtsliderheading2">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Select slider image</label>
                                                <input type="file" name="files" disabled="disabled">
                                            </div>
                                           
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-save" disabled="disabled">Save</button>
                                            
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                    <div class="col-lg-6">
                                        
                                       
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <?php 

                            }
                            ?>
                            <!-- /.panel-body -->
                        </div>

                </div>
                
            </div>
            <!-- /#page-wrapper -->

        

       
