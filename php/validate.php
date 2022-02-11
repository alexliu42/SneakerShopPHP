<?php
// Global result of form validation
$valid = false;
// Global array of validation messages. For valid fields, message is ""
$val_messages = Array();
function the_results()
{
  global $valid;

  
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if($valid == true){
        echo "<p class='thanks'>Thank you for your reservation! We have recieved your inquiry!</p>";

    }
  }
}


// Check each field to make sure submitted data is valid. If no boxes are checked, isset() will return false
function validate()
{
    global $valid;
    global $val_messages;
    $count=0;

    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
      // Use the following patterns to validate email and date or come up with your own.
      // email: '#^(.+)@([^\.].*)\.([a-z]{2,})$#'
      // date: '#^\d{4}/((0[1-9])|(1[0-2]))/((0[1-9])|([12][0-9])|(3[01]))$#'
      
      if(preg_match('#^(.+)@([^\.].*)\.([a-z]{2,})$#',$_POST['email'])&&$_POST['fname']!=""&&$_POST['lname']!=""&&is_numeric($_POST['phone'])){
        $valid=true;
      }
      if(!preg_match('#^(.+)@([^\.].*)\.([a-z]{2,})$#',$_POST['email'])){
        $val_messages[0]="Email is not in correct format!";
      }
      if($_POST['fname']=="" || $_POST['lname']==""){
        $val_messages[1]="The name is required!";
      }

      if(!is_numeric($_POST['phone'])){
        $val_messages[2]="Please enter valid phone number!";
      }      
    }
}

// Display error message if field not valid. Displays nothing if the field is valid.
function the_validation_message($type) {

  global $val_messages;

  if($_SERVER['REQUEST_METHOD']== 'POST')
  {

      if($type=="email"){
        if(!empty($val_messages[0])){
          echo "<p class='failure-message'>";
          echo $val_messages[0];
          echo "</p>";
        }
      }
      elseif($type=="fname" || $type=="lname"){
        if(!empty($val_messages[1])){
          echo "<p class='failure-message'>";
          echo $val_messages[1];
          echo "</p>";
        }
      }
      elseif($type=="phone"){
        if(!empty($val_messages[2])){
          echo "<p class='failure-message'>";
          echo $val_messages[2];
          echo "</p>";
        }
      }
  }
}


function submission()
{
  global $valid;

  
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if($valid == true){
        
        define('DBHOST', 'localhost');
        define('DBNAME', 'freshkicks');
        define('DBUSER', 'root');
        define('DBPASS', '');

        $mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

  
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            

    
            $shoes = $_POST['shoes'];
           
            $shoes1 = $_POST['shoes1'];
            $shoes2 = $_POST['shoes2'];
            

            $sql = "INSERT INTO `clients` (`fname`,`lname`,`email`,`phone`,`shoes`,`shoes1`,`shoes2`) VALUES ('{$fname}','{$lname}','{$email}','{$phone}','{$shoes}','{$shoes1}','{$shoes2}')";

            
            $mysqli->query($sql);

    }

    }
  }
}
