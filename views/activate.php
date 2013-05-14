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
<title>Activate | Title</title>

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
</body>
</html>




