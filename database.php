<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="assets/css/database.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Vujahday+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="box">
            <h1 class="header">
                Database
            </h1>

            <div class="database">
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
        
                    // Print the table with all the info \\

                        $getSql = "select * from students;";
                        $data = mysqli_query($conn, $getSql)->fetch_all(MYSQLI_ASSOC);
                ?>
                        <table>
                            <tr>
                                <th>
                                    Fullname
                                </th>
                                <th>
                                    Age
                                </th>
                                <th>
                                    Gender
                                </th>
                            </tr>
            </div>
            <div class="table">
                <?php
                            foreach ($data as $info)
                            {
                ?>
                                <tr>
                                    <td>
                <?php
                                    echo $info["fullname"] . " ";
                ?>
                                    </td>
                                    <td>
                <?php
                                    echo $info["age"] . " ";
                ?>
                                    </td>
                                    <td>
                <?php
                                    echo $info["gender"] . " ";
                ?>
                                    </td>
                                </tr>
                <?php
                            }
                ?> 
                        </table>
            </div>

            <div class="image1">
                <img src="assets/images/colors.png" alt="Colors of houses">
            </div>
            <div class="image2">
                <img src="assets/images/colors.png" alt="Colors of houses">
            </div>
        </div>
    </body>
</html>