<?php
$name=$_POST['stuName'];    //Variable Declaration
$regno=$_POST['regNo'];
$con= new mysqli("localhost","root","","miniproject");  //DataBase connectivity FileReq '$reqFile'
    if($con->connect_error){
        die("Failec to connect: ".$con->connect_error);
    }
    $sql="DELETE FROM STUDENTLOGIN WHERE STUDENTID='$name'";
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Removed Succesfully');</script>";
        // header("location: form.html");
    }
    else{
        echo"error";
    }
?>