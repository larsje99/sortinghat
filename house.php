<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="assets/css/house.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Vujahday+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="box">
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
                
                $counter = 4;
                $getUser = "select * from students where studentID = $counter;";
                $check = mysqli_query($conn, $getUser)->fetch_all(MYSQLI_ASSOC);
    ?>  
        <div class="randomUser">
    <?php      
                foreach ($check as $student)
                {
    ?>                <tr>
                        <td>
    <?php
                        echo $student["fullname"] . " ";
    ?>
                        </td>
                        <td>
    <?php
                        echo $student["age"] . " ";
    ?>
                        </td>
                        <td>
    <?php
                        echo $student["gender"] . " ";
                }
    ?>
        </div>
            <h1 class="header">
                Put someone in a house
            </h1>

            <div class="image1">
                <img src="assets/images/colors.png" alt="Colors of houses">
            </div>
            <div class="image2">
                <img src="assets/images/colors.png" alt="Colors of houses">
            </div>
            <div class="userImage">
                <img src="assets/images/userimage.png" alt="Image of user icon">
            </div>
            <div class="houseButtons">
                <button class="button-gryffindor">
                    Gryffindor
                </button>
                <button class="button-hufflepuff">
                    Hufflepuff
                </button>
                <button class="button-ravenclaw">
                    Ravenclaw
                </button>
                <button class="button-slytherin">
                    Slytherin
                </button>
            </div>
        </div>
        <nav>
            <a href="./database.php" id="buttonDatabase">See database</a>
        </nav>
    </body>
</html>