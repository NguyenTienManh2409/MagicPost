<?php
    class Content {

        private $conn;

        public $Id;
        public $Ma_don_hang;
        public $Noi_dung;
        public $So_luong;
        public $Gia_tri;
        public $Giay_to_kem_theo;

        public function __construct($db) {
            $this->conn = $db;
        }

        //read data
        public function read_info() {
            $query = "SELECT * FROM content ORDER BY Id DESC";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return $stmt;
        }

        //show data
        public function show_one() {
            $query = "SELECT * FROM content WHERE Id=? LIMIT 1";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->Id);
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->Ma_don_hang = $row['Ma_don_hang'];
            $this->Noi_dung = $row['Noi_dung'];
            $this->So_luong = $row['So_luong'];
            $this->Gia_tri = $row['Gia_tri'];
            $this->Giay_to_kem_theo = $row['Giay_to_kem_theo'];

        }

        public function content_oder() {
            $query = "SELECT * FROM content WHERE Ma_don_hang=:Ma_don_hang";
            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ma_don_hang = htmlspecialchars(strip_tags($this->Ma_don_hang));

            //bind data
            $stmt->bindParam(':Ma_don_hang',$this->Ma_don_hang);
            $stmt->execute();
            return $stmt;
        }


        public function new_content() {
            $query = "INSERT INTO content SET Ma_don_hang=:Ma_don_hang ,Noi_dung=:Noi_dung ,So_luong=:So_luong ,Gia_tri=:Gia_tri ,
            Giay_to_kem_theo=:Giay_to_kem_theo";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ma_don_hang = htmlspecialchars(strip_tags($this->Ma_don_hang));
            $this->Noi_dung = htmlspecialchars(strip_tags($this->Noi_dung));
            $this->So_luong = htmlspecialchars(strip_tags($this->So_luong));
            $this->Gia_tri = htmlspecialchars(strip_tags($this->Gia_tri));
            $this->Giay_to_kem_theo = htmlspecialchars(strip_tags($this->Giay_to_kem_theo));
            //bind data
            $stmt->bindParam(':Ma_don_hang',$this->Ma_don_hang);
            $stmt->bindParam(':Noi_dung',$this->Noi_dung);
            $stmt->bindParam(':So_luong',$this->So_luong);
            $stmt->bindParam(':Gia_tri',$this->Gia_tri);
            $stmt->bindParam(':Giay_to_kem_theo',$this->Giay_to_kem_theo);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function update_content() {
            $query = "UPDATE content SET Ma_don_hang=:Ma_don_hang ,Noi_dung=:Noi_dung ,So_luong=:So_luong ,Gia_tri=:Gia_tri ,
            Giay_to_kem_theo=:Giay_to_kem_theo WHERE Id=:Id";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Id = htmlspecialchars(strip_tags($this->Id));
            $this->Ma_don_hang = htmlspecialchars(strip_tags($this->Ma_don_hang));
            $this->Noi_dung = htmlspecialchars(strip_tags($this->Noi_dung));
            $this->So_luong = htmlspecialchars(strip_tags($this->So_luong));
            $this->Gia_tri = htmlspecialchars(strip_tags($this->Gia_tri));
            $this->Giay_to_kem_theo = htmlspecialchars(strip_tags($this->Giay_to_kem_theo));
            //bind data
            $stmt->bindParam(':Id',$this->Id);
            $stmt->bindParam(':Ma_don_hang',$this->Ma_don_hang);
            $stmt->bindParam(':Noi_dung',$this->Noi_dung);
            $stmt->bindParam(':So_luong',$this->So_luong);
            $stmt->bindParam(':Gia_tri',$this->Gia_tri);
            $stmt->bindParam(':Giay_to_kem_theo',$this->Giay_to_kem_theo);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function delete_content() {
            $query = "DELETE FROM content WHERE Id=:Id";

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