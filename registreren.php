
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
        

        <form action="register-handle.php" method="POST">
            
            <div class="register-left">
            <h2>Registreer nu</h2>
                <div class="input-wrapper">
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
            
                <input type="submit" value="Registreren" class="register-button">
            </div>
        </form>
    </div>
</body>
<?php include "includes/footer.php"?>
</html>