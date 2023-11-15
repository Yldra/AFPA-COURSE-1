<!-- views/films/show.php -->
<?php

require (__DIR__.'/../header.php');

if (empty($film)) {?>
        <p>No films found.</p>
    <?php } else {?>

        <h1>Film</h1>
                    <img src="http://localhost/cinema/views/pictures/<?=$film['affiche']?>"><br>
                    <strong>Title:</strong> <?=$film['titre']?><br>
                    <strong>Director:</strong> <?=$director['prenom']?> <?=$director['nom']?><br>
                    <strong>Release Year:</strong> <?=$film['date_sortie']?><br>
                    <strong>Actors:</strong><br> <?php
// print_r($actors) ;
    foreach ($actors as $actor) {?>
                      <?=$actor['prenom']?> <?=$actor['nom']?><br>
                  <?php }?>


    <?php }?>
</body>
</html>
