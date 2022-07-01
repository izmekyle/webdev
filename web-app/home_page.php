<?php
    session_start();
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Meta XAMPP</title>
</head>

<body>

    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span>/span>
    </div>

    <script>
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>

    <div class="side_bar">
        <?php
        
        include('SQLConnect.php');
        $name = mysqli_query($con, "SELECT firstName,lastName, user_level,studID FROM tbl_students WHERE studID = '$_SESSION[studID]' and lastName = '$_SESSION[lastName]'");
        foreach ($name as $row1) {
        ?>

            <img src="img/profile1.jpeg" alt="profile-pic">
            <h1 class="userType"> <br><?php echo $row1['user_level']; ?></h1>
            <h1 class="name"><?php echo $row1['firstName'] . " " . $row1['lastName']; ?> </h1>
            <h1 class="ID"><?php echo $row1['studID']; ?></span> </h1>

        <?php
        }
        ?>
        <button id="btn" type="button" onclick="logOut()" class="btn btn-primary">Logout</button>
    </div>

    <div class="home_page">
        <div class="table_container">
        <h1>Table</h1>
            
<?PHP
            $query = mysqli_query($con, "SELECT * FROM tbl_students Where status = 'Active'") or die(mysqli_error($con));
            ?>
            <table id="table" class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>MI</th>
                        <th>Course</th>
                        <th>Year Level</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($query as $row)
                        echo "
                    <tr>                    
                        <td>" . $row['studID'] . "</td>
                        <td>" . $row['lastName'] . "</td>
                        <td>" . $row['firstName'] . "</td>
                        <td>" . $row['MI'] . "</td>
                        <td>" . $row['course'] . "</td>
                        <td>" . $row['yearlevel'] . "</td>
                    </tr>"
                    ?>
                </tbody>
            </table>
        </div>






        <div class="table_container2">
            <h1>Editable Table</h1>
            <?php

            $query = mysqli_query($con, "SELECT * FROM tbl_students") or die(mysqli_error($con));
            ?>
            <table id="table" class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>MI</th>
                        <th>Course</th>
                        <th>Year Level</th>
                        <th>User Level</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($query as $row) {
                        echo "
                    <tr>                    
                        <td>" . $row['studID'] . "</td>
                        <td>" . $row['lastName'] . "</td>
                        <td>" . $row['firstName'] . "</td>
                        <td>" . $row['MI'] . "</td>
                        <td>" . $row['course'] . "</td>
                        <td>" . $row['yearlevel'] . "</td>
                        <td>" . $row['user_level'] . "</td>
                        <td>" . $row['status'] . "</td>"
                    ?>
                        <td><a href=<?php echo "delete.php/?id=$row[studID]" ?>><button "type='button' class='btn btn-danger'>Delete</button></td>
                    </tr>" ; <?php
                            }

                                ?> </tbody>
            </table>
        </div>



    </div>


    <script>
        function logOut() {
            let text = "Are you sure you want to logout?";
            
            if (confirm(text) == true) {
                <?php
                    session_destroy();
                ?>
                
                window.location.href = 'index.php';
                
                        
            } else {
                text = "You canceled!";
            }
            document.getElementById("demo").innerHTML = text;
        }
    </script>
</body>

</html>