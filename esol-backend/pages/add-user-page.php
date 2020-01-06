            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add user</h1>
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
                                Add user
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                    

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Full name</label>
                                                <input class="form-control" required="required" name="fullname" value="<?php if(isset($full_name)){ echo $full_name; } ?>">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>User name</label>
                                                <input class="form-control" required="required" name="username" value="<?php if(isset($user_name)){ echo $user_name; } ?>">
                                             
                                            </div>
                                            <div class="form-group" style="width: 25%">
                                                <label>User type</label>
                                                <select class="form-control" name="usertype">
                                                    <option value="admin">Admin</option>
                                                    <option value="editor">Editor</option>
                                                    <option value="manager">Manager</option>
                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" required="required" id="myInput1" name="userpasswordone" value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}"
                                                title="Please make sure your password conatain uppercase & lowercase text, symbol & number, length should be 6 or more" minlength="6">
                                                <input type="checkbox" onclick="myFunction2()" style="margin-top: 20px">&nbsp;Show Password
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Repeat password</label>
                                                <input type="password" class="form-control" required="required" id="myInput2" name="userpasswordtwo" value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}"
                                                title="Please make sure your password conatain uppercase & lowercase text, symbol & number, length should be 6 or more" minlength="6">
                                                <input type="checkbox" onclick="myFunction3()" style="margin-top: 20px">&nbsp;Show Password
                                             
                                            </div>

                                                                                        
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" value="Add course" name="btn-add">Add user</button>
                                            
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

 
        

       
