<?php require '../header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PersoNews</title>
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
        <?php require '../nav.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <form method="POST" action="<?= $path_project; ?>c/user/index.php">
                        <div class="form-group">
                            <label for="firstName" >First name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="Nikola"/>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="lastName" placeholder="Tesla"/>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="NT"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control"  name="email"id="exampleInputEmail1" placeholder="nt@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="passwrd">Password</label>
                            <input type="password" class="form-control" name="passwrd" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPasswrd">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPasswrd" id="exampleInputPassword1" placeholder="Confirm Password">
                        </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address"  placeholder="New York"/>
                    </div>
                    <div class="form-group">
                        <label for="cp">CP</label>
                        <input type="text" class="form-control" name="cp"  placeholder="92700"/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="06.64.54.83.37"/>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of birth</label>
                        <input type="text" class="form-control" name="dob" placeholder="1856/07/10"/>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php require '../footer.php'; ?>