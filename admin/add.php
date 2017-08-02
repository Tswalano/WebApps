<?php include 'functhions.php';

$menu = strip_tags($_POST['menu']);
$name = trim(htmlspecialchars($_POST['name']));
$price = strip_tags($_POST['price'].',00');
    
if(isset($_POST['add'])){
        
    $sql = "INSERT INTO tbl_menu VALUES(null, '$menu', '$price', '$name', 'null')";
        
    if($query = mysql_query($sql) or die("ERROR 101 - Add Post - Admin")){
            
        $msgAdd = '<div class="alert alert-success">
                <h3>Menu <strong>'.$name.'</strong> Has Been Successfully Added</h3>
                </div>';
    }else{
        $msgAdd = '<div class="alert alert-warning">
                <h3>Ooops...! Something Went Wrong</h3>
                </div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OPS System | Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="Style.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
    
<body>
    <div class="container">
        
        <!-- Header -->
        <div class="row text-center">
            <h1>OPS SYSTEM</h1>

        </div>
        <!--End of Header -->
        
        <!-- Side Panel -->
        <div class="col-md-4">
            <a class="btn btn-primary btn-lg btn-block" href="index.php">View Orders</a>
            <a class="btn btn-primary btn-lg btn-block" href="add.php">Add Menu</a>
            <a class="btn btn-primary btn-lg btn-block" href="update.php">Update Menu</a>
            <a class="btn btn-primary btn-lg btn-block" href="delete.php">Delete Menu</a>
            <a class="btn btn-primary btn-lg btn-block" href="">Log Out</a>
        </div>
        <!-- End of sidebar panel -->
        
        <!-- Main Panel -->
        <div class="col-sm-8">
            
            <?php echo $msgAdd; ?>
            
            <div class="panel panel-success">
                <div class="panel-heading"><h4>Admin's Panel</h4></div>
                
                <div class="panel-body">
                    <?php addPost(); ?>
                </div>
            </div>
        </div>
        <!-- End of main panel -->
        
    </div> <!-- /.container -->
    </body>
</html>