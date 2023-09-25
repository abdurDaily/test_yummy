<?php 
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "post_sys";

 $title = $_REQUEST['title'];
 $details = $_REQUEST['details'];


 $conn = mysqli_connect($hostName,$userName,$password,$dbName);
 $add_table = "INSERT INTO add_post(title, details) VALUES ('$title','$details')";
 $inserted = mysqli_query($conn,$add_table);


if($inserted){
    header("location:../index.php?success= your post content inserted ");
}else{
    echo "not ok";
}

