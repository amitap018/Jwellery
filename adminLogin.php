<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connection.php');
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from admin where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: adminPage.php");
    } else {
        $showError = "Invalid Credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="userlogin_style.css">
</head>

<body>
    <form method="post">
        <h2>ADMIN LOGIN</h2>
        <div class="maincontainer">
            <label for="username">YOUR USERNAME:</label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <br><br>

            <label for="password">YOUR PASSWORD:</label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br><br>

            <button type="submit">LOGIN</button>
        </div>
    </form>

</body>

</html>