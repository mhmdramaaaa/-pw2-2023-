<?php
    class weather_types {
        private $conn;
        private $table_name = "weather_types";

        public $id;
        public $name;
        
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
            header("Location: create_weather_types.php");
            exit();
        }

        // Tambah produk ke database
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (name ) 
                    VALUES (?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->name,
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
                    SET name=?  
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([ 
                $this->name,
                $this->id
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