<?php
    class Status {

        private $conn;

        public $Id;
        public $Ma_don_hang;
        public $Tinh_trang;
        public $Ma_nhan_vien;
        public $Thoi_gian_nhan;
        public $Thoi_gian_tra;

        public function __construct($db) {
            $this->conn = $db;
        }

        //read data
        public function read() {
            $query = "SELECT * FROM order_status ORDER BY Id DESC";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return $stmt;
        }

        //show data
        public function show() {
            $query = "SELECT * FROM order_status WHERE Id=? LIMIT 1";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->Id);
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->Ma_don_hang = $row['Ma_don_hang'];
            $this->Tinh_trang = $row['Tinh_trang'];
            $this->Ma_nhan_vien = $row['Ma_nhan_vien'];
            $this->Thoi_gian_nhan = $row['Thoi_gian_nhan'];
            $this->Thoi_gian_tra = $row['Thoi_gian_tra'];

        }

        public function list_oder_where() {
            $query = "SELECT * FROM order_status WHERE Ma_nhan_vien=:Ma_nhan_vien";
            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ma_nhan_vien = htmlspecialchars(strip_tags($this->Ma_nhan_vien));

            //bind data
            $stmt->bindParam(':Ma_nhan_vien',$this->Ma_nhan_vien);
            $stmt->execute();
            return $stmt;
        }

        
        public function status_oder() {
            $query = "SELECT * FROM order_status WHERE Ma_don_hang=:Ma_don_hang";
            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ma_don_hang = htmlspecialchars(strip_tags($this->Ma_don_hang));

            //bind data
            $stmt->bindParam(':Ma_don_hang',$this->Ma_don_hang);
            $stmt->execute();
            return $stmt;
        }

        public function create() {
            $query = "INSERT INTO order_status SET Ma_don_hang=:Ma_don_hang ,Tinh_trang=:Tinh_trang ,Ma_nhan_vien=:Ma_nhan_vien ,Thoi_gian_nhan=:Thoi_gian_nhan ,Thoi_gian_tra=:Thoi_gian_tra";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ma_don_hang = htmlspecialchars(strip_tags($this->Ma_don_hang));
            $this->Tinh_trang = htmlspecialchars(strip_tags($this->Tinh_trang));
            $this->Ma_nhan_vien = htmlspecialchars(strip_tags($this->Ma_nhan_vien));
            $this->Thoi_gian_nhan = htmlspecialchars(strip_tags($this->Thoi_gian_nhan));
            $this->Thoi_gian_tra = htmlspecialchars(strip_tags($this->Thoi_gian_tra));
            //bind data
            $stmt->bindParam(':Ma_don_hang',$this->Ma_don_hang);
            $stmt->bindParam(':Tinh_trang',$this->Tinh_trang);
            $stmt->bindParam(':Ma_nhan_vien',$this->Ma_nhan_vien);
            $stmt->bindParam(':Thoi_gian_nhan',$this->Thoi_gian_nhan);
            $stmt->bindParam(':Thoi_gian_tra',$this->Thoi_gian_tra);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function update() {
            $query = "UPDATE order_status SET Ma_don_hang=:Ma_don_hang ,Tinh_trang=:Tinh_trang ,Ma_nhan_vien=:Ma_nhan_vien ,Thoi_gian_nhan=:Thoi_gian_nhan ,Thoi_gian_tra=:Thoi_gian_tra WHERE Id=:Id";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Id = htmlspecialchars(strip_tags($this->Id));
            $this->Ma_don_hang = htmlspecialchars(strip_tags($this->Ma_don_hang));
            $this->Tinh_trang = htmlspecialchars(strip_tags($this->Tinh_trang));
            $this->Ma_nhan_vien = htmlspecialchars(strip_tags($this->Ma_nhan_vien));
            $this->Thoi_gian_nhan = htmlspecialchars(strip_tags($this->Thoi_gian_nhan));
            $this->Thoi_gian_tra = htmlspecialchars(strip_tags($this->Thoi_gian_tra));
            //bind data
            $stmt->bindParam(':Id',$this->Id);
            $stmt->bindParam(':Ma_don_hang',$this->Ma_don_hang);
            $stmt->bindParam(':Tinh_trang',$this->Tinh_trang);
            $stmt->bindParam(':Ma_nhan_vien',$this->Ma_nhan_vien);
            $stmt->bindParam(':Thoi_gian_nhan',$this->Thoi_gian_nhan);
            $stmt->bindParam(':Thoi_gian_tra',$this->Thoi_gian_tra);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function delete() {
            $query = "DELETE FROM order_status WHERE Id=:Id";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Id = htmlspecialchars(strip_tags($this->Id));
            //bind data
            $stmt->bindParam(':Id',$this->Id);

            
            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

    }
?>