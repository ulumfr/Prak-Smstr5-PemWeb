<?php 
    namespace app\Models;
    
    use app\Config\DatabaseConfig;
    use mysqli;

    class Rooms extends DatabaseConfig 
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
            $sql = 'SELECT rooms.*, hotels.* FROM rooms JOIN hotels ON rooms.hotels_id = hotels.hotels_id';
            $result = $this->koneksi->query($sql);
    
            $data = [];
    
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    
        public function findById($id)
        {
            // $sql = 'SELECT * FROM rooms WHERE id = ?';
            $sql = 'SELECT rooms.*, hotels.* FROM rooms JOIN hotels ON rooms.hotels_id = hotels.hotels_id WHERE room_id = ?';
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
            $hotelId = $data['hotels_id'];
            $roomType = $data['room_type'];
            $roomPrice = $data['room_price'];
            
            $query = 'INSERT INTO rooms (hotels_id, room_type, room_price) VALUES (?, ?, ?)';
    
            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('isi', $hotelId, $roomType, $roomPrice);
            $stmt->execute();
        }
    
        public function update($data, $id)
        {
            $hotelId = $data['hotels_id'];
            $roomType = $data['room_type'];
            $roomPrice = $data['room_price'];

            $query = 'UPDATE rooms SET hotels_id = ?, room_type = ?, room_price = ? WHERE room_id = ?';
    
            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('isii', $hotelId, $roomType, $roomPrice, $id);
            $stmt->execute();
        }
    
        public function delete($id)
        {
            $query = 'DELETE FROM rooms WHERE room_id = ?';
            
            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
        }
    }
?>