<fieldset>
  <legend>CHANGE PASSWORD</legend>
  <form method="post" action="" enctype="">
    <style>
      New Password {
        color: green;
      }

      Retype New Password {
        color: red;
      }
    </style>

    Current Password: <input type="password" name="currentPassword" value="" /> <br>
    <br>
    New Password <color:green> : <input type="password" name="new_Password" value="" /> <br>
      <br>
      Retype New Password: <input type="password" name="retype_password" value="" /> <br>
      <hr>

      <br>
      <button type="submit"> Submit </button>

  </form>
</fieldset>

<?php
if (isset($_POST["new_password"]) && isset($_POST["retype_password"])) {
  $newPassword = $_POST['new_password'];
  $retypePassword = $_POST['retype_password'];
  if ($newPassword === $currentPassword) {
    $errors[] = "New password should not be the same as the current password.";

    if ($newPassword !== $retypePassword) {
      $errors[] = "New password and retyped password do not match.";
    }
  }
}



;

$currentPassword = "Password123";


$errors = array();




if (!empty($errors)) {

  foreach ($errors as $error) {
    echo $error . "<br>";
  }
} else {

  echo "Password updated successfully.";
}

?>