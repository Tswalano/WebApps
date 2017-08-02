<?php include 'functhions.php';

if(isset($_POST['update'])){
    
    $page = $_GET['page'];
    //Form variable
    $menu = $_POST['menu'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    
   //UPDATE `tbl_menu` SET `menu_id`=[value-1],`menu`=[value-2],`price`=[value-3],`name`=[value-4],`img_path`=[value-5] WHERE 1 
    $update = "UPDATE tbl_menu SET menu_id='$page', menu='$menu', price='$price', name='$name', img_path=0 WHERE menu_id = $page";
    
    if($run = mysql_query($update) or die ("Error UPDATE")){
        
        $msg = '<div class="alert alert-success">
                    <h3>Menu <strong>'.$name.'</strong> Has Been Updated Successfully</h3>
                </div>';
    }else{
        $msg = '<div class="alert alert-warning">
                    <h3>Welcome to OPS System</h3>
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
        <div class="col-sm-4">
            <a class="btn btn-primary btn-lg btn-block" href="index.php">View Orders</a>
            <a class="btn btn-primary btn-lg btn-block" href="add.php">Add Menu</a>
            <a class="btn btn-primary btn-lg btn-block" href="update.php">Update Menu</a>
            <a class="btn btn-primary btn-lg btn-block" href="delete.php">Delete Menu</a>
            <a class="btn btn-primary btn-lg btn-block" href="">Log Out</a>
        </div>
        <!-- End of sidebar panel -->
        
        <!-- Main Panel -->
        <div class="col-sm-8">
            
            <?php echo $msg; ?>
            
            <div class="panel panel-success">
                    <div class="panel-heading"><h4>Admin's Panel</h4></div>
                
                <div class="panel-body"> 
                    <ul class="nav navbar-nav navbar-right form-inline">
                    <form class="navbar-form" role="form" method="POST" action="update.php?page=<?php echo $page ?>">
                        
                        <div class="row">
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="search" autofocus placeholder="Enter a tearm.." required="">
                            </div>
                            <div class="form-group">
                              <button type="search" class="btn btn-success btn-sm" name="search">Search</button><br/>
                            </div>
                        </div>            
                    </form>
                </ul>
                    <?php updatePost(); ?>
                </div>
            </div>
        </div>
        <!-- End of main panel -->
        
    </div> <!-- /.container -->
    </body>
</html>