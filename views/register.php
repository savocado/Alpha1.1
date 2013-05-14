<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->

<!-- errors & messages --->
<?php

// show negative messages
if ($registration->errors) {
    foreach ($registration->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($registration->messages) {
    foreach ($registration->messages as $message) {
        echo $message;
    }
}

?>   

<!DOCTYPE html>
<html lang="en">
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register | Title</title>

<!-- meta information -->
<meta name="description" content="xxx">
<meta name="author" content="xxx">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" href="xxx.css" />
<link href="xxx2.css" rel="stylesheet">

</head>
<body>

<div class="container">
</div>
    
<div style="min-height: 400px">
	<div class="container" style="margin-top: 85px;">
		<div class="centered margin-bottom">
			
			<!--Uncomment and insert image url below to place Logo above login form	-->
			<a href="index.php" class="image-link"><img src="xxx.png" alt="Logo"></a>
			<!-- Logo Link ends here -->
		</div>
			
			
			
		<div class="row-fluid">
			<div class="offset3 span6">
				
				<!-- Enter greeting in these h4 tags -->
				<h4></h4>
				<!-- Enter greeting in these h4 tags -->

<!-- register form -->
				<form id="UserRegistrationForm" method="post" action="register.php" name="registerform">        
				    <label for="user_name">Username</label>
				    <input id="login_input_username" class="input-block-level" type="text" name="user_name" />        
				    <label for="user_email">Email</label>
				    <input id="login_input_email" class="input-block-level" type="text" name="user_email" />        
				    <label for="user_password_new">Password</label>
				    <input id="login_input_password_new" class="input-block-level" type="password" name="user_password_new" autocomplete="off" />        
				    <label for="user_password_repeat">Repeat password</label>
				    <input id="login_input_password_repeat" class="input-block-level" type="password" name="user_password_repeat" autocomplete="off" />        
				    <input type="submit"  name="register" value="Register" class="btn btn-primary btn-block" tabindex="3"/>
				</form>
				
				<!-- backlink -->
				<div class="centered margin-top">
					<h6 class="weight-regular">
						<a href="index.php" tabindex="5">Back to Login Page</a>
					</h6>
				</div>
				
			</div>



		</div>
</body>
</html>




<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->