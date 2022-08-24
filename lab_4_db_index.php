<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel=stylesheet href="lab_4_stylesheet.css">
</head>

<body>
    <main>
        <div>
            <h2 style=>User Details</h2>
            <span id=view_cont><a href=lab_4_db_register.php><button type=button id=view_btn class=btn>New</button></a></span>

        </div>
        <hr>
        <table border="1">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Mail Status</th>
            </thead>
            <tbody>
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
                    }
                    else{
                        $stmt = "SELECT * FROM users";
                        if(!$result = mysqli_query($con, $stmt)){
                            echo "Debugging error #: " . mysqli_errno($con) . PHP_EOL;
                            echo "Debugging error: " . mysqli_error($con) . PHP_EOL;
                            die;
                        }
                        else{
                            while($row = mysqli_fetch_assoc($result)){
                                $mail_status = ($row["mails"] == 1) ? "Yes" : "No";
                                echo
                                "
                                <tr>
                                    <td>
                                        {$row["id"]}
                                    </td>
                                    <td>
                                        {$row["name"]}
                                    </td>
                                    <td>
                                        {$row["email"]}
                                    </td>
                                    <td>
                                        {$row["gender"]}
                                    </td>
                                    <td>
                                        {$mail_status}
                                    </td>
                                </tr>
                                ";
                            }
                        }
                    }
                    mysqli_close($con);

                ?>
            </tbody>
        </table>
    </main>
</body>

</html>