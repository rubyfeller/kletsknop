<?php 

    // include database connection
    include "database.php";

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Kletsknop - BuurtBewoners</title>
</head>
<?php include "includes/navigation.php"?>
<body>

    <div class="users-container">
    <?php 
    
    $selectUsers = "SELECT * FROM users";
    $result = mysqli_query($connection, $selectUsers);

    while ($row2 = mysqli_fetch_assoc($result)) {
        $users[] = $row2;
    }

    foreach ($users as $key => $user) { ?>
        
        
            <div class="user-container">
                <div class="userPicture">
                    <img src="<?php echo $user['userIcon'] ?>">
                </div>
                <div class="userText">
                    <div class="userName">
                        <h3>Naam:</h3>
                        <p><?php echo $user['userName'] ?></p>
                    </div>
                    <div class="userAge">
                        <h3>Leeftijd:</h3>
                        <p><?php echo $user['userAge'] ?></p>
                    </div>
                    <div class="userHobbies">
                        <h3>Hobbies:</h3>
                        <p><?php echo $user['userHobby'] ?></p>
                    </div>
                    <div class="userFacts">
                        <h3>Feitjes:</h3>
                        <p><?php echo $user['userFacts'] ?></p>
                    </div>
                </div>
            </div>
        

<?php } ?>
    </div>  
</body>
<?php include "includes/footer.php"?>
</html>