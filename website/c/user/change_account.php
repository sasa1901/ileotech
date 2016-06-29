<?php
require dirname(__FILE__) . '/../../v/header.php';

function check_field($form) {
    $check_post = array();
    $check_post["first_name"] = "";
    $check_post["last_name"] = "";
    $check_post["email"] = "";
    $check_post["address"] = "";
    $check_post["cp"] = "";
    $check_post["phone"] = "";

    if (!empty($form['first_name']))
        $check_post["first_name"] = "first_name = '" . $form['first_name'] . "' ";
    if (!empty($form['last_name']))
        $check_post["last_name"] = "last_name =  '" . $form['last_name'] . "' ";
    if (!empty($form['email']))
        $check_post["email"] = "email =  '" . $form['email'] . "' ";
    if (!empty($form['address']))
        $check_post["address"] = "address =  '" . $form['address'] . "' ";
    if (!empty($form['cp']))
        $check_post["cp"] = "cp =  '" . $form['cp'] . "' ";
    if (!empty($form['phone']))
        $check_post["phone"] = "phone =  '" . $form['phone'] . "' ";

    return($check_post);
}

//$_POST['first_name'] = "";
////$_POST['first_name'] = "";
//$_POST['last_name'] = "maincer";
////$_POST['last_name'] = "";
//$_POST['email'] = "saidmain@live.fr";
////$_POST['email'] = "";
//$_POST['address'] = "31 boulevard de finlande";
////$_POST['address'] = "";
//$_POST['cp'] = "92700";
////$_POST['cp'] = "";
//$_POST['phone'] = "18834556";

//$_POST['phone'] = "";


function comma($check_post) {
    $str = "";
    $i = 0;
    foreach ($check_post as $key => $x) {
        if ($i == 0) {
            echo $i . '<br/>';
            if (empty($str)) {
                $str = $x;
            } else {
                $str = $str . ", " . $x;
            }
            echo $str;
            echo '<br/>///////////////////<br/>';
        } else {
            echo $i . '<br/>';
            if (!empty($x)) {
                if (empty($str)) {
                    $str = $x;
                } else {
                    $str = $str . ", " . $x;
                }
            }
            echo $str;
            echo '<br/>///////////////////<br/>';
        }
        $i++;
    }
    return($str);
}

//var_dump($check_post);
//var_dump();
//die("fin");

// Utiliser le typage UTF8

// // Verifier avant de faire la requête UPDATE SET 
// si il y a un champs rempli dans $_POST

////$r = 0;
//foreach ($_POST as $x):
//
//    if (!empty($x)) {
//        $r++;
//        echo $x . " " . $r . "</br>";
//    }
//
//endforeach;

try {
    // On se connecte
    $bdd = new PDO('mysql:host=localhost;dbname=personews', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // On prépare la requête
    $check_post = check_field($_POST);
    $check_post = comma($check_post);
    //var_dump($check_post);
//    $test = "UPDATE users SET ".$check_post." WHERE id = :id";
//    echo $test;
//    die("");

    $requete = $bdd->prepare("UPDATE users SET " . $check_post . " WHERE id = :id");

    // On lie la variable $email définie au-dessus au paramètre :email de la requête préparée
    $requete->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_STR);

    //On exécute la requête
    $requete->execute();
    ?>   <script>        window.location.replace("<?= $path_project; ?>v/user/account.php");</script>
    <?php
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?> 