<?php
    class weather_forecasts {
        private $conn;
        private $table_name = "weather_forecasts";

        public $id;
        public $location_id;
        public $weather_type_id;
        public $high_temperature;
        public $low_temperature;
        public $forecast_date;
        
       

        public function __construct($db){
            $this->conn = $db;
        }

        // Tampilkan data semua produk
        public function index(){
            $query = "SELECT * FROM {$this->table_name}";
            $data = $this->conn->prepare($query);
            $data->execute();
            return $data;
        }

        // Tampilkan halaman create
        public function create(){
            header("Location: create_weather_forecasts.php");
            exit();
        }

        // Tambah produk ke database
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (location_id, weather_type_id,  high_temperature, low_temperature, forecast_date) 
                    VALUES (?, ?, ?, ?, ?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->location_id,
                $this->weather_type_id,
                $this->high_temperature,
                $this->low_temperature,
                $this->forecast_date,
            ]);
        
            return $data->rowCount() > 0;
        }

        // Tampilkan halaman edit
        public function edit(){
            $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
            return $data;
        }

        // Update produk ke database
        public function update(){
            $query = "UPDATE {$this->table_name} 
                    SET location_id=?, weather_type_id=?, high_temperature=?, low_temperature=?, forecast_date=? 
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([ 
                $this->id,
                $this->location_id,
                $this->weather_type_id,
                $this->high_temperature,
                $this->low_temperature,
                $this->forecast_date,
              
            ]);
        
            return $data->rowCount() > 0;
        }

        // Hapus produk dari database
        public function delete(){
            $query = "DELETE FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
        
            return $data->rowCount() > 0;
        }
    }
?>