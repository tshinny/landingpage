<?php
session_start();

  // http://www.informit.com/articles/article.aspx?p=1924985

  // function to connect to database
 function doDB() {
      global $mysqli;

      //connect to server and select database
      $mysqli = mysqli_connect("127.0.0.1", "tshinny", "RXwqiV", "tshinny_newsletter");

      //if connection fails, stop script execution
      if (mysqli_connect_errno()) {
          printf("Connect fail %s\n", mysqli_connect_error());
          exit();
      }
       mysqli_query($mysqli,"SET NAMES utf8");
  }
  // function to check email address
  function inputChecker($email,$firstName, $lastName) {
     global $mysqli, $safe_email, $safe_firstname, $safe_lastname, $check_res;

     //check that email is not already in list
     $safe_email = mysqli_real_escape_string($mysqli, $email);
     $check_sql = "SELECT id FROM subscribers
          WHERE email = '".$safe_email."'";
     $check_res = mysqli_query($mysqli, $check_sql)
          or die(mysqli_error($mysqli));
     $safe_lastname = mysqli_real_escape_string($mysqli, $lastName);
     $safe_firstname = mysqli_real_escape_string($mysqli, $firstName);
  }


if (($_POST) && ($_SESSION['captcha']['code'] == $_POST['captcha'])) {


      //trying to subscribe; validate email address
      if ($_POST['email'] == "" || $_POST['firstName'] == "" || $_POST['lastName'] == "") {
        $display_block ='{ "err" : "Please fill out all forms!"}';
      } else {
          //connect to database
          doDB();

          //check that email is in list
          inputChecker($_POST['email'],$_POST['firstName'],$_POST['lastName']);

          //get number of results and do action
          if (mysqli_num_rows($check_res) < 1) {
              //free result
              mysqli_free_result($check_res);

              //add record
              $add_sql = "INSERT INTO subscribers (email, firstname,lastname,created_at,active)
                         VALUES('".$safe_email."', '".$safe_firstname."', '".$safe_lastname."',CURRENT_TIMESTAMP,1)";
              $add_res = mysqli_query($mysqli, $add_sql)
                         or die(mysqli_error($mysqli));
              $display_block ='{ "msg" : "Thanks for signing up!"}';

              //close connection to MySQL
              mysqli_close($mysqli);
          } else {
              //print failure message
              $display_block ='{ "msg" : "You\'re already subscribed!"}';

             // $display_block = "<p class='lead text-right'>You're already subscribed!</p>";
          }
      }

  } else {
    $display_block ='{ "err" : "Captcha does not match!"}';
  }

  echo $display_block;

?>
