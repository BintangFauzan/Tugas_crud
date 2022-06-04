<?php
    // $a =$_GET['a'];
    // $b =$_GET['b'];
    // $c= $a * $b;

    // $reply = [
    // 	'a' => $a,
    // 	'b' => $b,
    // 	'hasil' => $c
    // ];

    // header('Content-Type: application/json');
    // echo json_encode($reply);

// phpinfo();

    $dbHost="localhost";  
    $dbName="kuliah_web";  
    $dbUser="root";      //by default root is user name.  
    $dbPassword="";     //password is blank by default  
    $dsn = "mysql:host={$dbHost};dbname={$dbName}";
    
    $dbConn = null;

    try{  
        $dbConn= new PDO($dsn, $dbUser, $dbPassword);
         
    } catch(Exception $e){  
    Echo "Koneksi Gagal" . $e->getMessage();  
    }  


// $dbserver = "localhost";
// $dbname = "kuliah_web";
// $dbuser = "root";
// $dbpassword = "";
// $dsn = "mysql:host={$dbserver};dbname={$dbname}";

// $connection = null;
// try {
//   $connection = new PDO($dsn, $dbuser, $dbpassword);

// } catch(Exception $exception){
//   die("Terjadi error: {$exception->getMessage()}");
// }

?> 