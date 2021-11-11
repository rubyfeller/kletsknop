<?php 
    // include database connection
    include "database.php";
    session_start();

    $emailAdres = $userName = $hashedPassword = $userAge = $userHobby = $userFacts = "";
    if(isset($_POST['submit'])) {

        if(!empty($_POST["register-email"])) {
            
            if(!empty($_POST["register-name"])) {

                if (!empty($_POST["register-password"])) { 
                    
                    $emailAdres = strtolower($_POST["register-email"]);
                    $userName = strtolower($_POST["register-name"]);
                    $hashedPassword = password_hash($_POST["register-password"], PASSWORD_DEFAULT);
                    $userAge = strtolower($_POST["register-age"]);
                    $userHobby = strtolower($_POST["register-hobbies"]);
                    $userFacts = strtolower($_POST["register-facts"]);

                    $registerStatement = "INSERT INTO users (userId, userEmail, userName, userPassword, userAge, userHobby, userFacts) 
                                          VALUES (null, '$emailAdres', '$userName ', '$hashedPassword ',  '$userAge',  '$userHobby',  '$userFacts');";
                
                    // execute the statement
                    mysqli_query($connection, $registerStatement);
                    
                    // close the database connection
                    $connection->close();

                    echo "<script>alert('Het registreren is gelukt!')</script>";
                } else {
                    echo "Je wachtwoord mag niet leeg zijn.";
                }
            } else {
                echo "Je naam mag niet leeg zijn.";
            }

        } else {
            echo "Je emailadres mag niet leeg zijn.";
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
    <title>Kletsknop - Registreren</title>
</head>
<?php include "includes/navigation.php"?>
<body>
    <div class="registreren-container">

        <form method="POST">
            
            <div class="register-left">
            <h2>Registreer nu</h2>
                <div class="input-wrapper" action="includes/registerAction.php">
                    <label for="register-email">E-mailadres*</label>
                    <input type="email" id="register-email" name="register-email" required> 
                </div>
                <div class="input-wrapper">
                    <label for="register-name">Naam*</label>
                    <input type="text" id="register-name" name="register-name" required>
                </div>
                <div class="input-wrapper">
                    <label for="register-password">Wachtwoord*</label>
                    <input type="password" id="register-password" name="register-password" required>
                </div>
                <div class="input-wrapper">
                    <label for="register-age">Leeftijd</label>
                    <input type="text" id="register-age" name="register-age">
                </div>
                <div class="input-wrapper">
                    <label for="register-hobbies">Hobbies</label>
                    <input type="text" id="register-hobbies" name="register-hobbies">
                </div>
                <div class="input-wrapper">
                    <label for="register-facts">Een leuk feitje</label>
                    <input type="text" id="register-facts" name="register-facts">
                </div>
            </div>
            <div class="register-right">
                <label for="register-icon">Upload hier uw foto</label>
                <input type="" placeholder="Kies bestand">
            
                <input type="submit" name="submit" value="Registreren" class="register-button">
            </div>
        </form>
    </div>
</body>
<?php include "includes/footer.php"?>
</html>
