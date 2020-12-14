

<?php

$conn = mysqli_connect("192.168.0.3", "dbconnect", "ubtSystem","kolegjiUBT");

if($conn->connect_error){
   die("Error connecting to database");
}



if(isset($_POST['submit'])){

$id = $_POST['id'];
$kodi = $_POST['Kodi'];
$emertimi = $_POST['Emertimi'];
$dega = $_POST['Dega'];



$query = "INSERT INTO fakulteti (id,kodi,emertimi,dega) VALUES ($id,$kodi,$emertimi,$dega)";

}

    if($stmt = mysqli_prepare($conn,$query)){


        if(mysqli_stmt_execute($stmt)){
            //execute success
        }
    }
?>



<html>

<head>

</head>

<body>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method ="post" enctype="multipart/form-data">
        
        <label>ID:</label>
        <input name = "id" type = "number" required>
    
        <label>Kodi:</label>
        <input name = "Kodi" type = "text" required>

        <label>Emertimi:</label>
        <input name = "Emertimi" type = "text" required>

        <label>Dega:</label>
        <input name = "Dega" type = "text" required>

        <input type="submit" name = "submit" class="btn btn-primary" value="Submit">

    </form>


    <?php
                    // Include config file
                   
                    $conn = mysqli_connect("192.168.0.3", "dbconnect", "ubtSystem","kolegjiUBT");

                     if($conn->connect_error){
                        die("Error connecting to database");
                    }

                    // Attempt select query execution
                    $sql = "SELECT * FROM kolegjiUBT ORBER BY id DESC LIMIT 3";
                    if($_SESSION['Logged-In']){
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Id</th>";
                                        echo "<th>Kodi</th>";
                                        echo "<th>Emertimi</th>";
                                        echo "<th>Dega</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['Kodi'] . "</td>";
                                        echo "<td>" . $row['Emertimi'] . "</td>";
                                        echo "<td>" . $row['Dega'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
                }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>

                   $result2 = mysqli_query($conn, $sql);

                   if(mysqli_num_rows($result2) > 0){


                       while($row = mysqli_fetch_array($result2)){

                            echo '<td>' . $row['id'] . '</td>';

                       }
                   }


</body>


</html>

