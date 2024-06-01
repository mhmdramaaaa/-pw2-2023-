<?php
require_once '../../../config/Database.php';
require_once '../../../app/locations.php';

$database = new Database();
$db = $database->dbConnection();

$locations = new locations($db);

if(isset($_POST['update'])) {
    $locations->id = $_POST['id'];
    $locations->name = $_POST['name'];
    $locations->latitude = $_POST['latitude'];
    $locations->longitude = $_POST['longitude'];


    $locations->update();
    header("Location: index.php");
    exit;
} elseif(isset($_GET['id'])) {
    $locations->id = $_GET['id'];
    $stmt = $locations->edit();
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
        <label for="name">Nama:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required>
        <br>
        <label for="latitude">Latitude:</label>
        <input type="number" name="latitude" value="<?php echo $latitude; ?>" required>
        <br>
        <label for="longitude">Kota:</label>
        <input type="number" name="longitude" value="<?php echo $longitude; ?>" required>
        <br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>