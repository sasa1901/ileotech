<?php require '../header.php'; 
if (empty($_GET['nbrBlock'])) {
    $_GET['nbrBlock'] = 1;    
}
    $_SESSION["memory_block"] = $_GET['nbrBlock'];

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
        <?php require '../contact.php'; ?>
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

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form enctype="multipart/form-data" method="POST" action="../../c/notification/index.php">
            <?php
            while ($_GET['nbrBlock']  != 0) {
                ?>
                            <div class="form-group">
                                <label for="id_user" >Id User</label>
                                <select class="form-control" name="id_user<?= $_GET['nbrBlock']; ?>" id="category">
                                    <?php $user = $DB->query("SELECT * FROM `users`"); ?>
                                    <?php foreach ($user as $x): ?>
                                        <option value="<?= $x->id; ?>"><?php echo $x->first_name." "; echo $x->last_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_device" >Id device</label>
                                <select class="form-control" name="id_device<?= $_GET['nbrBlock']; ?>" id="category">
                                    <?php $category = $DB->query("SELECT * FROM `devices`"); ?>
                                    <?php foreach ($category as $x): ?>
                                        <option value="<?= $x->id; ?>"><?= $x->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_notification" >Id notification</label>
                                <select class="form-control" name="id_notification<?= $_GET['nbrBlock']; ?>" id="category">
                                    <?php $notification = $DB->query("SELECT * FROM `notification`"); ?>
                                    <?php foreach ($notification as $x): ?>
                                        <option value="<?= $x->id; ?>"><?= $x->name; ?></option>
                                    <?php endforeach; ?>
                                        
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="notification">Notification</label>
                                <textarea class="form-control" rows="3" name="notification<?= $_GET['nbrBlock']; ?>"  placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></textarea>                        
                            </div>
                <?php
                $_GET['nbrBlock']--;
            }
            ?>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
                <hr>

        </div>
        <?php require '../footer.php'; ?>