<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register product</title>
</head>
<body>
    <?php 
        include_once ('script.php');
        require_once ('vendor/autoload.php');
    ?>
    <div class='container'>
        <?php
            // if ($_GET['message']){
            //     echo ("<div class='alert alert-success'>
            //     <h1>".
            //         $_GET['message']
            //     ."</h1>
            //     </div>");
            // }
        ?>
        <div class="row" id='register'>
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <form action="http://localhost/MyProject1/register_page.php" method="POST">
                        <div class="form-group">
                        <label for="name">Product name:</label>
                        <input name="name" type="text" class="form-control" id="product_name">
                        </div>
                        <div class="form-group">
                        <label for="price">Price:</label>
                        <input name="price" type="text" class="form-control" id="price">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-3">
                </div>

        </div>

        <div id='product-show'>
            <div>
                
            </div>
        </div>
    </div>
</body>
</html>