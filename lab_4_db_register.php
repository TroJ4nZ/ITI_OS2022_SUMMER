<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel=stylesheet href="lab_4_stylesheet.css">
</head>

<body>
    <main>
        <h2>User Registration Form</h1>
            <hr>
            <p>Please fill this form and submit to add user record to the database.</p>
            <form method=POST action=<?php $_PHP_SELF ?>>
                <ul>
                    <li>
                        <label for=name>Name</label>
                    </li>
                    <li>
                        <input type=text maxlength="50" id=name name=name required>
                    </li>
                    <li>
                        <label for=name>Email</label>
                    </li>
                    <li>
                        <input type=email maxlength="50" id=email name=email required>
                    </li>
                    <li>
                        <label for=gender>Gender</label>
                    </li>
                    <li>
                        <label>
                            <input type=radio id=gender name=gender value=1 required>Male
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type=radio id=gender name=gender value=0 required>Female
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type=checkbox id=mails name=mails required>Receieve E-mails from us
                        </label>
                    </li>
                    <li>
                        <input type=submit class=btn id=submit_btn name=submit_btn>
                        <input type=reset class=btn id=reset_btn name=reset_btn>
                        <span id=view_cont><a href=lab_4_db_index.php><button type=button id=view_btn class=btn>View</button></a></span>
                    </li>
                </ul>
            </form>
    </main>
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
        $email = $_POST['email'];
        $mails = (isset($_POST['mails'])) ? "1" : "0";

        $dbgender = ($_POST['gender'] == "1") ? "Male" : "Female";

        $stmt = "INSERT INTO users(name, email, gender, mails) VALUES(?,?,?,?)";
        $ps = mysqli_prepare($con, $stmt);

        mysqli_stmt_bind_param($ps, "sssi", $name, $email, $dbgender, $mails);
        if (!mysqli_stmt_execute($ps)) {
            echo "Debugging error #: " . mysqli_errno($con) . PHP_EOL;
            echo "Debugging error: " . mysqli_error($con) . PHP_EOL;
            die;
        } else {
            echo "Success! Redirecting you...";
            header("refresh: 3; url=lab_4_db_register.php");
        }
    }
}
mysqli_close($con);

?>