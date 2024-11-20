<?php
defined('ENVIRONMENT') or die('File Not Exist!');
require_once dirname(__DIR__).'/core/core.php';
$disp = new Dispatchfile();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<title><?php echo TITLE;?></title>
	<?php $core->getHeader();?>
</head>
<body>
	<div class="logrrap">
		<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6"></div>
			<div class="col-lg-5 col-md-5">
				<div class="loginform">
					<div class="logborder"></div>
					<div class="log-head">
						<img src="<?php echo IMG;?>login-logo-headset.png" class="img-fluid">
					</div>
					<form class="logfort" method="POST">
						<div class="form-group">
							<label for="usernam">Username / Email</label>
							<input type="text" id="usernam" class="form-control" required placeholder="Email...">
						</div>
						<div class="form-group">
							<label for="userpass">Password</label>
							<input type="password" id="userpass" class="form-control" required placeholder="Password">
						</div>
						<div class="form-group clearfix">
							<button type="submit" id="userlog" class="btn btn-info float-right"><i class="fa fa-unlock-alt"></i> Login</button>
							
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-1 col-md-1"></div>
		</div>
		</div>
	</div>
<script type="text/javascript">
	alert(basepath);
</script>
	<?php $core->getFooter();?>
</body>
</html>