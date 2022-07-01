



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $_POST;
    include("SQLConnect.php");
    
    try{
        $query = mysqli_query($con,"INSERT INTO tbl_students(studID, lastName, firstName, MI, course, yearlevel)
    VALUES('$_POST[studID]','$_POST[lastName]','$_POST[firstName]','$_POST[MI]','$_POST[course]','$_POST[yearLevel]')");
        if($query){
                ?> 
                <br>
                <h4>Congrats <span> <?php echo $_POST['lastName'];?></span>, you have successfully registered your self </h4>
                <br><br><br>
                <form action="index.php">
                    <button type="submit" class="btn btn-success">Back</button>
                </form>
                    
                <?php
                
            }
    }catch(Exception $e){
        
        ?> 
            <h4>Please Try again <span><?php echo $_POST['lastName'];?></span> , Something went wrong!</h4>
            <br><br><br>
            <form action="index.php">
                <button type="submit" class="btn btn-danger">Back</button>
            </form>
            
            <?php
        }
        
        ?>
     

</body>
</html>



