<?php
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1); // Display errors on the web page (remove this in production)

$db_hostname = 'localhost';
$db_user = 'mihai';
$db_password = 'rf2wM5!60';
$db_name = 'stu_mihai';

$mysqli = mysqli_connect($db_hostname, $db_user, $db_password, $db_name);

if (!$mysqli) {
    echo 'Geen verbinding met de database';
} else {
    //  echo "Verbonden met de database";
}


if(isset($_POST['table_name']) && isset($_POST['username'])){
    $tableName = $_POST['table_name'];
    $username = $_POST['username'];


    $query = "SELECT * FROM $tableName WHERE naam = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        echo "<table class='table ' '>";
        echo "<thead class='thead-dark'> ";
        echo "<th scope='col'>Date</th><th scope='col'> Reps Set 1</th> <th scope='col'>Gewicht Set 1</th><th scope='col'> Reps Set 2</th> <th scope='col'>Gewicht Set 2</th><th scope='col'> Reps Set 3</th> <th scope='col'>Gewicht Set 3</th> ";
        echo "</thead>";

        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$row['date'].'</td>';
            echo '<td>'.$row['gewicht_set1'].'</td>';
            echo '<td>'.$row['reps_set1'].'</td>';
            echo '<td>'.$row['gewicht_set2'].'</td>';
            echo '<td>'.$row['reps_set2'].'</td>';
            echo '<td>'.$row['gewicht_set3'].'</td>';
            echo '<td>'.$row['reps_set3'].'</td>';


            echo '</tr>';
        }
        echo '</table>';
    }else{
        echo '<p>No data found</p>';
    }
}



