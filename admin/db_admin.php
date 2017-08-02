<?php
include 'db/connection.php';

$menu = $_POST['menu'];
$name = $_POST['name'];
$p = $_POST['price'];
$price = $p.',00';

//INSERT INTO `ops_system`.`tbl_menu` (`menu_id`, `menu`, `price`, `name`, `img_path`) VALUES (NULL, 'rrtrt', 'ttrrt', 'trtrt', '0')
$sql = "INSERT INTO tbl_menu VALUES(null, '$menu', '$price', '$name', 'null')";
    $query = mysql_query($sql) or die("ERROR 101 - HOME admin");
    
    if(isset($_POST['submit'])){
        if($query == 1){
            $msg = '<div class="alert alert-success">
                    <h3>New Menu Added</h3>
                    </div>';
            header("location:add.php");
        } else
        {
            $msg = '<div class="alert alert-danger">
                    <h3>Unfortunately Something went wrong</h3>
                    </div>';
        }
    }

?>