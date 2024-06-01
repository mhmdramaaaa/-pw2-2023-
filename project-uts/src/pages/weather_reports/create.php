<?php
require_once '../../../config/Database.php';
require_once '../../../app/weather_reports.php';

$database = new Database();
$db = $database->dbConnection();

$weather_reports = new weather_reports($db);

if(isset($_POST['tambah'])){
    $weather_reports->location_id = $_POST['location_id'];
    $weather_reports->weather_type_id = $_POST['weather_type_id'];
    $weather_reports->temperature = $_POST['temperature'];
    $weather_reports->humidity = $_POST['humidity'];
    $weather_reports->wind_speed = $_POST['wind_speed'];
    $weather_reports->observation_time = $_POST['observation_time'];

    $weather_reports->store(); 
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
        <form action="proses_laporan_cuaca.php" method="POST">
            <div class="form-group row mt-3 ">
                <label for="location_id" class="col-4 col-form-label">location</label>
                <div class="col-8">
                    <input required id="location_id" name="location_id" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="weather_type_id " class="col-4 col-form-label">Weather Type</label>
                <div class="col-8">
                    <input required id="weather_type_id " name="weather_type_id " type="num" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="temperature" class="col-4 col-form-label"> Temperature</label>
                <div class="col-8">
                    <input required id="temperature" name="temperature" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="humidity" class="col-4 col-form-label">Humidity</label>
                <div class="col-8">
                    <input required id="humidity" name="humidity" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="wind_speed" class="col-4 col-form-label">wind_speed</label>
                <div class="col-8">
                    <input required id="wind_speed" name="wind_speed" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="observation_time" class="col-4 col-form-label">Observation Time</label>
                <div class="col-8">
                    <input required id="observation_time" name="observation_time" type="datetime-local" class="form-control">
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