<?php
require dirname(__FILE__) . ('/../../v/header.php');
?>
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
        <link href="<?= $path_project; ?>v/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

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
        <?php

        function my_isset($check) {
            if (isset($check)) {
                return $check;
            } else {
                return ("error");
            }
        }

        function check_image($image, $name_path, $i) {

//            var_dump($name_path);
//            die();
            $target_dir = "../../v/images/";
            $target_file = $target_dir . basename($name_path);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($image["image"]["tmp_name"][$i]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"][$i] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.</br>";
                $uploadOk = 0;
            }
//            echo "RENDU : " . $uploadOk . "</br>";
            // Check file size
            if ($image["image"]["size"][$i] > 500000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk != 0) {
                if (move_uploaded_file($image["image"]["tmp_name"][$i], $target_file)) {
//                    echo "The file " . basename($image["image"]["name"][$i]) . " has been uploaded.</br>";
                } else {
                    echo "Sorry, there was an error uploading your file.</br></br>";
                }
            } else {
                echo "Sorry, your file was not uploaded.</br></br>";
                // if everything is ok, try to upload file
            }
        }

        function checkIfProductExist($name_product, $DB) {

            $products = $DB->query("SELECT id FROM `product` WHERE name = '" . $name_product . "'");
            $nbr = count($products);
            return $nbr;
//            echo "Nbr de ligne ---->" . $nbr . "</br>";
//            var_dump($products);
//            die("FINIIIIIII");
        }

//        $loop = count($_FILES["image"]["name"]) + 1;
//        var_dump($_POST);
//        var_dump($_FILES);
//        die();
//        $y = 1;
//        $w = 0;
//        while ($y < $loop) {
//            $category = my_isset($_POST['category' . $y . '']);
//            $name = my_isset($_POST['name' . $y . '']);
//            $price = my_isset($_POST['price' . $y . '']);
//            $description = my_isset($_POST['description' . $y . '']);
//
//            $exist = checkIfProductExist($name, $DB);
//            if ($exist == 0) {
//                $products = $DB->insert_query("INSERT INTO `product` (id_category, name, price, description)
//          VALUES (:id_category, :name, :price, :description)", array(
//                    'id_category' => $category,
//                    'name' => $name,
//                    'price' => $price,
//                    'description' => $description
//                ));
//                $products = $DB->query("SELECT id FROM `product` WHERE name = '" . $_POST['name' . $y . ''] . "'");
//                //$i = 0;
//                foreach ($products as $x):
//                    $name_path = $x->id;
//                    $extension = pathinfo($_FILES["image"]['name'][$w], PATHINFO_EXTENSION);
//                    $name_path = $name_path . '.' . $extension;
//                    $products = $DB->insert_query("UPDATE `product` SET name_path = '" . $name_path . "'
//          WHERE id = '" . $x->id . "'");
//
//                endforeach;
//                check_image($_FILES, $name_path, $w);
//            }else {
//                echo 'Product already exist !</br>';
//            }
//            $y++;
//            $w++;
//        }
//        

        require ('../../v/nav.php');
            
                try {
                    // On se connecte
                    $bdd = new PDO('mysql:host=localhost;dbname=personews', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                    // On prépare la requête
                    $requete = $bdd->prepare("INSERT INTO  notifcontent (content) VALUES (:content)");

                while ($_SESSION["memory_block"]  != 0) {
                //echo $_POST["notification".$_SESSION["memory_block"] ];

                $requete->bindParam(':content', $_POST["notification".$_SESSION["memory_block"] ]);
                
                $_SESSION["memory_block"] --;
            $requete->execute();
            }
            //On exécute la requête

            } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
            }
            
            
            
            
            
            
            
            
            ?>
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 class="text-center">Operation Complet !</h1>
                    <p><a class="btn btn-primary btn-lg center-block" href="<?= $path_project; ?>v/admin/add_notif.php" role="button">Go add more notifications</a></p>
                </div>               
            </div>
        </div>
        <!-- /.container -->

        <?php require dirname(__FILE__) . ('/../../v/footer.php'); ?>