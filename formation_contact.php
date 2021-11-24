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
    <div class="wrapper">
        <div class="company-info">
            <h3>Formation</h3>

            <ul>
                <li><i class="fas fa-euro-sign"></i> Tarif :</li>
                <li><i class="fas fa-calendar-alt"></i> Durée :</li>
                <li> <i class="fas fa-poll"></i> CPF :</li>
                 <li><i class="fa fa-road"></i> 154 TER avenue Victor Hugo 75016</li>
                <li><i class="fa fa-phone"></i> 06 37 18 97 85</li>
                <li><i class="fa fa-envelope"></i> contact@groupecfr.fr</li>
            </ul>
        </div>
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
