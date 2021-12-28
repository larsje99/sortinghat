<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="assets/css/create.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&family=Vujahday+Script&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="box">
            <h1 class="header">
                Create account
            </h1>
            <form action="added.php" method="POST">
                <!-- Inputfield for username -->
                <div>
                    <label for="fullname" class="inputname">
                        Fullname
                    </label>
                    <input type="text" name="fullname" class="inputfield1">
                </div>
                
                <!-- Inputfield for age -->
                <div>
                    <label for="age" class="inputage">
                        Age
                    </label>
                    <input type="number" name="age" class="inputfield2">
                </div>

                <!-- Inputfield for gender -->
            <div class="genderText">
                <label for="gender">
                    Gender
                </label>

</br>

                <select name="gender" id="gender">
                    <option value="male">
                        Male
                    </option>

                    <option value="female">
                        Female
                    </option>

                    <option value="unspecified">
                        Unspecified
                    </option>
                </select>
            </div>

                <!-- Submit button -->
                <input name="buttonsubmit" type="submit" class="buttonsubmit" value="Create profile">
            </form>

            <div class="image1">
                <img src="assets/images/colors.png" alt="Colors of houses">
            </div>
            <div class="image2">
                <img src="assets/images/colors.png" alt="Colors of houses">
            </div>
        </div>
    </body>
</html>