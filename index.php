<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>

<body>
    <form action="index1.php" method="post">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="first_name"><br><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="last_name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="phone">Phone Number:</label>
        <input type="number" id="phone" name="phone"><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
