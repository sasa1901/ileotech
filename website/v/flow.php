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
        <?php require 'nav.php'; ?>

        <div class="container">
            <div class="row">



                        <?php $products = $DB->query("SELECT * FROM `notifcontent`"); ?>
<div class="panel-group"   id="accordion" role="tablist" aria-multiselectable="true">
            <?php foreach ($products as $x): ?>
                        <a href="product/index.php?id=<?= $x->id; ?>">

  <div class="panel panel-default col-sm-3 col-lg-3 col-md-3">
    <div class="panel-heading" role="tab" id="heading<?= $x->id; ?>">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $x->id; ?>" aria-expanded="false" aria-controls="collapse<?= $x->id; ?>">
            <?= $x->title; ?>
        </a>
      </h4>
    </div>
    <div id="collapse<?= $x->id; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $x->id; ?>">
      <div class="panel-body">
                      <?= $x->content; ?>
      </div>
    </div>
  </div>

                <?php endforeach; ?>
<!--  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?= $x->id; ?>">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $x->id; ?>" aria-expanded="false" aria-controls="collapse<?= $x->id; ?>">
            <?= $x->title; ?>
        </a>
      </h4>
    </div>
    <div id="collapse<?= $x->id; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="<?= $x->id; ?>">
      <div class="panel-body">
                      <?= $x->content; ?>
      </div>
    </div>
  </div>-->

</div>                            


                            
                            
                            
            <?php require 'footer.php'; ?>