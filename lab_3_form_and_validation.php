<?php

if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["agree"])) {
    echo nl2br(
        "
        Your given values are:\n
        Name: " . $_POST['name'] .
            "\nEmail: " . $_POST['email'] .
            "\nGroup #: " . $_POST['group_no'] .
            "\nClass Details: " . $_POST['details'] .
            "\nGender: " . $_POST['gender'] . "\n" .
            "Courses: "
    );
    foreach ($_POST['courses'] as $val) {
        echo nl2br("$val\n");
    }
}




?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="lab_3_stylesheet.css">
</head>

<body>
    <form action="<?php $_PHP_SELF ?>" method=POST>
        <main>
            <h1>
                AAST BIS Class Registration
            </h1>
            <ul>
                <li class=red>
                    * Required Fields
                </li>
                <li>
                    <label for="name">Name:<span class=red>*</span></label>
                    <input type="text" id="name" name="name">
                </li>
                <li>
                    <label for="email">Email:<span class=red>*</span></label>
                    <input type="email" id="email" name="email">
                </li>
                <li>
                    <label for="group_no">Group #:</label>
                    <input type=number id=group_no name=group_no>

                </li>
                <li>
                    <label for="details">Class Details:</label>
                    <textarea rows=8 cols=25 id=details name=details></textarea>
                </li>
                <li>
                    <label for="gender">Gender:<span class=red>*</span></label>
                    <input type="radio" id="gender" name="gender" value=Male>Male
                    <input type="radio" id="gender" name="gender" value=Female>Female
                </li>
                <li>
                    <label for="courses">Select Courses:</label>
                    <select id=courses name=courses[] multiple>
                        <option value=php>PHP</option>
                        <option value=js>Javascript</option>
                        <option value=sql>MySQL</option>
                        <option value=html>HTML</option>
                    </select>

                </li>
                <li>
                    <label for="agree">Agree?<span class=red>*</span></label>
                    <input type="checkbox" id="agree" name="agree">
                </li>
                <li id=submit_btn>
                    <input name=submit_btn type=submit>
                </li>
            </ul>
        </main>
    </form>
</body>

</html>