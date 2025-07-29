<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Data Display</title>
</head>
<body>
  <h2>Submitted Information</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "First Name: " . htmlspecialchars($_POST["first_name"]) . "<br><br>";
      echo "Last Name: " . htmlspecialchars($_POST["last_name"]) . "<br><br>";
      echo "Email: " . htmlspecialchars($_POST["email"]) . "<br><br>";
      echo "Password: " . htmlspecialchars($_POST["password"]) . "<br><br>";
      echo "Phone Number: " . htmlspecialchars($_POST["phone"]) . "<br><br>";
      echo "Gender: " . htmlspecialchars($_POST["gender"]) . "<br><br>";
  } 
  else {
      echo "No data submitted.";
  }
  ?>
</body>
</html>
