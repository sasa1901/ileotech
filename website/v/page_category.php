<?php require 'header.php'; ?>
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
        <link href="<?= $path_project; ?>v/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
        <!-- CUSTOM STYLES -->
        <link href="<?= $path_project; ?>v/bootstrap/dist/css/style.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body>
        <?php require 'nav.php'; ?>

        <div class="container">
            <div class="row">

                <?php $products = $DB->query("SELECT * FROM `flow` WHERE id_category = '" . $_GET['id'] . "'"); ?>
                <?php foreach ($products as $x): ?>
                    <a href="<?= $path_project; ?>v/product/index.php?id=<?= $x->id; ?>">
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="thumbnail">
                                <h1 class="text-center"><?= $x->name; ?></h1>
    <!--                                        <img class=”img-responsive” src="images/<?= $x->name_path; ?>" alt=""/>-->
                                <div class="caption">
                                    <h4 class="pull-right"><?= number_format($x->price, 2, ',', ' '); ?> €</h4>
                                    <h4><a href="#"><?= $x->name; ?></a>
                                    </h4>
                                    <?= $x->description ?>
                                </div>
                            </div>                            
                        </div>
                    </a>
                <?php endforeach; ?>



            </div>
        </div>
        <?php require 'footer.php'; ?>