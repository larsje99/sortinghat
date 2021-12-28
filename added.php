<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/added.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Vujahday+Script&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        // Connection with database \\
        $hostname = "ID362590_sortinghat.db.webhosting.be";
        $dbUser = "ID362590_sortinghat";
        $dbPassword = "supersecret123";
        $dbName = "ID362590_sortinghat";
        $dbPort = 3306;
    
        $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName, $dbPort);

        if ($conn == false)
        {
            echo "Juplaaa tis kapot";
            die();
        }

        // Add user to the database \\
        $fullname = $_POST["fullname"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];

        $sql = "INSERT INTO students (fullname, age, gender) VALUES ('$fullname', '$age', '$gender');";
        $check = mysqli_query($conn,$sql);

        if ($check)
        {
            echo "";
        }
        else
        {
            echo "";
        }
    ?>

    <div class="box">
        <h1 class="header">
            User had been added!
        </h1>

        <div class="image1">
            <img src="assets/images/colors.png" alt="Colors of houses">
        </div>
        <div class="image2">
            <img src="assets/images/colors.png" alt="Colors of houses">
        </div>
        <div class="imageAdded">
            <img src="assets/images/200.gif" alt="GIF of Harry Potter">
        </div>
        <div>
            <nav>
                <a href="./index.php" id="returnButton">Return to homepage</a>
            </nav>
        </div>
    </div>
</body>
</html>