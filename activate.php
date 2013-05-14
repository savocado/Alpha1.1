<?php

// include the configs / constants for the database connection
require_once("config/db.php");

//load the registration class
require_once("classes/Activation.php");

// create the registration object. when this object is created, it will do all registration stuff automaticly
// so this single line handles the entire registration process.
$activation = new Activation();

// showing the register view (with the registration form, and messages/errors)
include("views/activate.php");
