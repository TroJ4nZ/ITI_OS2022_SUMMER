<?php


?>


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
                        <input type=text maxlength="50" required>
                    </li>
                    <li>
                        <label for=name>Email</label>
                    </li>
                    <li>
                        <input type=email maxlength="50" required>
                    </li>
                    <li>
                        <label for=gender>Gender</label>
                    </li>
                    <li>
                        <input type=radio id=gender name=gender value=1 required>Male
                    </li>
                    <li>
                        <input type=radio id=gender name=gender value=0 required>Female
                    </li>
                    <li>
                        <input type=checkbox id=mails name=mails required>Receieve E-mails from us
                    </li>
                    <li>
                        <input type=submit class=btn id=submit_btn name=submit_btn>
                        <input type=reset class=btn id=reset_btn name=reset_btn>

                    </li>
                </ul>
            </form>
    </main>
</body>

</html>