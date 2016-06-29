<?php require '../header.php'; ?>
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
        <?php require '../nav.php'; ?>
        <div class="container">
            <div class="row">



                <!--<div>
                
                   Nav tabs 
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                  </ul>
                
                   Tab panes 
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">...</div>
                    <div role="tabpanel" class="tab-pane" id="profile">...</div>
                    <div role="tabpanel" class="tab-pane" id="messages">...</div>
                    <div role="tabpanel" class="tab-pane" id="settings">...</div>
                  </div>
                
                </div>-->


                <?php $products = $DB->query("SELECT * FROM `users` WHERE `id` = " . $_SESSION['user_id'] . " "); ?>
                <div class="panel-group"   id="accordion" role="tablist" aria-multiselectable="true">
                    <?php foreach ($products as $x): ?>
                        <!--Markup Bootstrap http://getbootstrap.com/javascript/#fat-->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#viewProfile" aria-controls="viewProfile" role="tab" data-toggle="tab">View profile</a></li>
                            <li role="presentation"><a href="#editProfile" aria-controls="editProfile" role="tab" data-toggle="tab">Edit profile</a></li>
                            <li role="presentation"><a href="#subscription" aria-controls="subscription" role="tab" data-toggle="tab">Subscription</a></li>
                            <li role="presentation"><a href="#receipts" aria-controls="receipts" role="tab" data-toggle="tab">Receipts</a></li>
                            <!--                        <li role="presentation"><a href="#flow" aria-controls="profile" role="flow" data-toggle="tab">Flow</a></li>-->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="viewProfile">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>address</th>
                                            <th>CP</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td><?= $x->first_name; ?></td>
                                        <td><?= $x->last_name; ?></td>
                                        <td><?= $x->email; ?></td>
                                        <td><?= $x->address; ?></td>
                                        <td><?= $x->cp; ?></td>
                                        <td><?= $x->phone; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="editProfile">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>address</th>
                                            <th>CP</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td><?= $x->first_name; ?></td>
                                        <td><?= $x->last_name; ?></td>
                                        <td><?= $x->email; ?></td>
                                        <td><?= $x->address; ?></td>
                                        <td><?= $x->cp; ?></td>
                                        <td><?= $x->phone; ?></td>
                                    </tr>
                                    <tr>
                                    <form method="POST"  action="<?= $path_project; ?>c/user/change_account.php" class="form-inline col-md-4">
                                        <td><input type="text" name="first_name" class="form-control col-sm-2"  placeholder="first name"></td>
                                        <td><input type="text" name="last name" class="form-control col-sm-2"  placeholder="last name"></td>
                                        <td><input type="text" name="email" class="form-control col-sm-2"  placeholder="email"></td>
                                        <td><input type="text" name="address" class="form-control col-sm-2"  placeholder="address"></td>
                                        <td><input type="text" name="cp" class="form-control col-sm-2"  placeholder="CP"></td>
                                        <td><input type="text" name="phone" class="form-control col-sm-2"  placeholder="phone"></td>
                                        <td><button type="submit" class="btn btn-primary">go</button></td>
                                    </form>                
                                    </tr>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="subscription">
                                <div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="receipts">
                                <table id="table-receipts" class="table table-striped table-receipts">
                                    <thead>
                                        <tr>
                                            <th class="th-receipt-date">Date</th>
                                            <th class="th-receipt-orderid">Order ID</th>
                                            <th class="th-receipt-price">Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="receipt">
                                            <td class="receipt-date">10/8/15</td>
                                            <td class="receipt-orderid">
                                                773180516017
                                            </td>
                                            <td class="receipt-price">$0.00</td>
                                        </tr>
                                    </tbody>
                                </table>                           
                            </div>
                            <!--                        <div role="tabpanel" class="tab-pane" id="flow">
                                                        <div>
                                                            dklfjgfkl
                                                        </div>
                                                    </div>
                            -->
                        </div>

                    <?php endforeach; ?>



                    <!--                    <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">
                                            Loading state
                                        </button>-->

                    <script>
                        $('#myButton').on('click', function () {
                            var $btn = $(this).button('loading')
                            // business logic...
                            $btn.button('reset')
                        })
                    </script>
                </div>
            </div>
        </div>
        <?php require '../footer.php'; ?>