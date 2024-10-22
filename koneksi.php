<?php
 $conn = mysqli_connect("localhost","root","","toko_ucok");

//  Check connnection 
if(mysqli_connect_errno()){
    echo "Failed to connect to mysql:" . mysqli_connect_error();
    exit();
}
?>