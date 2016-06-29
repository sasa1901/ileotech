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
        <link href="/personews2/website/v/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/personews2/website/v/bootstrap/dist/css/shop-homepage.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body>
        <?php
        require dirname(__FILE__) . ('/../../v/nav.php');

        function my_isset($check) {
            if (isset($check)) {
                return $check;
            } else {
                return ("error");
            }
        }

        $firstName = my_isset($_POST['firstName']);
        $lastName = my_isset($_POST['lastName']);
        $username = my_isset($_POST['username']);
        $email = my_isset($_POST['email']);
        $passwrd = my_isset($_POST['passwrd']);
        $confirmPasswrd = my_isset($_POST['confirmPasswrd']);
        $address = my_isset($_POST['address']);
        $cp = my_isset($_POST['cp']);
        $phone = my_isset($_POST['phone']);
        $dob = my_isset($_POST['dob']);
        $doi = date('Y-m-d H:i:s');
/*
        $firstName = "said";
        $lastName = "maincer";
        $username = "sasa";
        $email = "saidmain@live.fr";
        $passwrd = "aze";
        $confirmPasswrd = "aze";
        $address = "31 boulevar de finlance";
        $cp = "92700";
        $phone = "18811602456";
        $dob = "1989/01/19";
        $doi = date('Y-m-d H:i:s');
*/
        $products = $DB->insert_query("INSERT INTO `users` (first_name, last_name, username, email, password, address, cp, phone, dob, doi)
          VALUES (:first_name, :last_name, :username, :email, :password, :address, :cp, :phone, :dob, :doi)", array(
            'first_name' => $firstName,
            'last_name' => $lastName,
            'username' => $username,
            'email' => $email,
            'password' => $passwrd,
            'address' => $confirmPasswrd,
            'cp' => $cp,
            'phone' => $phone,
            'dob' => $dob,
            'doi' => $doi
        ));
        ?>


        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 class="text-center">Welcome to Personews !</h1>
                    <p class="text-center">Thank you for your inscription</p>
                    <p><a class="btn btn-primary btn-lg center-block" href="http://127.0.0.1/personews2/website/v/index.php" role="button">Go back to your page</a></p>
                </div>               
            </div>
        </div>
        <!-- /.container -->

<?php require dirname(__FILE__) . ('/../../v/footer.php'); ?>