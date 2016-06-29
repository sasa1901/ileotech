<?php
require '../header.php';
if (empty($GET['nbrBlock'])) {
    $GET['nbrBlock'] = 1;
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

        <title>Bedishop</title>
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
        <?php require '../nav.php'; ?>

        <div class="container">
            <div class="row">
                <form name="form" action="" method="get">
                    <div class="form-group col-md-4 col-md-offset-4">
                        <label>Choose the number of product to add</label>
                        <input type="text" class="form-control" name="nbrBlock" placeholder="Number of block">
                    </div>
                </form>
            </div>
            <hr>
            <?php
            while ($_GET['nbrBlock'] != 0) {
                ?>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form enctype="multipart/form-data" method="POST" action="../../c/notification/index.php">
                            <div class="form-group">
                                <label for="firstName" >Category</label>
                                <select class="form-control" name="category<?= $_GET['nbrBlock']; ?>" id="category">
                                    <?php $category = $DB->query("SELECT * FROM `category`"); ?>
                                    <?php foreach ($category as $x): ?>
                                        <option value="<?= $x->id; ?>"><?= $x->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Name</label>
                                <input type="text" class="form-control" name="name<?= $_GET['nbrBlock']; ?>" placeholder="Name Item"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" name="image[]" id="exampleInputFile" multiple="">
                                <p class="help-block">Choose your image !</p>
                            </div>
                            <div class="form-group">
                                <label for="username">Price</label>
                                <input type="text" class="form-control" name="price<?= $_GET['nbrBlock']; ?>" placeholder="699.99"/>
                            </div>
                            <div class="form-group">
                                <label for="username">Description</label>
                                <textarea class="form-control" rows="3" name="description<?= $_GET['nbrBlock']; ?>"  placeholder="Excellent product !"></textarea>                        
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
                <hr>
                <?php
                $_GET['nbrBlock'] --;
            }
            ?>

        </div>
        <?php require '../footer.php'; ?>