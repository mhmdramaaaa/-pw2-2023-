<?php
require_once '../../../config/Database.php';
require_once '../../../app/weather_types.php';

$database = new Database();
$db = $database->dbConnection();

$weather_types = new weather_types($db);

if(isset($_POST['update'])) {
    $weather_types->id = $_POST['id'];
    $weather_types->name = $_POST['name'];

    $weather_types->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $weather_types->id = $_GET['id'];
    $stmt = $weather_types->edit();
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
        <label for="name">  Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>