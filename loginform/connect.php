<?php

    $studID = $_POST['studID'];
    $Lname = $_POST ['Lname'];
    $Fname = $_POST['Fname'];
    $MInitial = $_POST['MInitial'];
    $Course = $_POST['Course'];
    $YearLevel = $_POST['YearLevel'];


    //Connection to DB

    $conn = new mysqli('localhost', 'root', '', 'newbies_db');
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    }
    else{
       $stmt = $conn->prepare("insert into tbl_students (studID, lastName, firstName, MI, course, yearlevel) 
       values(?, ?, ?, ?, ?, ?)");
       $stmt->bind_param("issssi",$studID, $Lname, $Fname, $MInitial, $Course, $YearLevel);
       $stmt->execute();
       echo "<script>alert('Registration Finished! Well done!.');window.location.href='index.php';</script>";
       $stmt->close();
       $conn->close();
    }
    
?>

