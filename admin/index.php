<?php include 'functhions.php'; ?>
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
            <div class="panel panel-success">
                <div class="panel-heading"><h4>Admin's Panel</h4></div>
                
                <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr><th class="col-sm-2">Order No.</th>
                        <th class="col-sm-4">Order Name</th>
                        <th class="col-sm-2">Cust. Name</th>
                        <th class="col-sm-2">Cust. Number</th>
                        <th class="col-sm-2">Status</th></tr>
                    </thead>
                    
                    <tbody>
                            <?php view_results(); ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- End of main panel -->
        
    </div> <!-- /.container -->
    </body>
</html>