<?php 
    // include database connection
    include "database.php";
    session_start();

    
    $_SESSION["logged-in"] = false;
    if(isset($_SESSION["logged-in"]) && $_SESSION["logged-in"] === true) {
        header("location: index.php");
        exit;
    }

    if(isset($_POST["login-submit"])) {
        // check if username is not empty
        
        if (!empty($_POST["login-email"])) {
           
            // check if password is not empty
            if (!empty($_POST["login-password"])) {
               
                // lowercase the username
                $userEmail = strtolower($_POST["login-email"]);
                
                // setup a SQL statement and save the data in an array
                $userStatement = "SELECT * FROM users WHERE userEmail = '$userEmail'";
                $userResult = $connection->query($userStatement);
                $userInformation = $userResult->fetch_assoc();
                
                // check if the filled in password matches the hashed password from the database
                if (password_verify($_POST["login-password"], $userInformation["userPassword"])) {
                    
                    
                    // make the user logged in and store the userid in the session
                    $_SESSION["logged-in"] = TRUE;
                    $_SESSION["userId"] = $userInformation["user_Id"];
                    
                    // direct the user to the home page
                    header('location: index.php');
                    // close the database connection
                    $connection->close();
                } else {
                    echo "<script>alert('Je opgegeven inloggegevens zijn incorrect.')</script>";
                }

            } else {
                echo "<script>alert('Je wachtwoord mag niet leeg zijn.')</script>";
            }

        } else {
            echo "<script>alert('Je gebruikersnaam mag niet leeg zijn.')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Kletsknop - Inloggen</title>
</head>
<?php include "includes/navigation.php"?>
<body>
<div class="inlog-container">
        <form action="" method="POST">
            <h2>Inloggen</h2>
                <div class="input-wrapper">
                    <label for="login-email">E-mailadres</label>
                    <input type="email" id="login-email" name="login-email" required> 
                </div>
                <div class="input-wrapper">
                    <label for="login-password">Wachtwoord</label>
                    <input type="password" id="login-password" name="login-password" required>
                </div>
                <a href="#" class="forgotPassword"><p>Wachtwoord vergeten?</p></a>
                <input type="submit" name="login-submit" value="Inloggen" class="inlog-button">
        </form>
    </div>
</body>
<script src="js/main.js"></script>
</html>