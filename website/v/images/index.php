<?php require '../header.php'; ?>
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
        <link href="/bedishop/Bedishop/nbproject/v/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/bedishop/Bedishop/nbproject/v/bootstrap/dist/css/shop-homepage.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
<?php require '../nav.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputName2">Name of product</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Ipad">
                </div>
                <div class="form-group">
                    <label for="exampleInputAmount">Price</label>
                    <div class="input-group">
                        <div class="input-group-addon">€</div>
                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Description</label>
                    <textarea class="form-control" rows="4"></textarea>                    
                </div>                
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require '../footer.php'; ?>