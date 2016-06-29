<?php require 'header.php'; ?>

<?php
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
        <div class="col-md-12">

            <div class="row carousel-holder">

                <div class="col-md-8 col-md-offset-2">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <?php $products = $DB->query('SELECT * FROM flow'); ?>
                <?php foreach ($products as $x): ?>
                    <a href="product/index.php">
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="thumbnail">
                                <img class=”img-responsive” src="images/<?= $x->name_path ?>" alt=""/>
                                <div class="caption">
                                    <h4 class="pull-right"><?= number_format($x->price, 2, ',', ' '); ?> €</h4>
                                    <h4><a href="#"><?= $x->name ?></a>
                                    </h4>
                                    <?= $x->description ?>
                                </div>

                                <div class="pull-right"><a href="#" class="btn btn-primary" role="button">Button</a></div>
                                <div class="ratings">
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="pull-right">15 reviews</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>


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