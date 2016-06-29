<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= $path_project; ?>v/index.php"><img class=”img-responsive” src="<?= $path_project; ?>v/images/personews-version2.png" alt=""/></a>
            <!--            <a class="navbar-brand" href="/personews2/website/v/index.php">PersoNews</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!--                <li class="active"><a href="/personews2/website/v/index.php">Home</a></li>-->
                <li><a href="<?= $path_project; ?>v/index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Offers <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        $product = $DB->query('SELECT * FROM flow');
                        ?>
                        <?php foreach ($product as $x): ?>

                            <li><a href="<?= $path_project; ?>v/product/index.php?id=<?= $x->id; ?>"><?= $x->name; ?></a></li>
                            <!--<li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>-->
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php
                if (!empty($_SESSION['user'])) {
                    ?>
                    <li><a href="<?= $path_project; ?>v/user/account.php">My Account</a></li>
                <?php } else {
                    ?>
                    <li><a href="<?= $path_project; ?>v/user/index.php">My Account</a></li>                    
                <?php } ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Flow<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $path_project; ?>v/flow.php">Flow 1</a></li>
                        <li><a href="<?= $path_project; ?>v/flow2.php">Flow 2</a></li>
                    </ul>
                </li>
                <li><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Contact</a></li>
            </ul>


            <?php if (empty($_SESSION['user'])) { ?>
                <form method="POST" action="<?= $path_project; ?>c/user/login.php" class="navbar-form navbar-right">          
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-user"></span>
                        <span>Log In</span>

                    </button>
                    <a href="<?= $path_project; ?>v/user/index.php">
                        <span class="btn btn-success">
                            <span>Sign Up</span>
                        </span>
                    </a>

                <?php } else { ?>
                    <div class="dropdown navbar-form navbar-right">
                        <button class="btn btn-default right dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="glyphicon glyphicon-user"></span>
                            <span class="caret"></span>
                            <span>Hello <?= $_SESSION['user']; ?></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="<?= $path_project; ?>c/user/disconnect.php">Deconnexion</a></li>
                        </ul>
                    </div>

                    <?php
                }
                ?>
            </form>


        </div><!--/.navbar-collapse -->
    </div>
</nav>
<div class="container">
    <div class="row">
        <form method="POST"  action="<?= $path_project; ?>v/result_of_search.php" class="form-inline col-md-4">
            <div class="form-group">
                <label class="sr-only" for=""></label>
                <?php 
                                if(!empty($_SESSION["research"])){
                                   ?> <input type="text" name="search" class="form-control"  placeholder="Search => <?= $_SESSION["research"]; ?>">
                <?php                }else{
                                 ?>   <input type="text" name="search" class="form-control" id="" placeholder="Search ...">                                    
                <?php                }

                ?>
            </div>
            <button type="submit" class="btn btn-primary">go</button>
        </form>                
    </div>
</div>

<hr>