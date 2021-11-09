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
                    <label for="register-email">E-mailadres</label>
                    <input type="email" id="register-email" name="register-email" required> 
                </div>
                <div class="input-wrapper">
                    <label for="register-password">Wachtwoord</label>
                    <input type="password" id="register-password" name="register-password" required>
                </div>
                <a href="registreren.php" class="forgotPassword"><p>Wachtwoord vergeten?</p></a>
                <input type="submit" value="Inloggen" class="inlog-button">
        </form>
    </div>
</body>
</html>