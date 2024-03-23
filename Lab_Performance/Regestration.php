<?php
require_once 'db_connect.php';

$request_method = $_SERVER['REQUEST_METHOD'];

if ($request_method == "POST") {
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  $usertype = $_POST['usertype'];

  // Validation logic
  $isValid = true;

  if (empty ($id) || empty ($username) || empty ($password) || empty ($confirm_password) || empty ($email) || empty ($name) || empty ($email) || $user_type == "Select") {
    $isValid = false;
  }

  if ($isValid) {
    // Sanitize inputs if needed
    // Assuming addUser is defined in Model.php
    if (registration($username, $password, $confirm_password, $name, $email, $user_type)) {
      header("Location: Login.php");
      exit;
    } else {
      echo "<br>Error adding user.";
    }
  } else {
    echo "<br>Please fill out all fields correctly.";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign Up </h2>
      <form name="registration" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" novalidate>
        <fieldset>
          <legend>User Information:</legend>
          <label for="id">ID:</label>
          <input type="text" id="id" name="id"><br><br>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password"><br><br>
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password"><br><br>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name"><br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email"><br><br>
          <label for="usertype">User Type:</label>
          <select id="usertype" name="usertype">
            <option value="regular">User</option>
            <option value="admin">Admin</option>
          </select><br><br>
        </fieldset>


        <fieldset>
          <legend>Account Information:</legend>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username"><br><br>
          <label for="password">Password:</label>
          <input type="text" id="password" name="password"><br><br>
          <label for="password_confirmation">Repeat password</label>
          <input type="password" id="password_confirmation" name="password_confirmation">
          <label for="account_type">Account Type:</label>
          <select name="account_type" id="account_type">
            <option value="Select">Select a type</option>
            <option value="User">Customer</option>
            <option value="Customer">Dealer</option>
          </select><br>
        </fieldset>
        <br><input type="submit" value="Submit">
      </form>
    </div>
  </div>
</body>

</html>