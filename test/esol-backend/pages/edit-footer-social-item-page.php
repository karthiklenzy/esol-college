            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit / update footer social item</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit footer social item
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Social name</label>
                                                <input class="form-control" required="required" name="sname" value="<?php echo $sname; ?>">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Social link</label>
                                                <input class="form-control" required="required" name="slink" value="<?php echo $slink ;?>">
                                                <input class="form-control" type="hidden" required="required" name="fid" value="<?php echo $forum_id ;?>" >
                                            </div>
                                            <div class="form-group">
                                               
                                                <a href="#" class="fa fa-<?php echo $sname;?>" style="cursor: default;"></a>
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

        

       
