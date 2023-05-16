<?php
    $name=$_POST['stuName'];    //Variable Declaration
    $regno=$_POST['regNo'];
    $dept=$_POST['dep'];
    $year=$_POST['year'];
    $sem=$_POST['sem'];
    $availed=$_POST['daysAvailed'];
    $ODstDate=$_POST['stDate'];
    $ODendDate=$_POST['endDate'];
    $ODreqDays=$_POST['ODreq'];
    
    $FileReq = $_FILES['filereq']['name'];
    $tempName = $_FILES['filereq']['tmp_name'];
    // mkdir("userprofile\\$phn");
    move_uploaded_file($tempName,"Doc_Req/$FileReq");

    // $reqFile=$_POST['filereq'];
    $reason=$_POST['reason'];

    $con= new mysqli("localhost","root","","miniproject");  //DataBase connectivity FileReq '$reqFile'
    if($con->connect_error){
        die("Failec to connect: ".$con->connect_error);
    }
    // else{
    //     echo"DONE";
    // }

        //Value insertion
    $sql="INSERT INTO stuformdetail (Name,Regno,Dept,Year,Sem,Availed,ODstDate,ODendDate,ODreqDays,FileReq,Reason) VALUES('$name','$regno','$dept','$year','$sem','$availed','$ODstDate','$ODendDate','$ODreqDays','$FileReq' ,'$reason');";
    if(mysqli_query($con,$sql)){
        echo "<script>alert('Inserted Succesfully');</script>";
        // header("location: form.html");
    }
    else{
        echo"error";
    }
?>