<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Data Display</title>
</head>
<body>
  <h2>Submitted Information</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
      echo "First Name: " . htmlspecialchars($_GET["first_name"]) . "<br><br>";
      echo "Last Name: " . htmlspecialchars($_GET["last_name"]) . "<br><br>";
      echo "Email: " . htmlspecialchars($_GET["email"]) . "<br><br>";
      echo "Password: " . htmlspecialchars($_GET["password"]) . "<br><br>";
      echo "Phone Number: " . htmlspecialchars($_GET["phone"]) . "<br><br>";
      echo "Gender: " . htmlspecialchars($_GET["gender"]) . "<br><br>";
  } 
  else {
      echo "No data submitted.";
  }
  ?>
</body>
</html>
