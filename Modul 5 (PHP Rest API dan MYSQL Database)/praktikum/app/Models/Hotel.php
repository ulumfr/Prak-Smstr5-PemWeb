<?php 
    namespace app\Models;

    include 'app/config/DatabaseConfig.php';

    use app\Config\DatabaseConfig;
    use mysqli;

    class Hotels extends DatabaseConfig 
    {
        public $koneksi;

        public function __construct()
        {
            $this->koneksi = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
            
            if ($this->koneksi->connect_error){
                die('Connection Failed: ' . $this->koneksi->connect_error);
            }
        }

        public function findAll()
        {
            $sql = 'SELECT * FROM hotels';
            $result = $this->koneksi->query($sql);
    
            $data = [];
    
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    
        public function findById($id)
        {
            $sql = 'SELECT * FROM hotels WHERE hotels_id = ?';
            $stmt = $this->koneksi->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
    
            $data = [];
    
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    
        public function create($data)
        {
            $nameHotel = $data['name_hotel'];
            $addressHotel = $data['address_hotel'];
            $ratingHotel = $data['rating_hotel'];

            $query = 'INSERT INTO hotels (name_hotel, address_hotel, rating_hotel) VALUES (?, ?, ?)';
    
            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('ssd', $nameHotel, $addressHotel, $ratingHotel);
            $stmt->execute();
        }
    
        public function update($data, $id)
        {
            $nameHotel = $data['name_hotel'];
            $addressHotel = $data['address_hotel'];
            $ratingHotel = $data['rating_hotel'];

            $query = 'UPDATE hotels SET name_hotel = ?, address_hotel = ?, rating_hotel = ? WHERE hotels_id = ?';
    
            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('ssdi', $nameHotel, $addressHotel, $ratingHotel, $id);
            $stmt->execute();
        }
    
        public function delete($id)
        {
            $query = 'DELETE FROM hotels WHERE hotels_id = ?';
    
            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
        }
    }
?>