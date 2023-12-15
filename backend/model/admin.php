<?php
    class Admin {

        private $conn;

        public $Id;
        public $Ho_ten;
        public $Ten_tai_khoan;
        public $So_dien_thoai;
        public $Email;
        public $Mat_khau;

        public function __construct($db) {
            $this->conn = $db;
        }

        //read data
        public function read_info() {
            $query = "SELECT * FROM admin_account ORDER BY Id DESC";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return $stmt;
        }

        //show data
        public function show_one() {
            $query = "SELECT * FROM admin_account WHERE Id=? LIMIT 1";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->Id);
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->Ho_ten = $row['Ho_ten'];
            $this->Ten_tai_khoan = $row['Ten_tai_khoan'];
            $this->So_dien_thoai = $row['So_dien_thoai'];
            $this->Email = $row['Email'];
            $this->Mat_khau = $row['Mat_khau'];

        }

        public function new_account_admin() {
            $query = "INSERT INTO admin_account SET Ho_ten=:Ho_ten ,Ten_tai_khoan=:Ten_tai_khoan ,So_dien_thoai=:So_dien_thoai ,Email=:Email ,
            Mat_khau=:Mat_khau";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ho_ten = htmlspecialchars(strip_tags($this->Ho_ten));
            $this->Ten_tai_khoan = htmlspecialchars(strip_tags($this->Ten_tai_khoan));
            $this->So_dien_thoai = htmlspecialchars(strip_tags($this->So_dien_thoai));
            $this->Email = htmlspecialchars(strip_tags($this->Email));
            $this->Mat_khau = htmlspecialchars(strip_tags($this->Mat_khau));
            //bind data
            $stmt->bindParam(':Ho_ten',$this->Ho_ten);
            $stmt->bindParam(':Ten_tai_khoan',$this->Ten_tai_khoan);
            $stmt->bindParam(':So_dien_thoai',$this->So_dien_thoai);
            $stmt->bindParam(':Email',$this->Email);
            $stmt->bindParam(':Mat_khau',$this->Mat_khau);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function update_account_admin() {
            $query = "UPDATE admin_account SET Ho_ten=:Ho_ten ,Ten_tai_khoan=:Ten_tai_khoan ,So_dien_thoai=:So_dien_thoai ,Email=:Email ,
            Mat_khau=:Mat_khau WHERE Id=:Id";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Id = htmlspecialchars(strip_tags($this->Id));
            $this->Ho_ten = htmlspecialchars(strip_tags($this->Ho_ten));
            $this->Ten_tai_khoan = htmlspecialchars(strip_tags($this->Ten_tai_khoan));
            $this->So_dien_thoai = htmlspecialchars(strip_tags($this->So_dien_thoai));
            $this->Email = htmlspecialchars(strip_tags($this->Email));
            $this->Mat_khau = htmlspecialchars(strip_tags($this->Mat_khau));
            //bind data
            $stmt->bindParam(':Id',$this->Id);
            $stmt->bindParam(':Ho_ten',$this->Ho_ten);
            $stmt->bindParam(':Ten_tai_khoan',$this->Ten_tai_khoan);
            $stmt->bindParam(':So_dien_thoai',$this->So_dien_thoai);
            $stmt->bindParam(':Email',$this->Email);
            $stmt->bindParam(':Mat_khau',$this->Mat_khau);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function delete_account_admin() {
            $query = "DELETE FROM admin_account WHERE Id=:Id";

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