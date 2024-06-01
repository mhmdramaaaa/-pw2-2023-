<?php
require_once '../../../config/Database.php';
require_once '../../../app/weather_forecasts.php';

$database = new Database();
$db = $database->dbConnection();

$weather_forecasts = new weather_forecasts($db);

if(isset($_POST['tambah'])){
    $weather_forecasts->location_id = $_POST['location_id'];
    $weather_forecasts->weather_type_id = $_POST['weather_type_id'];
    $weather_forecasts->high_temperature = $_POST['high_temperature'];
    $weather_forecasts->low_temperature = $_POST['low_temperature'];
    $weather_forecasts->forecast_date = $_POST['forecast_date'];

    $weather_forecasts->store(); 
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
        <h2 class="text-center">Form laporan cuaca</h2>
        <form action="" method="POST">
            <div class="form-group row mt-3 ">
                <label for="location_id" class="col-4 col-form-label">Locations</label>
                <div class="col-8">
                    <input required id="location_id" name="location_id" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row mt-3 ">
                <label for="weather_type_id" class="col-4 col-form-label">Weather Type</label>
                <div class="col-8">
                    <input required id="weather_type_id" name="weather_type_id" type="number" class="form-control">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="high_temperature" class="col-4 col-form-label">High Temperature</label>
                <div class="col-8">
                    <input required id="high_temperature" name="high_temperature" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="low_temperature" class="col-4 col-form-label">Low Temperature</label>
                <div class="col-8">
                    <input required id="low_temperature" name="low_temperature" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="forecast_date" class="col-4 col-form-label">Forecast Date</label>
                <div class="col-8">
                    <input required id="forecast_date" name="forecast_date" type="date" class="form-control">
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