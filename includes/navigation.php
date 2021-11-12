
<header>
    <nav>
        <ul>
            <div class="NavLeft">
                <li><a href="index.php"><img class= "logo" src="img/kletsknopLogo.png"></a></li>
            </div>
            <div class="NavRight">
                <li><a href="buurtbewoners.php">Buurtbewoners</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php 
                    // check if the user is logged in
                    if ($_SESSION["logged-in"] == false) {
                ?>
                <li><a href="registreren.php" class="buttonNav">Registreren</a></li>
                <li><a href="login.php" class="buttonNav">Inloggen</a></li>
                <?php 
                    } else { 
                        
                        ?>
                    
                        <li><a href="includes/logout.php" class="buttonNav">Uitloggen</a></li>
                <?php  } ?>
            </div>
        </ul> 
    </nav>
</header>