
 <link rel="stylesheet" href="css/status.css">
 
 <?php


    try{
        $con = mysqli_connect("localhost", "root", "");
        echo "<h6> Status:Connected to the server </h6>";

        try{
            $db = mysqli_select_db($con,"newbies_db");
            echo "<h6> <br> Status:Connected to the Database </h6>";
            }catch(Exception $e){
                echo "<h5><br> Error 404: Database not found</h5>";
    
            }
        
    }catch(Exception $e){
        echo "<h5><br> Connection failed: Server not found</h5>";

    }

    

    ?>