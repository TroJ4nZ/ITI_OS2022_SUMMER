<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="lab_5_stylesheet.css">
</head>
<body>
<form method=POST action=<?php $_PHP_SELF ?>>
    <div id="login-form">
        <h3>Login</h3>
        <input type="text" id=name name="name" placeholder="Username" required />
        <br>
        <input type="password" id=password name="password" placeholder="Password" required/>
        <br>
        <input type="submit" name=submit_btn id="login" value="Login" />
        <button onclick="window.location='lab_5_register.php';">Register</button>
    </div>
</form>
</body>
</html>


<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "iti_lab";
$dbport = "3306";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);
if (!$con) {
    echo "Error: Unable to conect to MySQL." . PHP_EOL;
    echo "Debugging error #: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    die;
} else {
    if (isset($_POST["submit_btn"])) {    
        $name = $_POST['name'];
        $password = $_POST['password'];

        $stmt ="SELECT * FROM users WHERE name = " . "'" . $name . "'" . "AND password = " . "'" . $password . "'";



    
        if (!$result = mysqli_query($con, $stmt)) {
            echo "Debugging error #: " . mysqli_errno($con) . PHP_EOL;
            echo "Debugging error: " . mysqli_error($con) . PHP_EOL;
            die;
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['name'] = $row['name'];
                echo "Success! Redirecting you...";
                header("refresh: 1; url=index.php");
            } else {
                echo "Wrong username or password!";
            }
        }
    }
}
?>