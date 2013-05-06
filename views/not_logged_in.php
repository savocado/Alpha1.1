<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->

<!-- errors & messages --->

<?php

// show negative messages
if ($login->errors) {
    foreach ($login->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($login->messages) {
    foreach ($login->messages as $message) {
        echo $message;
    }
}

?>             

<!DOCTYPE html>
<html lang="en">
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Title</title>

<!-- meta information -->
<meta name="description" content="xxx">
<meta name="author" content="JunTao">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" href="/xxx.css" />
<link href="/xxx2.css" rel="stylesheet">

</head>
<body>

<div class="container">
</div>
    
<div style="min-height: 400px">
	<div class="container" style="margin-top: 85px;">
		<div class="centered margin-bottom">
			
			<!--Uncomment and insert image url below to place JunTao Logo above login form	-->
			<a href="index.php" class="image-link"><img src="/images/xxx.png" alt="Logo"></a>
			<!-- Logo Link ends here -->
		</div>
			
			
			
		<div class="row-fluid">
			<div class="offset3 span6">
				
				<!-- Enter greeting in these h4 tags -->
				<h4></h4>
				<!-- Enter greeting in these h4 tags -->

<!-- login form box -->
				<form id="UserLoginForm" method="post" action="index.php" name="loginform" accept-charset="utf-8">
					<label>Username</label>
					<div class="input text required">
						<input id="login_input_username" class="input-block-level" type="text" tabindex="1" maxlength="255" name="user_name" value="<?php echo $login->view_user_name; ?>" />
					</div>
					<label>Password <a href="index.php" tabindex="">(Forgot password?)</a></label>
					<div class="input password required">
						<input id="login_input_password" class="input-block-level" type="password" tabindex="2" name="user_password" autocomplete="off" />
					</div>
						<input type="submit"  name="login" value="Submit" class="btn btn-primary btn-block" tabindex="3"/>            
				</form>
				
				<div class="centered margin-top">
					<h6 class="weight-regular">
						<a href="register.php" tabindex="5">Register new account</a>
					</h6>
				</div>
			</div>
		</div>
</body>
</html>


<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->