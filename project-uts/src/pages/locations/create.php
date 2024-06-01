<?php
require_once '../../../config/Database.php';
require_once '../../../app/locations.php';

$database = new Database();
$db = $database->dbConnection();

$locations = new locations($db);

if(isset($_POST['tambah'])){
    $locations->name = $_POST['name'];
    $locations->latitude = $_POST['latitude'];
    $locations->longitude = $_POST['longitude'];

    $locations->store(); 
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
        <h2 class="text-center">Form Location</h2>
        <form action="" method="POST">
            <div class="form-group row mt-3 ">
                <label for="name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input required id="name" name="name" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="latitude" class="col-4 col-form-label">Latitude</label>
                <div class="col-8">
                    <input required id="latitude" name="latitude" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="longitude" class="col-4 col-form-label">Longitude</label>
                <div class="col-8">
                    <input required id="longitude" name="longitude" type="number" class="form-control">
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