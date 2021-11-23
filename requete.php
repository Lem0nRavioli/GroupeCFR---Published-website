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
                    $bdd = new PDO('mysql:host=localhost:3306;dbname=ojtb5163_testDB;charset=utf8', 'groupecfr_lecture', 'P6ea0c3_!Mxr', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                } catch (Exception $e) {
                    die('Erreur : '.$e->getMessage());
                }
                
                // $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ssec") AS date FROM billets ORDER BY date DESC');
                $req = $bdd->query('SELECT ID, FORMATIONS, METHODE_PEDAGOGIQUE, PUBLIC_VISE, PREREQUIS, OBJECTIFS FROM catalogue_formations ORDER BY date DESC');

                // table_name(ID, FORMATIONS, METHODE_PEDAGOGIQUE, PUBLIC_VISE, PREREQUIS, OBJECTIFS)
            ?>            
            
            <?php
                while ($donnees = $req->fetch()) {
                if (empty($donnees)) {
                    echo "La page demandée n'existe pas...";
                } else {
            ?>
                <div class="bloc_message">
                
                <?php echo htmlspecialchars($donnees['ID']) . htmlspecialchars($donnees['FORMATIONS']) . htmlspecialchars($donnees['METHODE_PEDAGOGIQUE']) .  htmlspecialchars($donnees['PUBLIC_VISE']) . htmlspecialchars($donnees['PREREQUIS']) . htmlspecialchars($donnees['OBJECTIFS']) . "</br> </br> </br> </br>"; 
                ?>
                
                
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