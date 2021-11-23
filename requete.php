<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css" />
    <title>test_requete_CFR</title>
</head>
<body>
    <div>
        <div class="titre"><h1>Test de requetes</h1></div>
        
        <div class="news">
            <?php
                try {
                    $bdd = new PDO('mysql:host=localhost:3306;dbname=ojtb5163_testDB;charset=utf8', 'ojtb5163_groupecfr_lecture', 'P6ea0c3_!Mxr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                } catch (Exception $e) {
                    die('Erreur : '.$e->getMessage());
                }
                
                // $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ssec") AS date FROM billets ORDER BY date DESC');
                $req = $bdd->query('SELECT ID, FORMATIONS, METHODE_PEDAGOGIQUE, PUBLIC_VISE, PREREQUIS, OBJECTIFS FROM catalogue_formations');

                // table_name(ID, FORMATIONS, METHODE_PEDAGOGIQUE, PUBLIC_VISE, PREREQUIS, OBJECTIFS)
            ?>            
            
            <?php
                while ($donnees = $req->fetch()) {
                    if (empty($donnees)) {
                        echo "La page demandée n'existe pas...";
                    } else {
                        ?>

            <!-- <div class="testimonial">
                <div class="pic">
                <img src="asset/img/cfr_profil_w3.svg">
                </div>
                <p class="description">
                <?php //echo htmlspecialchars($donnees['description testimonails']) ?>
                </p>
                <h3 class="title"><?php //echo htmlspecialchars($donnees['nom']) ?></h3>
                <small class="post"><?php //echo htmlspecialchars($donnees['']) ?></small>
          </div> -->




                <div class="bloc_message">
                
            <?php echo htmlspecialchars($donnees['FORMATIONS']); ?>
                
                
                </div>
<?php
                    }
                }
        $req->closeCursor(); // Fin de requète SQL
?> 


        </div>
    </div>
</body>
</html>