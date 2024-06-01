<?php
require_once '../../../config/Database.php';
require_once '../../../app/weather_re$weather_reports.php';

$database = new Database();
$db = $database->dbConnection();

$weather_reports = new weather_reports($db);

if(isset($_POST['update'])) {
    $weather_reports->id = $_POST['id'];
    $weather_reports->location_id = $_POST['location_id'];
    $weather_reports->weather_type_id = $_POST['weather_type_id'];
    $weather_reports->temperature = $_POST['temperature'];
    $weather_reports->humidity = $_POST['humidity'];
    $weather_reports->wind_speed = $_POST['wind_speed'];
    $weather_reports->observation_time = $_POST['observation_time'];

    $weather_reports->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $weather_reports->id = $_GET['id'];
    $stmt = $weather_reports->edit();
    $num = $stmt->rowCount();

    if($num > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="location_id">Location:</label>
        <input type="text" name="location_id" value="<?php echo $location_id; ?>" required>
        <br>
        <label for="weather_type_id">Weather Type:</label>
        <input type="number" name="weather_type_id" value="<?php echo $weather_type_id; ?>" required>
        <br>
        <label for="temperature"> Temperature:</label>
        <input type="number" name="temperature" value="<?php echo $temperature; ?>" required>
        <br>
        <label for="humidity ">Humidity:</label>
        <input type="number" name="humidity " value="<?php echo $humidity ; ?>" required>
        <br>
        <label for="wind_speed ">Wind Dpeed:</label>
        <input type="number" name="wind_speed " value="<?php echo $weather_reports; ?>" required>
        <br>
        <label for="observation_time  ">Observation Time:</label>
        <input type="number" name="observation_time  " value="<?php echo $observation_time ; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>