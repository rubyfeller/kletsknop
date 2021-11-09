<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.min.css">
    <title>Kletsknop - Registreren</title>
</head>
<?php include "includes/navigation.php"?>
<body>
<?php 

    if(isset($_POST['register-name'])) {

        if(!empty($_POST["register-email"])) {
            
            if(!empty($_POST["register-name"])) {

                if (!empty($_POST["register-password"])) { 
                    
                    $emailAdres = strtolower($_POST["register-email"]);
                    $userName = strtolower($_POST["register-name"]);
                    $hashedPassword = password_hash($_POST["register-password"], PASSWORD_DEFAULT);
                    $userAge = strtolower($_POST["register-age"]);
                    $userHobby = strtolower($_POST["register-hobbies"]);
                    $userFacts = strtolower($_POST["register-facts"]);
                    
                    // include database connection
                    include "database.php";

                    $registerStatement = "INSERT INTO users (userEmail, userName, userPassword, userAge, userHobby, userFacts, userPicture) VALUES ('" . $emailAdres . "', '" . $userName . "', '" . $hashedPassword . "',  '" . $userAge . "',  '" . $userHobby . "',  '" . $userFacts . "')";
                
                    // execute the statement
                    if ($connection->query($registerStatement) === TRUE) {
                            
                        echo "Je account is succesvol aangemaakt! :)";
                        
                    } else {
                        echo "Je account is helaas niet aangemaakt.";
                    }

                    // close the database connection
                    $connection->close();
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
</body>
<?php include "includes/footer.php"?>
</html>