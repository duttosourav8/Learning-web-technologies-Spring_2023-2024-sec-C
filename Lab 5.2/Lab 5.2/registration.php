<?php
session_start();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Handle registration form submission
  // Dummy code for demonstration, you would handle form submission and validation here
  $_SESSION['registered'] = true;
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> LOGIN OF FULL </title>
</head>
<body>
 
  
   <fieldset style = "height: 420px;width:310px;">
    <legend>REGISTRATION </legend>
   <form method="get" action="" enctype="">
    Name:       <input type="text" name="username" value="" placeholder="type name"/> <br>
   <hr>
    Email:          <input type="email" name="email" value=""/>
    <style>
      .hint {
          position: relative;
          display: inline-block;
      }

      .hint .hint-text {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          border: 1px solid #ccc;
          border-radius: 5px;
          padding: 10px;
          z-index: 1;
      }

      .hint:hover .hint-text {
          display: block;
      }
  </style>

  <div class="hint">
      <button>ℹ️ </button> 
      <span class="hint-text">hint:sample@example.com</span>
  </div>
  <br>

    <hr>
    Username:       <input type="text" name="username" value="" placeholder="type username"/> <br>
    <hr>
    Password:       <input type="password" name="password" value=""/> <br>
<hr>
    Confirm Password:       <input type="password" name="password" value=""/> <br>
   

<hr>
           <fieldset>
                      <legend>Gender </legend>
                      <input type="radio" name="gender" value=""/> Male 
                      <input type="radio" name="gender" value=""/> Female 
                      <input type="radio" name="gender" value=""/> Other <br>
                    </fieldset> 
                    <hr>
    
 
      <fieldset>
        <style>
          .date-input {
              width: 40px; /* Adjust width as needed */
              text-align: center;
              border: 1px solid #ccc;
              margin-right: 5px; /* Adjust spacing between boxes */
          }
      </style>
        <legend>Date of Birth </legend>
        <input type="text" class="date-input" maxlength="2" placeholder="">
        <span class="separator">/</span>
        <input type="text" class="date-input" maxlength="2" placeholder="">
        <span class="separator">/</span>
        <input type="text" class="date-input" maxlength="4" placeholder="">
        <sub>(dd/mm/yyyy)</sub>
      </fieldset>         
     <hr>
     <input type="submit" name="button" value="Submit"/>
     <input type="reset" name="button" value="Reset"/> <br>
     
     <a href="index.php">Home</a> |
  <a href="Login.php">Login</a> |
  <a href="Registration.php">Register</a>
                    
</form>









  </fieldset>
</body>
</html>