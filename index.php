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
    <title>Kletsknop - Home</title>
</head>
<?php include "includes/navigation.php"?>
<body>
  

  <div class="google-maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79568.70417003262!2d5.381471015315476!3d51.448571670253436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d91b5579c39f%3A0xf39ad2648164b998!2sEindhoven!5e0!3m2!1snl!2snl!4v1636116543983!5m2!1snl!2snl" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    <div class="align-items">
    </div>
  <div class="cards-container">
    <h2 class="titleCards">Knoppen:</h2>
    <div class="cards">
      
      <!-- Card 1 -->
      <div class="blog-card" id="1">

          <div class="description">
            <h1>Fontys Rachelsmolen R10</h1>
            <h2>Zin om te kletsen?</h2>
            <div id ="buttonLine" class="red-line"></div>
            <p id="serverMessage"> </p>

            <svg _ngcontent-erl-c120="" xmlns="http://www.w3.org/2000/svg" width="23" height="23.985" viewBox="0 0 23 23.985"><defs _ngcontent-erl-c120=""><style _ngcontent-erl-c120=""> .low_a { fill: none; } .low_b { clip-path: url(#a); } .low_c { opacity: 1; fill: #e6e6e9; isolation: isolate; } .low_d { clip-path: url(#c); } .low_e { clip-path: url(#d); } </style><clipPath _ngcontent-erl-c120="" id="a"><rect _ngcontent-erl-c120="" x="2" y="14.985" width="6" height="10" class="low_a"></rect></clipPath><clipPath _ngcontent-erl-c120="" id="c"><rect _ngcontent-erl-c120="" x="8" y="14.985" width="6" height="10" class="low_a"></rect></clipPath><clipPath _ngcontent-erl-c120="" id="d"><rect _ngcontent-erl-c120="" x="15" y="14.985" width="6" height="10" class="low_a"></rect></clipPath></defs><path _ngcontent-erl-c120="" d="M4.5,5.485a2.813,2.813,0,0,1-2.4-1.3,3.861,3.861,0,0,1-.3-2.1A3.147,3.147,0,0,1,3.1.385a2.789,2.789,0,0,1,3.8,1,2.581,2.581,0,0,1,.3,2.1A2.982,2.982,0,0,1,6,5.185,4.013,4.013,0,0,1,4.5,5.485Zm0-4.5a2.92,2.92,0,0,0-.9.2,2.1,2.1,0,0,0-.8,1.1,1.907,1.907,0,0,0,.2,1.3,1.779,1.779,0,0,0,2.4.6,1.548,1.548,0,0,0,.8-1.1,1.907,1.907,0,0,0-.2-1.3A1.763,1.763,0,0,0,4.5.985Z"></path><path _ngcontent-erl-c120="" d="M8.5,15.485a.472.472,0,0,1-.5-.5v-5.5a1.538,1.538,0,0,0-1.5-1.5H6a.5.5,0,1,1,0-1h.5A2.476,2.476,0,0,1,9,9.485v5.5A.472.472,0,0,1,8.5,15.485Z"></path><path _ngcontent-erl-c120="" d="M.5,15.485a.472.472,0,0,1-.5-.5v-5.5a2.476,2.476,0,0,1,2.5-2.5H3a.5.5,0,1,1,0,1H2.5A1.538,1.538,0,0,0,1,9.485v5.5A.472.472,0,0,1,.5,15.485Z"></path><g _ngcontent-erl-c120="" class="low_b"><path _ngcontent-erl-c120="" d="M6.5,23.985a.472.472,0,0,1-.5-.5v-9.5a.5.5,0,0,1,1,0v9.5A.472.472,0,0,1,6.5,23.985Z"></path></g><g _ngcontent-erl-c120="" class="low_b"><path _ngcontent-erl-c120="" d="M2.5,23.985a.472.472,0,0,1-.5-.5v-9.5a.472.472,0,0,1,.5-.5.472.472,0,0,1,.5.5v9.5A.472.472,0,0,1,2.5,23.985Z"></path></g><path _ngcontent-erl-c120="" d="M11.5,5.485a2.813,2.813,0,0,1-2.4-1.3,2.581,2.581,0,0,1-.3-2.1,2.742,2.742,0,0,1,1.3-1.7,2.789,2.789,0,0,1,3.8,1,2.581,2.581,0,0,1,.3,2.1,2.742,2.742,0,0,1-1.3,1.7A3.194,3.194,0,0,1,11.5,5.485Zm0-4.5a2.92,2.92,0,0,0-.9.2,1.548,1.548,0,0,0-.8,1.1,1.907,1.907,0,0,0,.2,1.3,1.779,1.779,0,0,0,2.4.6,1.548,1.548,0,0,0,.8-1.1,1.907,1.907,0,0,0-.2-1.3A1.763,1.763,0,0,0,11.5.985Z" class="low_c"></path><path _ngcontent-erl-c120="" d="M15.5,15.985a.472.472,0,0,1-.5-.5v-6a1.538,1.538,0,0,0-1.5-1.5H13a.5.5,0,1,1,0-1h.5a2.476,2.476,0,0,1,2.5,2.5v6A.472.472,0,0,1,15.5,15.985Z" class="low_c"></path><g _ngcontent-erl-c120="" class="low_d"><path _ngcontent-erl-c120="" d="M13.5,23.985a.472.472,0,0,1-.5-.5v-9.5a.5.5,0,0,1,1,0v9.5A.472.472,0,0,1,13.5,23.985Z" class="low_c"></path></g><path _ngcontent-erl-c120="" d="M18.5,5.485a2.813,2.813,0,0,1-2.4-1.3,2.581,2.581,0,0,1-.3-2.1,2.742,2.742,0,0,1,1.3-1.7,2.789,2.789,0,0,1,3.8,1,2.581,2.581,0,0,1,.3,2.1,2.742,2.742,0,0,1-1.3,1.7A3.194,3.194,0,0,1,18.5,5.485Zm0-4.5a2.92,2.92,0,0,0-.9.2,1.548,1.548,0,0,0-.8,1.1,1.907,1.907,0,0,0,.2,1.3,1.779,1.779,0,0,0,2.4.6,1.548,1.548,0,0,0,.8-1.1,1.907,1.907,0,0,0-.2-1.3A1.763,1.763,0,0,0,18.5.985Z" class="low_c"></path><path _ngcontent-erl-c120="" d="M22.5,15.985a.472.472,0,0,1-.5-.5v-6a1.538,1.538,0,0,0-1.5-1.5H20a.5.5,0,1,1,0-1h.5a2.476,2.476,0,0,1,2.5,2.5v6A.472.472,0,0,1,22.5,15.985Z" class="low_c"></path><g _ngcontent-erl-c120="" class="low_c"><g _ngcontent-erl-c120="" class="low_e"><path _ngcontent-erl-c120="" d="M20.5,23.985a.472.472,0,0,1-.5-.5v-9.5a.5.5,0,0,1,1,0v9.5A.472.472,0,0,1,20.5,23.985Z"></path></g></g></svg>  
            <h3 class="peopleUnderway">0 mens(en) onderweg</h3>
            
            <p class="read-more">
              <a class="read-more-a" onclick="accept()" href="#!">Kom Eraan!</a>
            </p>
          </div>
          <div class="meta">
              <div class="photo"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.376249756863!2d5.477473215767922!3d51.45124807962593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d92199730073%3A0x1c98f3a0d8ee087b!2sFontys%20Hogescholen%20(Campus%20Rachelsmolen)!5e0!3m2!1snl!2snl!4v1635860744105!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
        </div>
      

        <!-- Card 1 -->
        <div class="blog-card" id="2">
            <div class="description">
              <h1>Fontys Rachelsmolen R10</h1>
              <h2>Zin om te kletsen?</h2>
              <div class="red-line"></div>
              <p> Knop is nog niet ingedrukt.</p>

              <svg _ngcontent-erl-c120="" xmlns="http://www.w3.org/2000/svg" width="23" height="23.985" viewBox="0 0 23 23.985"><defs _ngcontent-erl-c120=""><style _ngcontent-erl-c120=""> .low_a { fill: none; } .low_b { clip-path: url(#a); } .low_c { opacity: 1; fill: #e6e6e9; isolation: isolate; } .low_d { clip-path: url(#c); } .low_e { clip-path: url(#d); } </style><clipPath _ngcontent-erl-c120="" id="a"><rect _ngcontent-erl-c120="" x="2" y="14.985" width="6" height="10" class="low_a"></rect></clipPath><clipPath _ngcontent-erl-c120="" id="c"><rect _ngcontent-erl-c120="" x="8" y="14.985" width="6" height="10" class="low_a"></rect></clipPath><clipPath _ngcontent-erl-c120="" id="d"><rect _ngcontent-erl-c120="" x="15" y="14.985" width="6" height="10" class="low_a"></rect></clipPath></defs><path _ngcontent-erl-c120="" d="M4.5,5.485a2.813,2.813,0,0,1-2.4-1.3,3.861,3.861,0,0,1-.3-2.1A3.147,3.147,0,0,1,3.1.385a2.789,2.789,0,0,1,3.8,1,2.581,2.581,0,0,1,.3,2.1A2.982,2.982,0,0,1,6,5.185,4.013,4.013,0,0,1,4.5,5.485Zm0-4.5a2.92,2.92,0,0,0-.9.2,2.1,2.1,0,0,0-.8,1.1,1.907,1.907,0,0,0,.2,1.3,1.779,1.779,0,0,0,2.4.6,1.548,1.548,0,0,0,.8-1.1,1.907,1.907,0,0,0-.2-1.3A1.763,1.763,0,0,0,4.5.985Z"></path><path _ngcontent-erl-c120="" d="M8.5,15.485a.472.472,0,0,1-.5-.5v-5.5a1.538,1.538,0,0,0-1.5-1.5H6a.5.5,0,1,1,0-1h.5A2.476,2.476,0,0,1,9,9.485v5.5A.472.472,0,0,1,8.5,15.485Z"></path><path _ngcontent-erl-c120="" d="M.5,15.485a.472.472,0,0,1-.5-.5v-5.5a2.476,2.476,0,0,1,2.5-2.5H3a.5.5,0,1,1,0,1H2.5A1.538,1.538,0,0,0,1,9.485v5.5A.472.472,0,0,1,.5,15.485Z"></path><g _ngcontent-erl-c120="" class="low_b"><path _ngcontent-erl-c120="" d="M6.5,23.985a.472.472,0,0,1-.5-.5v-9.5a.5.5,0,0,1,1,0v9.5A.472.472,0,0,1,6.5,23.985Z"></path></g><g _ngcontent-erl-c120="" class="low_b"><path _ngcontent-erl-c120="" d="M2.5,23.985a.472.472,0,0,1-.5-.5v-9.5a.472.472,0,0,1,.5-.5.472.472,0,0,1,.5.5v9.5A.472.472,0,0,1,2.5,23.985Z"></path></g><path _ngcontent-erl-c120="" d="M11.5,5.485a2.813,2.813,0,0,1-2.4-1.3,2.581,2.581,0,0,1-.3-2.1,2.742,2.742,0,0,1,1.3-1.7,2.789,2.789,0,0,1,3.8,1,2.581,2.581,0,0,1,.3,2.1,2.742,2.742,0,0,1-1.3,1.7A3.194,3.194,0,0,1,11.5,5.485Zm0-4.5a2.92,2.92,0,0,0-.9.2,1.548,1.548,0,0,0-.8,1.1,1.907,1.907,0,0,0,.2,1.3,1.779,1.779,0,0,0,2.4.6,1.548,1.548,0,0,0,.8-1.1,1.907,1.907,0,0,0-.2-1.3A1.763,1.763,0,0,0,11.5.985Z" class="low_c"></path><path _ngcontent-erl-c120="" d="M15.5,15.985a.472.472,0,0,1-.5-.5v-6a1.538,1.538,0,0,0-1.5-1.5H13a.5.5,0,1,1,0-1h.5a2.476,2.476,0,0,1,2.5,2.5v6A.472.472,0,0,1,15.5,15.985Z" class="low_c"></path><g _ngcontent-erl-c120="" class="low_d"><path _ngcontent-erl-c120="" d="M13.5,23.985a.472.472,0,0,1-.5-.5v-9.5a.5.5,0,0,1,1,0v9.5A.472.472,0,0,1,13.5,23.985Z" class="low_c"></path></g><path _ngcontent-erl-c120="" d="M18.5,5.485a2.813,2.813,0,0,1-2.4-1.3,2.581,2.581,0,0,1-.3-2.1,2.742,2.742,0,0,1,1.3-1.7,2.789,2.789,0,0,1,3.8,1,2.581,2.581,0,0,1,.3,2.1,2.742,2.742,0,0,1-1.3,1.7A3.194,3.194,0,0,1,18.5,5.485Zm0-4.5a2.92,2.92,0,0,0-.9.2,1.548,1.548,0,0,0-.8,1.1,1.907,1.907,0,0,0,.2,1.3,1.779,1.779,0,0,0,2.4.6,1.548,1.548,0,0,0,.8-1.1,1.907,1.907,0,0,0-.2-1.3A1.763,1.763,0,0,0,18.5.985Z" class="low_c"></path><path _ngcontent-erl-c120="" d="M22.5,15.985a.472.472,0,0,1-.5-.5v-6a1.538,1.538,0,0,0-1.5-1.5H20a.5.5,0,1,1,0-1h.5a2.476,2.476,0,0,1,2.5,2.5v6A.472.472,0,0,1,22.5,15.985Z" class="low_c"></path><g _ngcontent-erl-c120="" class="low_c"><g _ngcontent-erl-c120="" class="low_e"><path _ngcontent-erl-c120="" d="M20.5,23.985a.472.472,0,0,1-.5-.5v-9.5a.5.5,0,0,1,1,0v9.5A.472.472,0,0,1,20.5,23.985Z"></path></g></g></svg>  
              <h3 class="peopleUnderway">0 mens(en) onderweg</h3>
              
              <p class="read-more">
                <a class="read-more-a" onclick="accept()" href="#!">Kom Eraan!</a>
              </p>
            </div>
            <div class="meta">
                <div class="photo"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.376249756863!2d5.477473215767922!3d51.45124807962593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d92199730073%3A0x1c98f3a0d8ee087b!2sFontys%20Hogescholen%20(Campus%20Rachelsmolen)!5e0!3m2!1snl!2snl!4v1635860744105!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
              </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</body>
<?php include "includes/footer.php"?>
<script src="js/main.js"></script>
</html>