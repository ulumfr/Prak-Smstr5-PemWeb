<?php 
    namespace app\Models;

    include 'app/config/DatabaseConfig.php';

    use app\Config\DatabaseConfig;
    use mysqli;

    class Product extends DatabaseConfig 
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
            $sql = 'SELECT * FROM products';

            $result = $this->koneksi->query($sql);
            $this->koneksi->close();

            $data = [];

            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }

        public function findById($id)
        {
            $sql = 'SELECT * FROM products WHERE id = ?';

            $stmt = $this->koneksi->prepare($sql);

            $stmt->bind_param('i', $id);
            $stmt->execute();

            $result = $stmt->get_result();
            $this->koneksi->close();

            $data = [];

            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }

        public function create($data)
        {
            $productName = $data['product_name'];
            $query = 'INSERT INTO products (product_name) VALUES (?)';

            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('s', $productName);
            $stmt->execute();
            $this->koneksi->close();
        }

        public function update($data, $id)
        {
            $productName = $data['product_name'];

            $query = 'UPDATE products SET product_name = ? WHERE id = ?';
            
            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('si', $productName, $id);
            $stmt->execute();
            $this->koneksi->close();
        }

        public function delete($id)
        {
            $query = 'DELETE FROM products WHERE id = ?';

            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $this->koneksi->close();
        }
    }
?>