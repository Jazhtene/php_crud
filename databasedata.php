<?php
include 'dbcon.php';
?>

<?php 
        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            echo "<pre>";
            print_r($row);
            echo "</pre>";  
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_close($conn);


      
        
        
        ?>