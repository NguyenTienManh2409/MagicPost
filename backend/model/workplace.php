<?php
    class Workplace {

        private $conn;

        public $Id;
        public $Ma_don_vi;
        public $Ma_buu_chinh;
        public $Dia_chi;
        public $Quan_ly;

        public function __construct($db) {
            $this->conn = $db;
        }

        //read data
        public function read() {
            $query = "SELECT * FROM workplace ORDER BY Id DESC";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return $stmt;
        }

        //show data
        public function show() {
            $query = "SELECT * FROM workplace WHERE Id=? LIMIT 1";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->Id);
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->Ma_don_vi = $row['Ma_don_vi'];
            $this->Ma_buu_chinh = $row['Ma_buu_chinh'];
            $this->Dia_chi = $row['Dia_chi'];
            $this->Quan_ly = $row['Quan_ly'];

        }

        public function create() {
            $query = "INSERT INTO workplace SET Ma_don_vi=:Ma_don_vi ,Ma_buu_chinh=:Ma_buu_chinh ,Dia_chi=:Dia_chi ,Quan_ly=:Quan_ly";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ma_don_vi = htmlspecialchars(strip_tags($this->Ma_don_vi));
            $this->Ma_buu_chinh = htmlspecialchars(strip_tags($this->Ma_buu_chinh));
            $this->Dia_chi = htmlspecialchars(strip_tags($this->Dia_chi));
            $this->Quan_ly = htmlspecialchars(strip_tags($this->Quan_ly));
            //bind data
            $stmt->bindParam(':Ma_don_vi',$this->Ma_don_vi);
            $stmt->bindParam(':Ma_buu_chinh',$this->Ma_buu_chinh);
            $stmt->bindParam(':Dia_chi',$this->Dia_chi);
            $stmt->bindParam(':Quan_ly',$this->Quan_ly);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function update() {
            $query = "UPDATE workplace SET Ma_don_vi=:Ma_don_vi ,Ma_buu_chinh=:Ma_buu_chinh ,Dia_chi=:Dia_chi ,Quan_ly=:Quan_ly WHERE Id=:Id";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Id = htmlspecialchars(strip_tags($this->Id));
            $this->Ma_don_vi = htmlspecialchars(strip_tags($this->Ma_don_vi));
            $this->Ma_buu_chinh = htmlspecialchars(strip_tags($this->Ma_buu_chinh));
            $this->Dia_chi = htmlspecialchars(strip_tags($this->Dia_chi));
            $this->Quan_ly = htmlspecialchars(strip_tags($this->Quan_ly));
            //bind data
            $stmt->bindParam(':Id',$this->Id);
            $stmt->bindParam(':Ma_don_vi',$this->Ma_don_vi);
            $stmt->bindParam(':Ma_buu_chinh',$this->Ma_buu_chinh);
            $stmt->bindParam(':Dia_chi',$this->Dia_chi);
            $stmt->bindParam(':Quan_ly',$this->Quan_ly);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function delete() {
            $query = "DELETE FROM workplace WHERE Id=:Id";

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