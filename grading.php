<?php
    session_start();

    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_db";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['action']))
    {
        function Calculate($t1,$t2,$t3)
        {
            $t1 = $t1 / 100 * 20;
            $t2 = $t2 / 100 * 30;
            $t3 = $t3 / 100 * 50;

            return $t1 + $t2 + $t3;
        }

        $t1 = $_POST['T1'];
        $t2 = $_POST['T2'];
        $t3 = $_POST['T3'];
        $t4 = $_POST['T4'];
        $t0 = $_POST['T0'];
        $results = Calculate($t1, $t2, $t3);

        // Insert the data into the database
        $sql = "INSERT INTO grading (name, id, test1, test2, final)
                VALUES ('$t0', '$t4', '$t1', '$t2', '$t3')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        echo "</td></tr>";
        echo "</table>";
    }

    // Close database connection
    mysqli_close($conn);
?>
