
<header class="header">
    <nav class="navbar">
        <a href="index.php" class="nav-logo"><img class= "logo" src="img/kletsknopLogo.png"></a>
        <ul class="nav-menu">
                <li class="nav-item">
                    <a href="buurtbewoners.php" class="nav-link">Buurtbewoners</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <?php 
                    // check if the user is logged in
                    if ($_SESSION["logged-in"] == false) {
                ?>
                <li class="nav-item">
                    <a href="registreren.php" class="buttonNav nav-link">Registreren</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="buttonNav nav-link">Inloggen</a>
                </li>
                <?php 
                    } else { 
                        
                        ?>
                        <li class="nav-item">
                            <a href="profiel.php" class="buttonNav nav-link">Profiel</a>
                        </li>
                        <li class="nav-item">
                            <a href="includes/logout.php" class="buttonNav nav-link">Uitloggen</a>
                        </li>
                <?php  } ?>
            </div>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>