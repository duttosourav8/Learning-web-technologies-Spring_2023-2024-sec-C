<?php
// Define validation rules
$usernamePattern = "/^[a-zA-Z0-9\.\-_]{2,}$/"; // A
$passwordMinLength = 8; // C
$specialCharacters = ['@', '#', '$', '%']; // D

// Dummy current password
$currentPassword = "password123";


function validateUsername($username)
{
    global $usernamePattern;
    return strpos($usernamePattern, $username);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $retypedPassword = $_POST["retyped_password"];

    // Validate username
    if (!validateUsername($username)) {
        echo "Username does not meet the criteria.<br>";
    }

    // Check if new password matches retyped password
    if ($newPassword != $retypedPassword) {
        echo "New password and retyped password do not match.<br>";
    }

    // Check if new password is same as current password
    if ($newPassword == $currentPassword) {
        echo "New password cannot be the same as the current password.<br>";
    }

    // Validate new password length
    if (strlen($newPassword) < $passwordMinLength) {
        echo "Password must be at least $passwordMinLength characters long.<br>";
    }

    // Check if new password contains special characters
    $containsSpecialChar = false;
    foreach ($specialCharacters as $char) {
        if (strpos($newPassword, $char) !== false) {
            $containsSpecialChar = true;
            break;
        }
    }
    if (!$containsSpecialChar) {
        echo "Password must contain at least one of the special characters (@, #, $, %).<br>";
    }
}
?>


<fieldset>
    <legend>Login </legend>
    <form method="post" action="" enctype="">
        Username: <input type="text" name="username" value="" placeholder="type username" /> <br>
        <br>
        Password: <input type="password" name="current_password" value="" /> <br>
        <br>


        <hr>
        <input type="checkbox" name="anything" value="" /> Remember Me <br>
        <br>
        <button type="submit"> Submit </button>
        <a href="Forgot password"> Forgot Password?</a>
    </form>
</fieldset>
</body>

</html>