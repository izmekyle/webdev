<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Dashboard</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/home.css" rel="stylesheet">

<style>
    body {
    background-image: url("img/lines.gif");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
 
   }
</style>
    
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/sidebars.css" rel="stylesheet">
  </head>
  <body> 


    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
</svg>

        <div class="stats">
        <?php
        include('SQLConnect.php')
        ?><div class="home">
        <main class="d-flex flex-nowrap">
        <h1 class="visually-hidden">Home</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 320px; height:979px">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="60"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4"></span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <a href="#" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                Dashboard
                </a>
            </li>
            </ul>
            <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/icon.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>User</strong>
            </a>
            
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="index.php">Sign out</a></li>
            </ul>
            </div>

        <!--<a href="index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </div>-->

            
        </div>
        <div class="home_page">
                <div class="tname1">
                <h1>Table</h1>
                </div>


        
                <div class="table1">
                    <?PHP
                            $query = mysqli_query($con, "SELECT * FROM tbl_students Where status = 'Active'") or die(mysqli_error($con));
                    ?>
                <table id="table" class="table table-dark table-hover">
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

                <div class="tname2">
                    <h1>Editable Table</h1>
                </div>

                <div class="table2">
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
                            </tr><?php
                                    }

                                        ?> </tbody>
                    </table>
                </div>
            </div>
</div>
        



</main>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="bootstrap/js/sidebars.js"></script>
  </body>
</html>
