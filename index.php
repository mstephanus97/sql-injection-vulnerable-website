<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $user = "root";
    $pw = "";
    $db = "myDb";

    #Connect to Server
    $con = new Mysqli($servername, $user, $pw, $db) or die(Mysqli_errno());

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $con->prepare("SELECT * FROM CREDENTIALS
    WHERE username = '$username' AND pass = '$password'");

    #$sql = $con->prepare("SELECT username, pass FROM CREDENTIALS
    #WHERE username = ? AND pass = ?");
    #$sql->bind_param("ss", $username, $password);

    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        // User exists, redirect to another page
        echo "SUCCESS!";
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
    $sql->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
