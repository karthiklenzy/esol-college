            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add book</h1>
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
                                Add book
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                        <div class="form-group" style="width: 25%">
                                            <label>Book catagory Name</label>
                                                <br />
                                            <select class="form-control" name="book_category" required="required">
                                            
                                                <option value="">Select Category</option>
                                                <?php if ($book_catagory_data) {
                                                    for ($x=0; $x < count($book_catagory_data); $x++) { ?>
                                                <option value="<?= $book_catagory_data[$x]['book_cat_id'] ?>"><?= $book_catagory_data[$x]['book_cat_name'] ?></option>
                                                <?php } } ?>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Book Heading</label>
                                                <input class="form-control" required="required" name="bookheading" value="" >
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Book PDF<span style="color: red">  (recommended pdf only)</span></label>
                                                <input type="file" name="filespdf" class="form-control-file" >
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Select book thumbnail image <span style="color: red;font-weight: 100">* Recommended size (250x350)</span></label>
                                                <input type="file" name="files" required="required">
                                            </div>
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" value="Add book" name="btn-add-book">Add book</button>
                                            
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

 
        

       
