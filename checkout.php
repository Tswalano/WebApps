<?php 
session_start();
$id = $_SESSION['userid'];

?>
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
          <a class="navbar-brand" href="home.php?userid=<?php echo $id; ?>">OPS SYSTEM</a>
        </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="links">
                    <li class="active"><a href="home.php?userid=<?php echo $id; ?>">Home</a></li>
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
        <div id="top-label">
            <h1>Thank You...! | OPS SYSTEM</h1>
        
    
    <?php
    include 'admin/db/connection.php';
    
    $id = $_GET['oid'];
    $uid = $_GET['userid'];
    $drink = $_POST['drinks'];
    $time = time();
    $dt = date('H:i', $time+("6000"));

    //---------------------------------USER--------------------------------------------------
    $sqlU = "SELECT * FROM tbl_user WHERE user_id = $uid";
    $queryU = mysql_query($sqlU) or die ("Failed 01");
    $rowU = mysql_fetch_assoc($queryU);
    $userID = $rowU['user_id'];
    $uNameU = $rowU['name'];
    $uNumU = $rowU['number'];
    $uShop = $rowU['shop'];
    $uAdr = $rowU['address'];
    
    //---------------------------------MENU--------------------------------------------------
    $sql = "SELECT * FROM tbl_menu WHERE menu_id = $id";
    $query = mysql_query($sql) or die ("Failed 02");
    $row = mysql_fetch_assoc($query);
    $odrName = $row['name'];
    $odrPrice = $row['price'];
    
    if($id != null) {
    
    if(isset($_POST['submit'])){
        
        $rec = '<i class="glyphicon glyphicon-remove"></i>';
    
        $s = "INSERT INTO tbl_order VALUES(null, '$odrName $drink', '$odrPrice', '$uNameU', '$uNumU', '$rec','$dt')";
        $q = mysql_query($s) or die("Error Saving");

            if($q == 1){
                //sql query
                $sqlo = "SELECT * FROM tbl_order ORDER BY order_id DESC LIMIT 1";
                $queryo = mysql_query($sqlo);
                $rowo = mysql_fetch_assoc($queryo);
                $odrNameo = $rowo['order_id'];
                
                echo '<div class="alert alert-success"><h2>Your Order Is Recived</h2>
            <h4><i class="glyphicon glyphicon-ticket"></i>Order Number <strong>#'.$odrNameo.' '.$getDrink.'</strong></h4></div></div>
            
            <div class="col-md-6">
            <div class="alert alert-info">
             <h4 class="text-center">Estimated Time</h4>
             <i class="glyphicon glyphicon-time"></i> Collect Time: <strong>'.$dt.'</strong></br>
             <i class="glyphicon glyphicon-map-marker"> </i> '.$uShop.$uAdr.'</br>
             </div>
             </div>';
                
                $s = "SELECT * FROM tbl_order WHERE cust_name = '$uNameU' AND cust_num = '$uNumU' ORDER BY order_id DESC";
                $q = mysql_query($s);
                
            echo '<div class="col-md-6">
                <div class="alert alert-info">
                <h4 class="text-center">Your Order(s)</h4>';
                
                while($r = mysql_fetch_assoc($q))
                {
                    $o = $r['odr_name'];
                    $p = $r['price'];
                    
                    $total = $p;
                    echo $o.' @ R'.$p.'</br>';
                            
                }
                
                $sel = "SELECT SUM(price) FROM tbl_order WHERE cust_name = '$uNameU' AND cust_num = '$uNumU'";
                $que = mysql_query($sel);
                $get = mysql_fetch_assoc($que);
                $totalAmount = round($get['SUM(price)'],2);
            echo '</br><b>Total Amount:</b> R'.$totalAmount;
            echo '</div></div>';
            }
    }
}
    
?> 
        </div>
    </div>
        <!--End of Header -->
    
    </body>
</html>