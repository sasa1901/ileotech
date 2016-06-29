<?php
require '../header.php';
if (empty($_GET['id'])) {
    $_GET['id'] = 1;
}
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
        <link href="<?= $path_project; ?>v/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= $path_project; ?>v/bootstrap/dist/css/shop-item.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>


            .aze{
                /* background-color: #000099;
                   height: 500px;
                   width: 500px; 
                */
            }
        </style>

    </head>

    <body>

        <?php require '../nav.php'; ?>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <?php
                $product = $DB->query('SELECT * FROM flow WHERE id=:id', array('id' => $_GET['id']));
                ?>
                <?php foreach ($product as $x): ?>
                    <div class="col-md-8 col-md-offset-2">

                        <div class="thumbnail">

                            <div class="row">
                                <div class = "col-md-5 aze">
                                    <h1 class="text-center"><?= $x->name; ?></h1>
    <!--                                        <img class=”img-responsive” src="images/<?= $x->name_path; ?>" alt=""/>-->
                                </div>
                                <div class = "col-md-3 aze col-lg-offset-4">
                                    <?php if ($_GET['id'] == 5 || $_GET['id'] == 6) { ?>
                                        <div class = "pull-right"><a href = "../checkout.php?id=<?= $x->id; ?>" class = "btn btn-primary" role = "button">Go pay !</a></div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class = "caption-full">
                                <h4 class = "pull-right"><?= number_format($x->price, 2, ',', ' '); ?> $</h4>
                                <h4><a href = "#"><?= $x->name; ?></a>
                                </h4>
                                <p><?= $x->description; ?></p>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>
        <!--/.container -->

        <div class = "container">

            <hr>

            <!--Footer -->
            <footer>
                <div class = "row">
                    <div class = "col-md-12">
                        <p class = "text-center">Copyright &copy;
                            Bedishop 2015</p>
                    </div>
                </div>
            </footer>

        </div>
        <!--/.container -->

        <!--jQuery -->
        <script src = "../bootstrap/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>
