            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit user</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php if (isset($_COOKIE['cookieUserSuccessMessage'])) {?>
                <div class="alert alert-success">
                    <?php echo $_COOKIE['cookieUserSuccessMessage']; ?>
                </div>
                <?php } if(isset($errorMessage)){ ?>
                <div class="alert alert-danger">
                    <?php echo $errorMessage; ?>
                </div>
                <?php } if (isset($_COOKIE['cookieUserErrorMessage'])) {?>
                <div class="alert alert-danger">
                    <?php echo $_COOKIE['cookieUserErrorMessage']; ?>
                </div>
                <?php } ?>

                <?php if (isset($_COOKIE['cookieUserInfoMessage'])) {?>
                <div class="alert alert-info">
                    <?php echo $_COOKIE['cookieUserInfoMessage']; ?>
                </div>
                <?php } ?>
                <!-- /.row -->
                <div class="row">
                <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit user
                            </div>
                            <!-- /.panel-heading -->
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <?php
                                    if (isset($users_edit_data)) {
                                        for ($i=0; $i < count($users_edit_data); $i++) { 
                                          
                                     
                                     ?>

                                        <form role="form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>User name</label>
                                                <input class="form-control" required="required" name="username" value="<?php echo $users_edit_data[$i]['user_name']; ?>" disabled>
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Full name</label>
                                                <input class="form-control" required="required" name="username" value="<?php echo $users_edit_data[$i]['users_name']; ?>">
                                             
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Current password</label>
                                                <input type="password" class="form-control" required="required" id="myInput" name="usercurpassword" value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}"
                                                title="Please make sure your password conatain uppercase & lowercase text, symbol & number, length should be 6 or more" minlength="6">
                                                <input type="checkbox" onclick="myFunction()" style="margin-top: 20px">&nbsp;Show Password
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>New password</label>
                                                <input type="password" class="form-control" required="required" id="myInput1" name="userpasswordone" value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}"
                                                title="Please make sure your password conatain uppercase & lowercase text, symbol & number, length should be 6 or more" minlength="6">
                                                <input type="checkbox" onclick="myFunction2()" style="margin-top: 20px">&nbsp;Show Password
                                             
                                            </div>
                                            <div class="form-group">
                                                <label>Repeat new password</label>
                                                <input type="password" class="form-control" required="required" id="myInput2" name="userpasswordtwo" value="" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}"
                                                title="Please make sure your password conatain uppercase & lowercase text, symbol & number, length should be 6 or more" minlength="6">
                                                <input type="checkbox" onclick="myFunction3()" style="margin-top: 20px">&nbsp;Show Password
                                             
                                            </div>

                                                                                        
                                            <button type="submit" class="btn btn-info" style="margin-top: 15px" value="Add course" name="btn-update">Update</button>
                                            
                                        </form>
                                    <?php 
                                       }
                                    }
                                    ?>
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

 
        

       
