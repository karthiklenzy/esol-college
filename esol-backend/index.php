<?php
include '../top.php';
include_once DOC_ROOT.'classes/db_connection.php';

if (isset($_POST['signin'])) {
	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$userpassword = filter_var($_POST['userpassword'], FILTER_SANITIZE_STRING);
	$md5password = md5($userpassword);
	$userstatus = '1';

	$loginDetails = array('username' => $username, 'md5password' => $md5password, 'userstatus' => $userstatus);
    $loginDetailsResult = $db->query("SELECT * FROM tbl_user WHERE user_name = :username AND password = :md5password AND user_status = :userstatus", $loginDetails);

	if ($loginDetailsResult) {
        for ($i=0; $i < count($loginDetailsResult); $i++) { 
            $_SESSION['userid'] = $loginDetailsResult[$i]['user_id'];
            $_SESSION['username'] = $loginDetailsResult[$i]['user_name'];
            $_SESSION['usertype'] = $loginDetailsResult[$i]['user_type'];
            $_SESSION['usersname'] = $loginDetailsResult[$i]['users_name'];
            $_SESSION['userpassword'] = $loginDetailsResult[$i]['password'];
            $_SESSION['userstatus'] = $loginDetailsResult[$i]['user_status'];

        }
		header("Location:".ADMIN_PATH."dashboard");
	}
    else {
		$msg = "Username or password incorrect.!";
	}

}
include_once DOC_ROOT.'esol-backend/includes/header.php'
?>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form action="" method="POST" role="form">
                            	<div>
                            		<?php 
                            			if (isset($msg)) {
                            				echo '<div class="alert alert-danger">'.$msg.'</div>';
                            			}
                            		?>
                            	</div>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="userpassword" type="password" value="">
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-success btn-block" name="signin" id="signin">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
