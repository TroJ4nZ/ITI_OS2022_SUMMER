<?php
session_start();
if (!isset($_SESSION["name"])) {
  header("Location: lab_5_login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mainstylesheet.css" />
  <title>Welcome!</title>
</head>

<body class="indexPage">
  <header>
    <nav>
      <ul class="navLinks">
        <li><a href="index.php">Home</a></li>

        <li><a href="docs/roadMap.html">Road Map</a></li>

        <li><a href="docs/registration.html">Registration Form</a></li>

        <li><a href="mailto:">Contact</a></li>

        <a href="https://iti.gov.eg">
          <img id=logo src="imgs/ITI_logo.png" />
        </a>
      </ul>
    </nav>
  </header>
  <main style="text-align: center">
    <h2>Hi <span style=font-weight:bold;><?php echo $_SESSION['name'] ?></span>, Welcome to our site!</h2>
    <a href="docs/roadMap.html">
      <img src="imgs/img_1.PNG" alt="Intesive Code Camp, Full Stack Web Dev Using PHP, 2022/2023" style="width: 60%" />
    </a>
    <br>
    <a href= logout.php >
      <button>Sign Out</button></a>

  </main>
  <footer>
    <hr />
    <p>Copyright 2022 by Abdelrahman Mustafa &reg;. All Rights Reserved.</p>
  </footer>
</body>

</html>