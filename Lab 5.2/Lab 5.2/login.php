<?php
session_start();
 
// Dummy database of users (in real-world scenario, this would be a proper database)
$users = [
    'nsjui7288@gmail.com' => [
        'password' => 'Jui7288',
        'name' => 'Naznin',
        // Other user details...
    ],
    'nsjui7288@gmail.com' => [
        'password' => 'Jui7288',
        'name' => 'Naznin',
        // Other user details...
    ]
    // Add more users as needed
];
 
// Function to authenticate user
function authenticateUser($email, $password) {
    global $users;
    if (isset($users[$email]) && $users[$email]['password'] === $password) {
        return true;
    }
    return false;
}
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    if (authenticateUser($email, $password)) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit;
    } else {
        $loginError = "Invalid email or password";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>
<h2>Login</h2>
<?php if (isset($loginError)): ?>
<p><?php echo $loginError; ?></p>
<?php endif; ?>
<form action="login.php" method="post">
<label for="email">Email:</label><br>
<input type="email" id="email" name="email" required><br><br>
<label for="password">Password:</label><br>
<input type="password" id="password" name="password" required><br><br>
<button type="submit">Login</button>
<a href="index.php">Home</a> |
  <a href="Login.php">Login</a> |
  <a href="Registration.php">Register</a>
</form>
</body>
</html>