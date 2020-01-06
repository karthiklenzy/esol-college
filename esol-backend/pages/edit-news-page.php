                <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit news</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit news
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                    <?php 
                                    if ($news_data) {                                     
                                    ?>

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>News Heading</label>
                                                <input class="form-control" required="required" name="newsheading" value="<?php echo $heading; ?>">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>News Description</label>
                                                <textarea class="form-control" name="newsdescription" id="newsdescription" required="required"><?php echo $desc; ?></textarea>
                                                <!-- <input class="form-control" type="hidden" required="required" name="menuid" value="<?php echo $menu_id ;?>" > -->
                                            </div>
                                            <div class="form-group">
                                                <label>News Location</label>
                                                <input class="form-control" required="required" name="newslocation" value="<?php echo $location; ?>">
                                             
                                            </div>
                                            <div><span style="color: red;font-weight: 100">* Recommended size (800x320)</span></div>
                                            <div class="container">

                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="<?php echo HTTP_PATH.$news_image;?>" class="picture-src" id="wizardPicturePreview" title="">
                                                        <input type="file" name="files" id="wizard-picture" class="">
                                                    </div>
                                                     <h6 class="">Choose Picture</h6>

                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>News Type</label>
                                                <br />
                                                <?php 
                                                if ($type == "upcoming") {?>

                                                <label class="radio-inline">
                                                    <input type="radio" name="radionewstype" id="optionsRadiosInline1" value="upcoming" required="required" <?php echo "checked"; ?>>Upcoming
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="radionewstype" id="optionsRadiosInline2" value="archival" required="required">Archival
                                                </label>
                                                <?php
                                                    
                                                }
                                                else {
                                                ?>
                                                <label class="radio-inline">
                                                    <input type="radio" name="radionewstype" id="optionsRadiosInline1" value="upcoming" required="required">Upcoming
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="radionewstype" id="optionsRadiosInline2" value="archival" required="required" <?php echo "checked"; ?>>Archival
                                                </label>
                                                <?php
                                                }
                                            ?>

                                                
                                            </div> -->
                                            <div class="form-group" style="width: 20%">
                                            <label>Time</label>
                                                <br />
                                            <select id='time' class="form-control" name="time" required="required">
                                            <option style="background-color: #5bc0de"><?php echo $time;?></option>
                                            <?php for($i = 1; $i <= 24; $i++): ?>

                                                <option><?= date("h.iA", strtotime("$i:00")); ?></option>
                                                <option><?= date("h.iA", strtotime("$i:30")); ?></option>
                                            <?php endfor; ?>
                                            </select>
                                            </div>
                                                       
                                            
                                           <div class="form-group"  style="width:20%">
                                                <label>Date</label>
                                                <br />
                                                <input type="text" class="form-control" id="myDatePicker" value="<?php echo $date; ?>" name="datepicker" autocomplete="off"/>

                                           </div>
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-update">Update news</button>
                                           <?php
                                            }
                                           ?>
                                            
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

        

       
