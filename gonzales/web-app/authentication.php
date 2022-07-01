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
    <link rel="stylesheet" href="css/loader.css">
    <title>Validating</title>

    <style>
        body{
            height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
            background-size: cover;
    background-position: center;
    background-image: url(img/bg.gif);
    background-color: black;
    overflow: hidden;
        }
        .btn{
            z-index: 2;
            margin-top: -20vh;
            display: block;
  margin-left: auto;
  margin-right: auto;
            padding: 20px 30px;
            font-size: 20px;
        }
        h4{
            margin: 20vh;
            padding: 0;
            text-align: center;
            color: white;
            font-size: 10rem;
        }
    </style>
</head>
<body>

<link rel="stylesheet" href="css/loader.css">
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
       ?>
       <h4>Welcome back,<br> <?php echo $_SESSION['lastName'];?></h4>
              <form method="POST"  action="home_page.php">
                   <input type="hidden" name="studID" value="<?php echo $_SESSION['studID']; ?>">
                   <input type="hidden" name="lastName" value="<?php echo $_SESSION['lastName']; ?>">
                    
                   <button type="submit" class="btn btn-success">Proceed</button>
               </form>
               <?php
    }
    else{
       
            echo "<script>alert('Invalid ID or Password, please try again!');</script>";
            echo "<script>window.location.href='index.php';</script>";
    }
        
?>
</body>
</html>


