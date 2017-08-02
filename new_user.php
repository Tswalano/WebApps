<!DOCTYPE html>
<html lang="en">
<head>
  <title>OPS System | User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/bootstrap/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="admin/bootstrap/css/Style.css">
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
          <a class="navbar-brand" href="index.php">OPS SYSTEM</a>
        </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="links">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="#">Locate a Shop</a></li>
                    <li><a href="#">Update Info</a></li>
                    <li><a href="logout.php">Sign Out</a></li>
                </ul>
            </div>
          
        </div>
    </nav> 
    <!-- End of navigation bar -->

    <div class="container">

        <!-- Header -->
     
            <h1 id="top-label">OPS SYSTEM</h1>
        <div class="container alert alert-success">
            <div class="col-md-1">
                <img id="img" src="admin/img/user.png" alt
                     height="90px">
            </div>
            <div class="col-md-11">
                <h3>Welcome To OPS System!</h3>
                <strong></strong>
            </div>
        </div>

        <a class="btn btn-success btn-md" href="<?php echo $url; ?>">Shop Now</a>

    </div>
        <!--End of Header -->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>