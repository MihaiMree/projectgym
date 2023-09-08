<?php
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1); // Display errors on the web page (remove this in production)
$servername = "localhost"; // Replace with your server name
$username = "mihai"; // Replace with your MySQL username
$password = "yxt23V9_4"; // Replace with your MySQL password
$dbname = "stu_mihai"; // Replace with your MySQL database name

$message = ''; // Initialize a variable to hold the message

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $naam = $_POST['naam'];
        $gewicht_set1 = $_POST['gewicht_set1'];
        $reps_set1 = $_POST['reps_set1'];
        $gewicht_set2 = $_POST['gewicht_set2'];
        $reps_set2 = $_POST['reps_set2'];
        $gewicht_set3 = $_POST['gewicht_set3'];
        $reps_set3 = $_POST['reps_set3'];

        $stmt = $conn->prepare('INSERT INTO leg_curls(naam, gewicht_set1, reps_set1, gewicht_set2, reps_set2, gewicht_set3, reps_set3) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$naam, $gewicht_set1, $reps_set1, $gewicht_set2, $reps_set2,$gewicht_set3, $reps_set3]);
        $message = 'Saved successfully';
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Redirect only after a successful form submission
if (!empty($message)) {
    header("Location: /projectGYM/legs.php");
    exit();
}
?>
