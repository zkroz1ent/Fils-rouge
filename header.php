<?php
//Création de la session
session_start();
include 'log/log.php';
include 'sql.php';


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/indexcss.css">
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnresource.gtmc.app/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnresource.gtmc.app/magnific-popup/0.9.9/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnresource.gtmc.app/swiper/4.5.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnresource.gtmc.app/iconfonts/fontawesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <br>
    <br>
    

    <!-- Modal -->
    <div id="modal" class="modal">
        <!-- Contenu du modal -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form>
                <input type="text" placeholder="Recherche...">
                <button type="submit">Rechercher</button>
            </form>
        </div>
    </div>

    <div id="company_logo">
    </div>
    </div>

   <div id="index_header" class="sb-site sider-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">



                    <!-- #language_area end -->
                    <div id="company_logo">
                        <a href="http://localhost/fil-rouge/index.php"><img width="50" height="50" src="http://localhost/fil-rouge/img/meuble.png"></a>
                    </div>
                    <!-- #member_search start -->
                    <!-- #member start -->
                    <div id="hello_member">
                        <ul class="nav nav-pills">
                            <?php




                            ?>

                            <li id="m7" t><a href="inscription.php">Inscription</a>
                            </li>

                            <li id="m7"><a href="connexion.php">Connexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="marge">
        <?php
        if (isset($_SESSION['messages'])) {
            // Permet d'afficher les messages sur toutes les autres pages
            foreach ($_SESSION['messages'] as $key => $value) {
                echo '<div class="popup ' . $value[0] . '">';
                echo "<p><strong>" . $key . "</strong> : " . $value[1] . "</p>";
            }
            //Détruit la variable message
            unset($_SESSION['messages']);
            echo "</div>";
        }

        echo '<br>';


        ?>