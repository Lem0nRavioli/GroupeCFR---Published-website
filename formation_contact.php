<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page contact formation CFR">

    <!-- global links  -->
    <link rel="icon" href="./asset/logos/CFR_Logo_Bleu_Short.png">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/global_navbar.css">
    <link rel="stylesheet" href="./css/global_footer.css">
    <link rel="stylesheet" href="./css/global_social.css">

    <!-- page relative links  -->
    <link rel="stylesheet" href="./css/formation_contact.css">

    <title>Groupe CFR - Contactez-nous</title>
</head>

<body id="main">

    <!-- navbar -->
    <?php include("navbar.php"); ?>
    <!-- fin navbar -->

    <!-- Début contenu -->

    <!-- Début formation contact -->
    <?php
        $monFichier = fopen('../cfr_db_reader/user_test.txt', 'r');
        $login = trim(fgets($monFichier));
        $mdp = trim(fgets($monFichier));
        
        try {
            $bdd = new PDO('mysql:host=localhost:3306;dbname=ojtb5163_testDB;charset=utf8', $login, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } 
        catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

        $id = $_POST['formation'];

        $req=$bdd->prepare('SELECT id_formation, intitule, pre_requis, objectifs, presentiel, distanciel, e_learning, financement FROM liste_formations 
                                        WHERE id_formation = ?');
        $req->execute(array($id));

        while ($donnees = $req->fetch()) {
    ?>

    <div class="wrapper">
        <div class="company-info">
            <h3><?php echo htmlspecialchars($donnees['intitule']); ?></h3>
            <ul>
                <li><i class="fas fa-euro-sign"></i><?php echo htmlspecialchars($donnees['objectifs']); ?></li><br>
                <li><i class="fas fa-calendar-alt"></i>Méthode pédagogique :
                <?php 
                    if ($donnees['presentiel'] != 0) {
                      echo "<br> Présentiel - ";
                    } 
                    if ($donnees['distanciel'] != 0) {
                      echo "Distanciel ";
                    }
                    if ($donnees['e_learning'] != 0 && $donnees['presentiel'] != 0 && $donnees['distanciel'] != 0) {
                      echo "- E-Learning";
                    }
                    elseif ($donnees['e_learning'] != 0 && $donnees['presentiel'] == 0 && $donnees['distanciel'] == 0) {
                      echo "E-Learning";
                    }            
                ?> </li><br>
                <li><i class="fas fa-poll"></i>Prérequis : <?php echo htmlspecialchars($donnees['pre_requis']); ?> </li><br>
                <li><i class="fas fa-poll"></i>Mode de financement : <?php echo htmlspecialchars($donnees['financement']); ?> </li><br>
                <li><i class="fa fa-road"></i> 154 TER avenue Victor Hugo</li>
                <li><i class="fa fa-phone"></i> (+33)637189785</li>
                <li><i class="fa fa-envelope"></i> contact@groupecfr.fr</li>
            </ul>
        </div>

    <?php 
    } 

    $req->closeCursor(); // Fin de requète SQL
    fclose($monFichier); 
    
    ?>

        <div class="contact">
            <h3>S'inscrire à la formation</h3>
            <!-- doc technique -->
            <!-- https://formsubmit.co/ -->
            <form action="https://formsubmit.co/groupecfr3@gmail.com" method="POST" id="contact-form">
                <input type="hidden" name="_subject" value="New submission!">
                <input type="hidden" name="_next" value="http://groupecfr.com/thankyou.html">
                <p>
                    <label>Name</label>
                    <input type="text" name="name" id="name" required>
                </p>

                <p>
                    <label>Company</label>
                    <input type="text" name="company" id="company">
                </p>

                <p>
                    <label>E-mail Address</label>
                    <input type="email" name="email" id="email" required>
                </p>

                <p>
                    <label>Phone Number</label>
                    <input type="text" name="phone" id="phone">
                </p>

                <p class="full">
                    <label>Message</label>
                    <textarea name="message" rows="5" id="message"></textarea>
                </p>

                <p class="full">
                    <button type="submit">Submit</button>
                </p>

            </form>
        </div>

    </div>
    </div>
    <!-- Fin formation contact -->

    <!-- Fin contenu -->

    <!-- footer -->
    <?php include("footer.php"); ?>
    <!-- fin footer -->



</body>

</html>