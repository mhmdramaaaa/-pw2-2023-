<?php
require_once '../../../config/Database.php';
require_once '../../../app/weather_types.php';

$database = new Database();
$db = $database->dbConnection();

$weather_types = new weather_types($db);

if(isset($_POST['tambah'])){
    $weather_types->name = $_POST['name'];
    
    $weather_types->store(); 
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
<div class="container mt-2">
        <h2 class="text-center">Form Weather Type</h2>
        <form action="" method="POST">
            <div class="form-group row mt-3 ">
                <label for="name" class="col-4 col-form-label">name</label>
                <div class="col-8">
                    <input required id="name" name="name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="tambah" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>