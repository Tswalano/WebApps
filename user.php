<?php 
    include 'admin/db/connection.php';
//User variable
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $shop = $_POST['shop'];

//-------------------------------------REGISTER--------------------------------------------

if($shop = 'Shop 1'){
    $shopAddr = 'Shop 1</br>Street 0001</br>Johannesburg';
}
else if($shop = 'Shop 2'){
    $shopAddr = 'Shop 2</br>Street 0002</br>Johannesburg';
}
else if($shop = 'Shop 3'){
    $shopAddr = 'Shop 3</br>Street 0003</br>Johannesburg';
}
else if($shop = 'Shop 4'){
    $shopAddr = 'Shop 4</br>Street 0004</br>Johannesburg';
}
else if($shop = 'Shop 5'){
    $shopAddr = 'Shop 5</br>Street 0005</br>Johannesburg';
}

if(isset($_POST['submit'])){ 
    $sql = "INSERT INTO tbl_user VALUES(null, '$name', '$surname', '$email', '$number', '$password', '$shopAddr')";
    $query = mysql_query($sql) or die("ERROR 101 - HOME PAGE");

        if($query == 1){
            
            $sql1 = "SELECT * FROM tbl_user ORDER BY user_id DESC LIMIT 1";
            $query1 = mysql_query($sql1) or die("ERROR 102 - HOME PAGE");
            $row = mysql_fetch_assoc($query1);
            $r = $row['user_id'];
            
            session_start();
            $_SESSION['user'];
            $_SESSION['email'];
            $_SESSION['userid'] = $row['user_id'];
            
            $msg = '<div class="alert alert-success">
                    <h3>Welcome to OPS System</h3>
                    </div>';
            header("location:home.php?userid=$r");
        } else
        {
            $msg = '<div class="alert alert-danger">
                    <h3>Unfortunately Something went wrong</h3>
                    </div>';
        }
    }

//-------------------------------------LOGIN--------------------------------------------
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if(isset($_POST['login'])){
        
    $sqlL = "SELECT * FROM tbl_user WHERE email = '$user' AND password = '$pass'";
    $queryL = mysql_query($sqlL) or die("HELL");
        
        if($rowsL = mysql_fetch_assoc($queryL)){
            
            $n = $rowsL['name'];
            $e = $rowsL['email'];
            $id = $rowsL['user_id'];
            
            session_start();
            $_SESSION['user'] = $n;
            $_SESSION['email'] = $e;
            $_SESSION['userid'] = $id;
            
            header('location:home.php?userid='.$_SESSION['userid']);
            $msgL = '<div class="container alert alert-success">
                    <div class="col-md-1">
                    <img id="img" src="admin/img/user.png" alt="user" width="90px" height="90px">
                    </div>
                    <div class="col-md-11">
                    <h3>Welcome Back '.$n.'!</h3>
                    <strong>['.$e.']</strong>
                    </div>
                    </div>';
        }else{
            header("location:index.php");
            $msgL = '<div class="alert alert-danger">
            <h3>Incorrect Login Details</h3>
            </div>';
        }
    }


?>