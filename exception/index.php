<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Operações com exception em PHP.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection">
  </head>
  <body>
  <?php
  function myException($exception) {
    echo "<b>Exception:</b> " . $exception->getMessage();
  }
  class customException extends Exception {
    public function errorMessage() {
      //error message
      $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
      .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
      return $errorMsg;
    }
  }
  //Create function with exception
  function checkNum($number){
    if ($number > 1) {
      # code...
      throw new Exception("Value must be 1 or below!");
    }
    return true;
  }
  //Variables
  $email = "johndoe@example....com";
  $email2 = "johndoe@example.com";

  //Trigger exception
  checkNum(2);

  //Trigger exception in a "try" block.
  try {
    checkNum(2);
    //if the exception is throw, this text will not be shown.
    echo "If you see this, the number is 1 or below!";
    //catch exception.
  } catch (Exception $e) {
    echo "Message: ".$e->getMessage();
  }

 try {
   //check if
   if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
     # code...
     throw new customException($email);
   }
 } catch (customException $e) {
   //Display custom message.
   echo $e->errorMessage();
 }

 try {
   //check if
   if (filter_var($email2,FILTER_VALIDATE_EMAIL) === false) {
     # code...
     throw new customException($email2);
   }
   if (strpos($email2,"example") !== false) {
     # code...
     throw new Exception("$email2 is a example e-mail.");
   }
 }
 catch(customException $e){
   echo $e->errorMessage();
 }
 catch (Exception $e) {
   echo $e->errorMessage();
 }

 try {
   try {
     //check for "example" in mail address
     if(strpos($email2, "example") !== FALSE) {
       //throw exception if email is not valid
       throw new Exception($email2);
     }
   }
   catch(Exception $e) {
     //re-throw exception
     throw new customException($email2);
   }
 }
 catch (customException $e) {
   //display custom message
   echo $e->errorMessage();
 }
 set_exception_handler("myException");

 throw new Exception("Uncaught Exception occurred!");

   ?>
  <!-- JQuery -->
  <script src="js/jquery-3.1.0.min.js"></script>
  </body>
</html>
