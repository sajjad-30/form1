<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Simple Form</title>
</head>
<body>
  <form action="index1.php" method="get">
    <label>First Name:</label>
    <input type="text" name="first_name"><br><br>

    <label>Last Name:</label>
    <input type="text" name="last_name"><br><br>

    <label>Email:</label>
    <input type="email" name="email"><br><br>

    <label>Password:</label>
    <input type="password" name="password"><br><br>

    <label>Phone Number:</label>
    <input type="number" name="phone"><br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
