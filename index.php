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
          <a class="navbar-brand" href="#"><h3>OPS SYSTEM</h3></a>
        </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right form-inline">
                    <form class="navbar-form" role="form" method="POST" action="user.php">
                        
                        <div class="row">
                            <div class="form-group">
                                <small id="nav-label">Email or Number</small></br>
                                <input type="text" class="form-control input-sm" name="user" autofocus placeholder="Email or Number" required="">
                            </div>
                            <div class="form-group">
                              <small id="nav-label">Password</small></br>
                              <input type="password" class="form-control input-sm" name="pass" placeholder="Password" required=""><br>
                            </div>
                            <div class="form-group">
                              <br>
                              <button type="login" class="btn btn-success btn-sm" name="login">SignIn</button><br/>
                            </div>
                        </div>
                    <div class="row">
                      <div class="form-group">
                      <ul class="nav navbar-nav">
                      <small><a href="">Forgot Password?</a></small>
                      </ul>
                      </div>
                    </div>
                                         
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of navigation bar -->
    
    <div class="container">
                    
        <div id="reg-form">
            <?php global $msgL;
            echo "$msgL";
            ?>
            
            <h1 class="text-center">CREATE OPS USER ACCOUNT</h1>
            <br>
            <br>
            
            <?php include 'register.php'; ?>
        </div>            
        
    </div>

<div class="container">
    <!-- EMPTY SPACE -->
</div>


<!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p class="text-muted">
        <div class="pull-right">
            <small>
          <a href="#">Terms &amp; Condition</a> | 
          <a href="#">Security</a></small>
        </div>

          <small>OPS SYSTEM &copy; 2016 | Product of GeeInSolution</small>

          <center>
          <div id="social">
          <a class="btn btn-social-icon btn-facebook"></a>
          <span class="fa fa-facebook"  style="color:#008de7;"></span>
          <a class="btn btn-social-icon btn-twitter"></a>
          <span class="fa fa-twitter"  style="color:#66ccff;"></span>
          <a class="btn btn-social-icon btn-google"></a>
          <span class="fa fa-google" style="color:#ff2448;"></span>
          </div>
          </center>
          
        </div>
</footer>
    <!-- /Footer -->

    
    
        <!-- -------------------SCRIPTS HERE-------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/bootstrap/js/jquery.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    </body>
</html>