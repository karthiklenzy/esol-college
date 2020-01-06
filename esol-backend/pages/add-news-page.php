            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add news</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Add news
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>News Heading</label>
                                                <input class="form-control" required="required" name="newsheading" value="">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>News Description</label>
                                                <textarea class="form-control" name="newsdescription" rows="3" required="required"></textarea>
                                                <!-- <input class="form-control" type="hidden" required="required" name="menuid" value="<?php echo $menu_id ;?>" > -->
                                            </div>
                                            <div class="form-group">
                                                <label>News Location</label>
                                                <input class="form-control" required="required" name="newslocation" value="">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>News Image <span style="color: red;font-weight: 100">* Recommended size (800x320)</span></label>
                                                <input type="file" name="files" required="required">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>News Type</label>
                                                <br />
                                                
                                                <label class="radio-inline">
                                                    <input type="radio" name="radionewstype" id="optionsRadiosInline1" value="upcoming" required="required">Upcoming
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="radionewstype" id="optionsRadiosInline1" value="archival" required="required">Archival
                                                </label>

                                                
                                            </div> -->
                                            
                                            <div class="form-group" style="width: 20%">
                                            <label>Time</label>
                                                <br />
                                            <select id='time' class="form-control" name="time" required="required">
                                            <?php for($i = 1; $i <= 24; $i++): ?>
                                                <option value="<?= date("h.iA", strtotime("$i:00")); ?>"><?= date("h.iA", strtotime("$i:00")); ?></option>
                                                <option value="<?= date("h.iA", strtotime("$i:30")); ?>"><?= date("h.iA", strtotime("$i:30")); ?></option>
                                            <?php endfor; ?>
                                            </select>
                                            </div>

                                                       
                                            
                                           <div class="form-group" style="width:20%">
                                                <label>Date</label>
                                                <br />
                                                <input type="text" class="form-control clockpicker" id="myDatePicker" name="date" required="required" autocomplete="off" />
                                           </div>
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" name="btn-add">Add news</button>
                                           
                                            
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

        

       
