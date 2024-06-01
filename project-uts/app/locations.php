<?php
    class locations {
        private $conn;
        private $table_name = "locations"; 

        public $id;
        public $name;
        public $latitude;
        public $longitude;
        
       

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
            header("Location: create.php");
            exit();
        }

        // Tambah produk ke database
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (name, latitude, longitude) 
                    VALUES (?, ?, ?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->name,
                $this->latitude,
                $this->longitude,
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
                    SET name=?, latitude=?, longitude=? 
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([ 
                $this->name,
                $this->latitude,
                $this->longitude,
                $this->id,
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