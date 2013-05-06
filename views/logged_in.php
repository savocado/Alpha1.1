<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->

<!DOCTYPE html>
<html lang="en">
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome | Title</title>

<!-- meta information -->
<meta name="description" content="xxx">
<meta name="author" content="xxx">
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
			<a href="index.php" class="image-link"><img src="images/xxx.png" alt="Logo"></a>
			<!-- Logo Link ends here -->
		</div>
			
			
			
		<div class="row-fluid">
			<div class="offset3 span6">
				
				
				
				
				
				<!-- Enter greeting in these h4 tags -->

				<div>
				    <!-- if you need users's information, just put them into the $_SESSION variable and output them here -->
				    <h4>Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in. Try to close this browser tab and open it again. Still logged in!</h4>
				</div>
				
				<div class="centered margin-top">
					<h6 class="weight-regular">
				    <!-- because people were asking: "index.php?logout" is just my simplicated form of "index.php?logout=true" -->
				    <a href="index.php?logout" tabindex="5">Logout</a>
				    </h6>
				</div>

				<!-- Enter greeting in these h4 tags -->





			</div>



		</div>
</body>
</html>



<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->