<?php
    class Account_user {

        private $conn;

        public $Id;
        public $Ma_khach_hang;
        public $So_dien_thoai;
        public $Email;
        public $Dia_chi;
        public $Ten_tai_khoan;
        public $Mat_khau;

        public function __construct($db) {
            $this->conn = $db;
        }

        //read data
        public function read_info() {
            $query = "SELECT * FROM account_user ORDER BY Id DESC";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return $stmt;
        }

        //show data
        public function show_one() {
            $query = "SELECT * FROM account_user WHERE Id=? LIMIT 1";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->Id);
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->Ma_khach_hang = $row['Ma_khach_hang'];
            $this->So_dien_thoai = $row['So_dien_thoai'];
            $this->Email = $row['Email'];
            $this->Dia_chi = $row['Dia_chi'];
            $this->Ten_tai_khoan = $row['Ten_tai_khoan'];
            $this->Mat_khau = $row['Mat_khau'];

        }

        public function new_account_user() {
            $query = "INSERT INTO account_user SET Ma_khach_hang=:Ma_khach_hang ,So_dien_thoai=:So_dien_thoai ,Email=:Email ,Dia_chi=:Dia_chi ,Ten_tai_khoan=:Ten_tai_khoan ,
            Mat_khau=:Mat_khau";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ma_khach_hang = htmlspecialchars(strip_tags($this->Ma_khach_hang));
            $this->So_dien_thoai = htmlspecialchars(strip_tags($this->So_dien_thoai));
            $this->Email = htmlspecialchars(strip_tags($this->Email));
            $this->Dia_chi = htmlspecialchars(strip_tags($this->Dia_chi));
            $this->Ten_tai_khoan = htmlspecialchars(strip_tags($this->Ten_tai_khoan));
            $this->Mat_khau = htmlspecialchars(strip_tags($this->Mat_khau));
            //bind data
            $stmt->bindParam(':Ma_khach_hang',$this->Ma_khach_hang);
            $stmt->bindParam(':So_dien_thoai',$this->So_dien_thoai);
            $stmt->bindParam(':Email',$this->Email);
            $stmt->bindParam(':Dia_chi',$this->Dia_chi);
            $stmt->bindParam(':Ten_tai_khoan',$this->Ten_tai_khoan);
            $stmt->bindParam(':Mat_khau',$this->Mat_khau);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function update_account_user() {
            $query = "UPDATE account_user SET Ma_khach_hang=:Ma_khach_hang ,So_dien_thoai=:So_dien_thoai ,Email=:Email ,Dia_chi=:Dia_chi ,Ten_tai_khoan=:Ten_tai_khoan ,
            Mat_khau=:Mat_khau WHERE Id=:Id";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Id = htmlspecialchars(strip_tags($this->Id));
            $this->Ma_khach_hang = htmlspecialchars(strip_tags($this->Ma_khach_hang));
            $this->So_dien_thoai = htmlspecialchars(strip_tags($this->So_dien_thoai));
            $this->Email = htmlspecialchars(strip_tags($this->Email));
            $this->Dia_chi = htmlspecialchars(strip_tags($this->Dia_chi));
            $this->Ten_tai_khoan = htmlspecialchars(strip_tags($this->Ten_tai_khoan));
            $this->Mat_khau = htmlspecialchars(strip_tags($this->Mat_khau));
            //bind data
            $stmt->bindParam(':Id',$this->Id);
            $stmt->bindParam(':Ma_khach_hang',$this->Ma_khach_hang);
            $stmt->bindParam(':So_dien_thoai',$this->So_dien_thoai);
            $stmt->bindParam(':Email',$this->Email);
            $stmt->bindParam(':Dia_chi',$this->Dia_chi);
            $stmt->bindParam(':Ten_tai_khoan',$this->Ten_tai_khoan);
            $stmt->bindParam(':Mat_khau',$this->Mat_khau);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function delete_account_user() {
            $query = "DELETE FROM account_user WHERE Id=:Id";

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