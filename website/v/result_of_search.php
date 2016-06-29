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
        <?php $_SESSION["research"] = $_POST["search"]; ?>
        <?php require 'nav.php'; ?>


        <div class="container">
            <div class="row">
                <?php // $products = $DB->query("SELECT * FROM `flow` WHERE MATCH(name) AGAINST('".$_GET['search']."' IN BOOLEAN MODE)"); ?>
                <?php $products = $DB->query("SELECT * FROM `notifcontent` WHERE MATCH(title, content) AGAINST('" . $_SESSION["research"] . "' IN BOOLEAN MODE)"); ?>
                <?php //$products = $DB->query("SELECT * FROM notifcontent WHERE MATCH(title)  AGAINST('".$_POST['search']."'"); ?>
                <?php //$products = $DB->query("SELECT *,   MATCH (title, content)  AGAINST ('".$_SESSION["research"]."') FROM notifcontent "); ?>
                <?php //$products = $DB->query("SELECT *,   MATCH (title, content)  AGAINST ('aze') FROM notifcontent "); ?>
                <?php foreach ($products as $x): ?>



                    <div class="col-md-12">

<!--                        <h1 class="page-header">
                            Page Heading
                            <small>Secondary Text</small>
                        </h1>-->

                        <!-- First Blog Post -->
                        <h2>
                            <a href="#"><?= $x->title; ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="http://www.lemonde.fr/afrique/article/2016/03/20/maroc-affrontements-meurtriers-entre-supporteurs-de-foot_4886506_3212.html">lemonde.fr</a>
                        </p>
<!--                        <p><span class="glyphicon glyphicon-time"></span><?= $x->title; ?> Posted on August 28, 2013 at 10:00 PM</p>-->
                        <p><span class="glyphicon glyphicon-time"></span>Posted on August 28, 2013 at 10:00 PM</p>
                        <hr>
                        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                        <hr>
                        <p>                                   
                            <?= $x->content ?>
                        </p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>


                        <!--                 Pager 
                                        <ul class="pager">
                                            <li class="previous">
                                                <a href="#">← Older</a>
                                            </li>
                                            <li class="next">
                                                <a href="#">Newer →</a>
                                            </li>
                                        </ul>-->

                    </div>





    <!--                    <a href="<?= $path_project; ?>v/product/index.php?id=<?= $x->id; ?>">
                            <div class="col-sm-3 col-lg-3 col-md-3">
                                <div class="thumbnail">
                                        <h1 class="text-center"><?= $x->title; ?></h1>
                                                <img class=”img-responsive” src="images/<?= $x->name_path; ?>" alt=""/>
                                    <div class="caption">
                                        <h4><a href="#"><?= $x->title;
                        ; ?></a>
                                        </h4>
    <?= $x->content ?>
                                    </div>

                                </div>                            
                            </div>
                        </a>-->
<?php endforeach; ?>



            </div>
        </div>
<?php require 'footer.php'; ?>