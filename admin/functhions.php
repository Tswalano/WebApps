<?php
include 'drinks.php';
include 'db/connection.php';

function view_results(){
        
    $sel = "SELECT * FROM tbl_order ORDER BY order_id DESC";
    $query = mysql_query($sel);
   // $rows = mysqli_fetch_assoc($query);
    
    $time = time();
    $dt = date('H:i', $time);
    
    while($rows = mysql_fetch_assoc($query)){
        
        if($dt > $rows['odr_time']){
            //12:17 < 12:17
            
            //echo dt."</br>";                11:53 - database
            //echo $rows['odr_time'];         11:50 - currtime
            
            $st = '<i class="glyphicon glyphicon-ok"></i>';
            $update = "UPDATE tbl_order SET status='$st'";
            mysql_query($update) or die("FAILED TO UPDATE");
        }else{
            //do nothing
        }
        
        echo '<tr><td>#000'.$rows['order_id'].'</td>
            <td>'.$rows['odr_name'].'</td>
            <td>'.$rows['cust_name'].'</td>
            <td>0'.$rows['cust_num'].'</td>
            <td><a href="#">'.$rows['status'].'</a></td></tr>';
    }
    
    
}

//<option value="">Hello</option>
function getMenu(){
    
    session_start();
    
    //SHUFFEL THE MENU
    
//    if(){
//        
//    }else{
//        
//    }
    
    $id = $_GET['userid'];
    $sel = "SELECT * FROM tbl_menu";
    $query = mysql_query($sel);
    
    while($rows = mysql_fetch_assoc($query)){
        
        
        
        echo '<tr><td><h4>R'.$rows['price'].',00</h4></td>    
        <td><h4>'.$rows['name'].'</h4></td>    
            <td><h4>'.$rows['menu'].'</h4></td>    
        <td><form method="POST" action="checkout.php?userid='.$id.'&oid='.$rows['menu_id'].'">
            <select class="form-control" name="drinks">
            <option value="">Select Drink</option>
            <option value="">No Drink</option>
            <option value="+ Apple Juice">Apple Juice</option>
            <option value="+ Cider Beer">Cider Beer</option>
            <option value="+ Draught Beer">Draught Beer</option>
            <option value="+ 500ml Sprite">500ml Sprite</option>
            <option value="+ Soft Drink">Soft Drink</option>
            <option value="+ 440ml Fanta">440ml Fanta</option>
            <option value="+ 330ml Coca Cola">330ml Coca Cola</option>
            <option value="+ 2L Coca Cola">2L Coca Cola</option>
            </select>
            </td>
        <td><button type="submit" class="btn btn-info" name="submit">Order</td>
        </form>
        </tr>';
    }
}

function getOrder(){
        
//    $sel = "SELECT * FROM tbl_drinks WHERE drink_id != 1";
//    $query = mysql_query($sel);
//   // $rows = mysqli_fetch_assoc($query);
//    
//    while($rows = mysql_fetch_assoc($query)){
//        
//        //echo '';
//        echo $rows['drink_id'].'  '.$rows['drink'].'</br>';
//    }
    
    echo '<form action="" method="">
    <select class="form-control">
        <option value="">DKota</option>
        <option value="">Hot Staff</option>
        <option value="">Beef Burger With Chips</option>
        <option value="">Chicken Burger With Chips</option>
    </select>
</form>';
    
    
}

function checkOut(){
    
    $id = $_GET['oid'];
    $drinks = $_POST['drinks'];

    
    if($id != null){
        $sql = "SELECT * FROM tbl_menu WHERE menu_id = $id";
        $query = mysql_query($sql);
        $row = mysql_fetch_array($sql);
        $odrName = $row['name'];
        $odrPrice = $row['price'];
    }
    
    $insert = "ÏNSERT INTO tbl_order VALUES ('null','$odrName + $drinks','null','null','null')";
    $query = mysql_query($insert) or die("ERROR 101");
    
    if(isset($_POST['submit'])){
        if($query == 1){
            
            echo '<div class="alert" alert-success">
                    <h3>Thank You! Your Order was recieved</h3>
                    </div>';
                header("location:checkout.php");
        }
    }
}

