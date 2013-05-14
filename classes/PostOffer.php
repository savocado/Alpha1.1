<?php

/**
 * class PostOffer
 * handles the user's posting of offerings

 */
class PostOffer {

    private     $db_connection              = null;                     // database connection   
    
    private     $offer_title                = "";                       // offer title
    private     $offer_description          = "";                       // offer description
    private     $offer_category             = "";                   	// offer category
    private     $offerers_email		        = "";						// email address of the user who posted the offer
	
    public      $postOffer_successful   	= false;


    public      $errors                     = array();                  // collection of error messages
    public      $messages                   = array();                  // collection of success / neutral messages
    
    
    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */    
    public function __construct() {
        
            if (isset($_POST["post_offer"])) {
                
                $this->postNewOffer();
                
            }        
    }

    /**
     * postNewOffer
     * 
     * handles the entire offer posting process. checks all error possibilities, and creates a new offer posting in the database if
     * everything is fine
     */
    private function postNewOffer() {
        
        if (empty($_POST['offer_title'])) {
          
            $this->errors[] = "Empty Offer Title";

        } elseif (empty($_POST['offer_description'])) {
          
            $this->errors[] = "Empty Offer Description";            
            
        } elseif (empty($_POST['offer_category'])) {
          
            $this->errors[] = "Please select a category to post in";            
                        
        } elseif (!empty($_POST['offer_title'])
                  && !empty($_POST['offer_description']) 
                  && !empty($_POST['offer_category'])) {

            // creating a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escapin' this
                $this->offer_title          = $this->db_connection->real_escape_string($_POST['offer_title']);
                $this->offer_description    = $this->db_connection->real_escape_string($_POST['offer_description']);
                $this->offer_category 		= $this->db_connection->real_escape_string($_POST['offer_category']);
                $this->offerers_email       = $login->db_connection->user_email;


                // cut data down to max 64 chars
                $this->user_name            = substr($this->offer_title, 0, 64);
                $this->user_password        = substr($this->offer_description, 0, 64);
                $this->user_password_repeat = substr($this->offer_category, 0, 64);


                // check if another offer posting already exists with the same title and user email address
                $query_check_offer_exists = $this->db_connection->query("SELECT * FROM offers WHERE offer_title = '".$this->offer_title."' AND WHERE offerers_email = '".$this->offerers_email."' ");

                if ($query_check_offer_exists->num_rows == 1) {

                    $this->errors[] = "Sorry, you appear to already have an offer posted with the same title.<br/>Please choose a new title.";

                }
                else {
                	
                    // write new offer posting data into database
                    $query_new_offer_post_insert = $this->db_connection->query("INSERT INTO offers (offer_title, offer_description, offer_category, offerers_email) VALUES('".$this->offer_title."', '".$this->offer_description."', '".$this->offer_category."', '".$this->offerers_email."')");
					}

                    if ($query_new_offer_post_insert) {

                        $this->messages[] = "Your offer has been posted successfully.";
                        $this->postOffer_successful = true;

                    } else {

                        $this->errors[] = "Sorry, your offer failed to post. Please go back and try again.";

                    }
					
					
					
					
                }

            } 
            else {

                $this->errors[] = "Sorry, no database connection.";

            }
            
	}
        
}
