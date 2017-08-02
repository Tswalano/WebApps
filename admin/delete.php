<?php include 'functhions.php';

$page = $_GET['page'];
    
if(isset($_POST['delete'])){
    
    //SET @num :=0;
    //UPDATE tbl_menu SET menu_id= @num:=(@num+1);
    //ALTER TABLE tbl_menu AUTO_INCREMENT = 1;
        
    $sql = "DELETE FROM tbl_menu WHERE menu_id = $page";
        
    if($query = mysql_query($sql) or die("ERROR 101 - Delete Post - Admin")){
        
        $sql1 = "SET @num :=0";
        $sql2 = "UPDATE tbl_menu SET menu_id= @num:=(@num+1)";
        $sql3 = "ALTER TABLE tbl_menu AUTO_INCREMENT = 1";
        
        mysql_query($sql1) or die("ERROR 102");
        mysql_query($sql2) or die("ERROR 103");
        mysql_query($sql3) or die("ERROR 104");
            
        $msgAdd = '<div class="alert alert-success">
                <h3>Menu <strong>'.$name.'</strong> Has Been Successfully Deleted</h3>
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
            
            <?php echo $msgAdd; ?>
            
            <div class="panel panel-success">
                <div class="panel-heading"><h4>Admin's Panel</h4></div>
                
                <div class="panel-body">
                    <ul class="nav navbar-nav navbar-right form-inline">
                    <form class="navbar-form" role="form" method="POST" action="delete.php?page=<?php echo $page ?>">
                        
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
                    <?php deletePost(); ?>
                </div>
            </div>
        </div>
        <!-- End of main panel -->
        
    </div> <!-- /.container -->
    </body>
</html>