<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Kletsknop - Contact</title>
</head>
<?php include "includes/navigation.php"?>
<body>
<div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Adres</div>
          <div class="text-one">Eindhoven, 5612 MA</div>
          <div class="text-two">Rachelsmolen 10</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Telefoonnummer</div>
          <div class="text-one">+0493 06 12345678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">info@fontys.nl</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Stuur ons een bericht!</div>
        <p>Als u een vraag heeft kunt u via het contact formulier ons bereiken. Ook kunt u ons bellen.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Vul hier uw naam in">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Vul hier uw emailadres in">
        </div>
        <div class="input-box message-box">
          <input type="text" placeholder="Stuur hier uw bericht">
        </div>
        <div class="button">
          <input type="button" value="Stuur Bericht" >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
<?php include "includes/footer.php"?>
</html>