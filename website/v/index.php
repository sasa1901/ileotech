<?php
require 'header.php';
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








    <link href="<?= $path_project; ?>v/bootstrap/startbootstrap-modern-business-1.0.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= $path_project; ?>v/bootstrap/startbootstrap-modern-business-1.0.5/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= $path_project; ?>v/bootstrap/startbootstrap-modern-business-1.0.5/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">





        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body>

        <?php
        require 'contact.php';
        require 'nav.php';


        /*
          $image = new Imagick('images/picture2.jpg');
          $image->adaptiveResizeImage(320,320);

          echo $image;
         */
//var_dump($DB->query('SELECT * FROM flow'));
        ?>

        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <!--
                
                            <div class="col-md-3">
                                <p class="lead">Shop Name</p>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">Category 1</a>
                                    <a href="#" class="list-group-item">Category 2</a>
                                    <a href="#" class="list-group-item">Category 3</a>
                                </div>
                            </div>
                -->
    


        <!-- Content Row -->
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Basic</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>0<sup>00</sup></span>
                        <span class="period">per month</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>1</strong> User</li>
                        <li class="list-group-item"><strong>5</strong> Projects</li>
                        <li class="list-group-item"><strong>Unlimited</strong> Email Accounts</li>
                        <li class="list-group-item"><strong>10GB</strong> Disk Space</li>
                        <li class="list-group-item"><strong>100GB</strong> Monthly Bandwidth</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Sign Up!</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Plus</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>4<sup>99</sup></span>
                        <span class="period">per month</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>10</strong> User</li>
                        <li class="list-group-item"><strong>500</strong> Projects</li>
                        <li class="list-group-item"><strong>Unlimited</strong> Email Accounts</li>
                        <li class="list-group-item"><strong>1000GB</strong> Disk Space</li>
                        <li class="list-group-item"><strong>10000GB</strong> Monthly Bandwidth</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Sign Up!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.row -->
                        
                        
                        
                        
                        <!--
                                         <div class="col-sm-3 col-lg-3 col-md-3">
                                             <h4><a href="#">Like this template?</a>
                                             </h4>
                                             <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                                             <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                                         </div>
                        -->
                    </div>

                </div>

            </div>

        </div>
        <!-- /.container -->

<?php require 'footer.php'; ?>