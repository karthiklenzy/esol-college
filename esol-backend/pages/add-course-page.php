            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add course</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php if (isset($_COOKIE['cookieCourseSuccessMessage'])) {?>
                <div class="alert alert-success">
                    <?php echo $_COOKIE['cookieCourseSuccessMessage']; ?>
                </div>
                <?php } if(isset($errorMessage)){ ?>
                <div class="alert alert-danger">
                    <?php echo $errorMessage; ?>
                </div>
                <?php } if (isset($_COOKIE['cookieCourseErrorMessage'])) {?>
                <div class="alert alert-danger">
                    <?php echo $_COOKIE['cookieCourseErrorMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieCourseInfoMessage'])) {?>
                <div class="alert alert-info">
                    <?php echo $_COOKIE['cookieCourseInfoMessage']; ?>
                </div>
                <?php } ?>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Add course
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Course Heading</label>
                                                <input class="form-control" required="required" name="newsheading" value="<?php if(isset($course_heading)){ echo $course_heading; } ?>" >
                                             
                                            </div>

                                            <div class="form-group">
                                                <label>Course Details</label>
                                        <textarea class="form-control" name="coursedescription" id="coursedescription"><?php if(isset($course_description)){ echo $course_description; } ?></textarea>
                                                
                                            </div>                                            
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" value="Add course" name="btn-add">Add course</button>
                                            
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
<script>
      tinymce.init({
        selector: '#coursedescription',
        plugins: [
    'advlist autolink lists link image code charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ]
      });
   
</script>
 
        

       
