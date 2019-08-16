<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "samson";
$pass = 'Pa$$w0rd@01';
$dbname = "ospicare";

$conn = mysqli_connect($servername, $username, $pass, $dbname);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$file_path = "IMG_20190131_165123.jpg";

$names = $_REQUEST["names"];
$phonenumber = $_REQUEST["phonenumber"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];


$query = "select * from user_table where phone_number = '$phonenumber'";
$result = mysqli_query($conn, $query);


$output = array();

if(mysqli_num_rows($result) > 0){
    var_dump("count");
    $output['error'] = TRUE;
    $output['message'] = "Phone Number Already Exist";
}else{
   
    
    $queryInsert = "insert into user_table (full_names, phone_number, email, password, image_path) values('$names', '$phonenumber', '$email', '$password', '$file_path')";
    //var_dump($queryInsert);
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //$resultInsert = mysqli_query($conn, $queryInsert);
    
    
    
   if (mysqli_query($conn, $queryInsert)){
        
        $query = "select id from user_table where phone_number = '$phonenumber'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $userID = $row['id'];
        
        $output['error'] = FALSE;
        $output['message'] = "successful";
        $output['userid'] = $userID;
        
    }else{
        $output['error'] = TRUE;
        $output['message'] = "Server Error...Please Try Again!!!sss";
    }
    
}


echo json_encode($output,JSON_UNESCAPED_SLASHES);



mysqli_close($conn);

?>