function addPost(){
        
    echo '<form class="form" action="add.php" method="POST">
    <div class="row">
        <div class="col-sm-12" style="z-index:9;">
            <div class="form-group">
                <label>Menu Items:</label><br>
                <input type="text" class="form-control input-sm" name="menu" placeholder="Menu Items" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="z-index:9;">
            <div class="form-group">
                <label>Menu Name:</label><br>
                <input type="text" class="form-control input-sm" value="Chicken Burger With Chips" name="name" placeholder="Menu Category" required>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>Price:</label><br>
                <div class="input-group">
                        <span class="input-group-addon">R</span>
                        <input type="text" class="form-control" name="price" placeholder="0,00" required>
                    </div>
            </div>
        </div>
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
            <label></label><br>
                <button type="add" class="btn btn-success btn-md" name="add">Add Menu</button>
            </div>
        </div>
    </div>

</form> ';
}

function updatePost(){
    
    $per_page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }

    $start_from = ($page-1) * $per_page;

        
    $sel_sql = "SELECT * FROM tbl_menu WHERE img_path = 0 ORDER BY menu_id ASC LIMIT $start_from,$per_page";
    $run_sql = mysql_query($sel_sql);
    
    while($rows = mysql_fetch_assoc($run_sql)){
        
        echo '<form class="form" action="update.php?page='.$page.'" method="POST">
    <div class="row">
        <div class="col-sm-12" style="z-index:9;">
            <div class="form-group">
                <label>Menu Items:</label><br>
                <input type="text" class="form-control input-sm" value="'.$rows['menu'].'" name="menu" placeholder="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="z-index:9;">
            <div class="form-group">
                <label>Menu Name:</label><br>
                <input type="text" class="form-control input-sm" name="name" placeholder="" value="'.$rows['name'].'">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>Price:</label><br>
                <div class="input-group">
                        <span class="input-group-addon">R</span>
                        <input type="text" class="form-control" value="'.$rows['price'].'" name="price">
                    </div>
            </div>
        </div>
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
            <label></label><br>
                <button type="update" class="btn btn-success btn-md" name="update">Update</button>
            </div>
        </div>
    </div>

    </div>
    <div class="text-center col-sm-12">
    <ul class="pagination">';
    }

    $pagenation_sql = "SELECT * FROM tbl_menu WHERE img_path = 0";
    $run_pagination = mysql_query($pagenation_sql);

    $count = mysql_num_rows($run_pagination);

    $total_pages = ceil($count/$per_page);

    for($i=1;$i<=$total_pages;$i++){
        echo '<li><a href="update.php?page='.$i.'">'.$i.'</a></li>';
    }

    echo '</ul></div>';
    echo '</form> ';
}

function deletePost(){
    
    $per_page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }

    $start_from = ($page-1) * $per_page;

        
    $sel_sql = "SELECT * FROM tbl_menu ORDER BY menu_id ASC LIMIT $start_from,$per_page";
    $run_sql = mysql_query($sel_sql);
    
    while($rows = mysql_fetch_assoc($run_sql)){
        
        echo '<form class="form" action="delete.php?page='.$rows['menu_id'].'" method="POST">
    <div class="row">
        <div class="col-sm-12" style="z-index:9;">
            <div class="form-group">
                <label>Menu Items:</label><br>
                <input type="text" class="form-control input-sm" value="'.$rows['menu'].'" name="menu" placeholder="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="z-index:9;">
            <div class="form-group">
                <label>Menu Name:</label><br>
                <input type="text" class="form-control input-sm" name="name" placeholder="" value="'.$rows['name'].'">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
                <label>Price:</label><br>
                <div class="input-group">
                        <span class="input-group-addon">R</span>
                        <input type="text" class="form-control" value="'.$rows['price'].'" name="price">
                    </div>
            </div>
        </div>
        <div class="col-sm-6" style="z-index:9;">
            <div class="form-group">
            <label></label><br>
                <button type="delete" class="btn btn-success btn-md" name="delete">Delete</button>
            </div>
        </div>
    </div>
        
        </div>
    <div class="text-center col-sm-12">
    <ul class="pagination">';
        
        }

        $pagenation_sql = "SELECT * FROM tbl_menu ORDER BY menu_id ASC";
        $run_pagination = mysql_query($pagenation_sql);

        $count = mysql_num_rows($run_pagination);

        $total_pages = ceil($count/$per_page);

        for($i=1;$i<=$total_pages;$i++){
            echo '<li><a href="delete.php?page='.$i.'"> '.$i.' </a></li>';
        }
    
    echo '</ul></div>';

echo '</form>';
}

?>