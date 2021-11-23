<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon menu web">
    <link rel="icon" type="image" sizes="32x32" href="asset/">
    <link rel="stylesheet" href="css/formation_cards.css">

    <title>Menu contextuel</title>
</head>
<body>
      <?php
          try {
              $bdd = new PDO('mysql:host=localhost:3306;dbname=ojtb5163_testDB;charset=utf8', 'ojtb5163_groupecfr_lecture', 'P6ea0c3_!Mxr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
          } catch (Exception $e) {
              die('Erreur : '.$e->getMessage());
          }
        
          $req = $bdd->query('SELECT ID, FORMATIONS, METHODE_PEDAGOGIQUE, PUBLIC_VISE, PREREQUIS, OBJECTIFS FROM catalogue_formations');
      ?>       
<div class="main">
        <ul class="cards">
          
      <?php
        while ($donnees = $req->fetch()) {
            if (empty($donnees)) {
                echo "La page demandée n'existe pas...";
            } else {
                ?>

          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="./asset/photo_cards/formation_cfr.webp"></div>
              <div class="card_content">
                <h2 class="card_title"><?php echo htmlspecialchars($donnees['FORMATIONS']); ?></h2>
                <p class="card_text"><?php echo htmlspecialchars($donnees['OBJECTIFS']); ?></p>
                <button class="btn card_btn">Read More</button>
              </div>
            </div>
          </li>
      <?php
            }
        }
        $req->closeCursor(); // Fin de requète SQL
?> 

   <!------------->
        </ul>
      </div>
</body>

</html>