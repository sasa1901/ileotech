<?php require dirname(__FILE__) . '/../../v/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Personews</title>
        <!-- Bootstrap Core CSS -->
        <!--<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->

        <link href="<?= $path_project; ?>v/bootstrap/startbootstrap-modern-business-1.0.5/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= $path_project; ?>v/bootstrap/dist/css/shop-homepage.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body>
        <?php require dirname(__FILE__) . ('/../../v/nav.php'); ?>

        <div class="container">
            <div class="row">
                <?php
                try {

                    // On se connecte
                    $bdd = new PDO('mysql:host=localhost;dbname=personews', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                    // On prépare la requête
                    $requete = $bdd->prepare("SELECT * FROM users WHERE email = :email AND password = :password");

                    // On lie la variable $email définie au-dessus au paramètre :email de la requête préparée
                    $requete->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
                    $requete->bindValue(':password', $_POST['password'], PDO::PARAM_STR);

                    //On exécute la requête
                    $requete->execute();
                    ?>


                    <?php
// On récupère le résultat
                    if ($requete->fetchAll()) {
                        $requete = $bdd->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
                        $requete->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
                        $requete->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
                        $requete->execute();
                        foreach ($requete as $x):
                            $_SESSION['user'] = $x['username'];
                            $_SESSION['user_id'] = $x["id"];

                        endforeach;
                        echo $_SESSION['user_id'];
//                        die("end");
//                        echo $_SESSION['user']
                        ?>
                                        <script>        window.location.replace("<?= $path_project; ?>v/index.php");</script>

                        <?php
                        //echo 'You already have an account';
                    } else {
                        ?>
                        <div class="jumbotron">
                            <p class="text-center">You are not registred in our database !</p>
                            <p class="text-center">Please create an account to access to a session</p>
                            <p><a class="btn btn-primary btn-lg center-block" href="<?= $path_project; ?>v/user/index.php" role="button">Go creat an account !</a></p>
                        </div>               
                        <?php
                    }
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }


                //$product = $DB->find_query('SELECT * FROM users WHERE first_name=:name', array('name' => $name));
                ?>
            </div>
        </div>
        <?php require dirname(__FILE__) . ('/../../v/footer.php'); ?>