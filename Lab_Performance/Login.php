<?php
require_once 'db_connect.php';

session_start();

$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Establish database connection
    $mysqli = new mysqli("localhost", "root", "", "vmsproject");

    // Check if there are any connection errors
    if ($mysqli->connect_errno) {
        die('Failed to connect to MySQL: ' . $mysqli->connect_error);
    }

    // Prepare SQL statement with placeholders
    $sql = "SELECT * FROM registration WHERE username = '$username'";
    // Create a prepared statement
    // $stmt = $mysqli->prepare($sql);
    // // Bind parameters
    // $stmt->bind_param("s", $username);
    // // Execute the statement
    // $stmt->execute();
    // // Get the result
    // $result = $stmt->get_result();
    // // Fetch the row as an associative array
    // $username = $result->fetch_assoc();

    $stmt = $mysqli->prepare($sql);
    $response = $stmt->execute();
	if ($response) {
      	$data = $stmt->get_result();
      	$output = "";
      
      	if ($data->num_rows > 0) {
      		$row = $data->fetch_assoc();    
        }
      	else {
        	return "empty";
      	} 
    
   	}

    // Check if the user exists and the password matches
    if ($row['username'] == $username && $row['password'] == $password) {
        $_SESSION["user_id"] = $row['registration_id'];
        $_SESSION["username"] = $username;

        if (!empty($_POST['RememberMe'])) {
            setcookie("username", $_POST['username'], time() + (86400 * 10), "/");
        }

         if ($username['account_type'] === "Admin") {
            header("Location: admin.php");
            exit;
         } else if($username['account_type'] === "Customer") {
       
        header("Location:user.php");
    } else {
        echo "Login failed";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Sign In</h2>
    <form action="../CONTROLLER/loginAction.php" method="POST">
        <fieldset>
            <legend>Login:</legend>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>"><br><br>
            <input type="checkbox" id="rememberMe" name="RememberMe">
            <label for="rememberMe">Remember Me</label><br><br>
            <input type="submit" name="Login" value="Login"><br><br>
            <a href="Login.php">Forgot Password?</a><br><br>
            Don't have an account? <a href="Regestration.php">Sign Up</a>
        </fieldset>
    </form>
</body>

</html> 