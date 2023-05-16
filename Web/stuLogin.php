<?php
$stuId=$_POST['stuID'];
$stuPass=$_POST['stuPass'];
// Database Connection
$con= new mysqli("localhost","root","","miniproject");
if($con->connect_error){
    die("Failec to connect: ".$con->connect_error);
} else{
    // Validating UserID
    $stmt= $con->prepare("select * from studentlogin where StudentID = ?");
    $stmt->bind_param("i",$stuId);
    $stmt->execute();
    $stmt_result= $stmt->get_result();
    if($stmt_result -> num_rows> 0){
        $data=$stmt_result->fetch_assoc();
        if($data['StudentPass'] === $stuPass){     // Validating Password
            // echo "Login Succesfully ";
            header("location: form.html");
        }else{
            echo "<script>alert('Invalid Password');</script>";
        }
    }else{
        echo "<script>alert('Invalid UserID');</script>";
    }
}
?>