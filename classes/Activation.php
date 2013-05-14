<?php

class Activation {

	private     $db_connection              = null;

    private     $user_activation_code       = "";  
    private     $user_is_active             = "";  
	
    public      $activation_successful   	= false;

    public      $errors                     = array();                  // collection of error messages
    public      $messages                   = array();                  // collection of success / neutral messages




    public function __construct() {
        
		if (isset($_GET["user_activation_code"])) {
                
			$this->activateNewUser();
                
            }        
    }

	 private function activateNewUser() {
		 	
			
			
			
			
	
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
		if (!$this->db_connection->connect_errno) {
		
		
		
		
			$user_activation_code = $_GET['user_activation_code'];
			
			if (!$user_activation_code) {
			    echo "No code supplied";
			}
			else
			{
			    $check = $this->db_connection->query("SELECT * FROM users WHERE user_activation_code='$user_activation_code' AND user_is_active='1' ");
			    if ($checklogin->num_rows == 1) {
			        echo "You have already activated your account";
				}
			    else
			    {
			        $activate = $this->db_connection->query("UPDATE users SET user_is_active='1' WHERE user_activation_code='$user_activation_code'");
			        echo "Your account has been activated! ".'<h5> <a href="index.php">Click here to Login</a> </h5>';
					
			    }
			    
			}
		
		}
		else {
			
			$this->errors[] = "Sorry, no database connection.";
			
		}
		
		
		
	}

}

?>