<?php include 'admin/functhions.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>OPS System | User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/bootstrap/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="Style.css">
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/bootstrap/js/jquery.js"></script>
    
</head>
    
<body>
    
    <!-- Navigation Bar Codes Here --> 
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php?userid=<?php echo $_SESSION['userid'] ?>">OPS SYSTEM</a>
        </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="links">
                    <li class="active"><a href="home.php?userid=<?php echo $_SESSION['userid'] ?>">Home</a></li>
                    <li><a href="#">Locate a Shop</a></li>
                    <li><a href="#">Update Info</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of navigation bar -->

    <div class="container">
        
        <br>
        <br>
        <br>

        <!-- Header -->
        <div class="row text-center">
            <h1>Welcome to OPS System</h1>
        </div>
        <!--End of Header -->
        
        <!-- Side Panel -->
        <div class="col-sm-2">
            <b>Select Type<br></b>
        
            <?php getOrder(); ?>
        </div>
        <!-- End of side panel -->
    
        
        <!-- Main Panel -->
        <div class="col-sm-10">
            <?php include 'menu.php' ?>
            ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        </div>
        <!-- End of main panel -->
        
    </div>  <!--/.container -->
    
    <!-- -------------------SCRIPTS HERE-------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/bootstrap/js/jquery.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    </body>
</html>