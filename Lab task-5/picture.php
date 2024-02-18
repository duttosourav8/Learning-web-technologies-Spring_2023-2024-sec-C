<?php

// Assuming the form submits the image file using POST method with name 'picture'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["picture"])) {

  $errors = array();

  // Validation Rule A: Picture format must be in jpeg, jpg, or png
  $allowedFormats = array("jpeg", "jpg", "png");
  $fileExtension = strtolower(pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION));
  if (!in_array($fileExtension, $allowedFormats)) {
    $errors[] = "Picture format must be JPEG, JPG, or PNG.";
  }

  // Validation Rule B: Picture size should not be more than 4MB
  $maxFileSize = 4 * 1024 * 1024; // 4 MB in bytes
  if ($_FILES["picture"]["size"] > $maxFileSize) {
    $errors[] = "Picture size should not be more than 4MB.";
  }

  // Check if there are any errors
  if (!empty($errors)) {
    // Display errors to the user
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
  } else {
    // All validation passed, proceed with uploading the picture
    $targetDirectory = "uploads/"; // Directory where you want to store uploaded pictures
    $targetFile = $targetDirectory . basename($_FILES["picture"]["name"]);

    // Check if the file already exists
    if (file_exists($targetFile)) {
      echo "Sorry, file already exists.";
    } else {
      // Move the uploaded file to the target directory
      if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["picture"]["name"])) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }
}

?>





<fieldset>
  <Legend>PROFILE PICTURE</Legend>
  <form action="picture.php" method="post" enctype="multipart/form-data">
    <img src="E:\Webtech\Lab task-5\istockphoto-1393750072-2048x2048" alt="image"><br>
    <br>
    <input type="file" id="picture" name="picture" accept="image/jpeg, image/jpg, image/png"><br>
    <hr>
    <input type="submit" value="Submit">
  </form>
</fieldset>


</html>