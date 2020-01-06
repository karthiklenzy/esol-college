            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit book</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php if (isset($_COOKIE['cookieSuccessMessage'])) {?>
                <div class="alert alert-success">
                    <?php echo $_COOKIE['cookieSuccessMessage']; ?>
                </div>
                <?php } if(isset($errorMessage)){ ?>
                <div class="alert alert-danger">
                    <?php echo $errorMessage; ?>
                </div>
                <?php } if (isset($_COOKIE['cookieErrorMessage'])) {?>
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
                                Edit book
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                        <div class="form-group" style="width: 20%">
                                            <label>Book catagory Name</label>
                                                <br />
                                                
                                            <select class="form-control" name="book_category" required="required">
                                            <?php if ($cat_query) {
                                                for ($x=0; $x < count($cat_query); $x++) { 
                                                   
                                                ?>
                                                <option value="<?php echo $cat_query[$x]['book_cat_name']; ?>"><?php echo $cat_query[$x]['book_cat_name']; ?></option>
                                                <?php }}?>
                                            <?php
                                                if ($book_catagory) {
                                                    for ($i=0; $i < count($book_catagory); $i++) {
                                                 ?>
                                                
                                                <option value="<?php echo $book_catagory[$i]['book_cat_id']; ?>"><?php echo $book_catagory[$i]['book_cat_name'];; ?></option>
                                                
                                             <?php

                                             }
                                                } ?>
                                            </select>

                                            </div>
                                            <div class="form-group">
                                                <label>Book Heading</label>
                                                <input class="form-control" required="required" name="bookheading" value="" >
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Book PDF<span style="color: red">  (recommended pdf only)</span></label>
                                                <input type="file" name="files" class="form-control-file" >
                                             
                                            </div>

                                                                                        
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" value="Add book" name="btn-add-book">Update book</button>
                                            
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

 
        

       
