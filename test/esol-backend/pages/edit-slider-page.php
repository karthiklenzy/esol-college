            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit slider</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit slides
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Slider name</label>
                                                <input class="form-control" required="required" name="txtslidername" value="<?php echo $slider_name; ?>">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Slider heading one</label>
                                                <input class="form-control" required="required" name="txtsliderheading1" value="<?php echo $slider_heading_one ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Slider heading two</label>
                                                <input class="form-control" required="required" name="txtsliderheading2" value="<?php echo $slider_heading_two; ?>">
                                            </div>
                                            
                                            <!-- <div class="form-group">
                                                <label>Select slider image</label>
                                                <input type="file" name="files" required="required">
                                            </div> -->
                                            
                                                <div class="avatar-upload">
                                                    <div class="avatar-edit">
                                                        <!-- <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" /> -->
                                                        <a href="<?php echo ADMIN_PATH; ?>replace-image?slideid=<?php echo $sid; ?>&slidername=<?php echo $slider_name; ?>"><label for="imageUpload"></label></a>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" style="background-image: url(<?php echo HTTP_PATH.$slider_image; ?>);">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                           
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-update">Update</button>
                                            
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

        

       
