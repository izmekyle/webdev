<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validating</title>
</head>
<body>
<link rel="stylesheet" href="style.css">
<script>
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
<?php
    $_POST;

    $_SESSION['studID'] = $_POST['studID'];
    $_SESSION['lastName'] = $_POST['lastName'];


    $myfile = fopen("cache/data.txt", "w") or die("Unable to open file!");
    $txt =  $_POST['studID']."\n";
    fwrite($myfile, $txt);
    $txt = $_POST['lastName'];
    fwrite($myfile, $txt);
    fclose($myfile);

    include("SQLConnect.php");
    $authenticate = mysqli_query($con,"SELECT studId, lastName FROM tbl_students WHERE studID = '".$_SESSION['studID']."' And lastName = '".$_SESSION['lastName']."'");
    if(mysqli_num_rows($authenticate) > 0){
      
        echo "<script>alert('Welcome! Dashboard Ahead!');window.location.href='home_page.php';</script>";

    }
    else{
       
            echo "<script>alert('Invalid ID or Password, please try again!');</script>";
            echo "<script>window.location.href='index.php';</script>";
    }
        
?>
</body>
</html>


