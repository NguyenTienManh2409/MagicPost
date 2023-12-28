<?php
    class Account {

        private $conn;

        public $Id;
        public $Vai_tro;
        public $Vai_tro_1;
        public $Ho_ten;
        public $So_dien_thoai;
        public $Dia_chi;
        public $Ma_nhan_vien;
        public $Ten_tai_khoan;
        public $Email;
        public $Mat_khau;
        public $Ma_don_vi;

        public function __construct($db) {
            $this->conn = $db;
        }

        //read data
        public function read_info() {
            $query = "SELECT * FROM account ORDER BY Id DESC";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return $stmt;
        }

        public function read_info_role($roles) {
            $roles = implode("', '", $roles);
            $query = "SELECT * FROM account
            WHERE account.Vai_tro IN ('$roles')
            ORDER BY Id DESC";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }

        //show list account where
        public function list_manager() {
            $query = "SELECT * FROM account WHERE Vai_tro=:Vai_tro OR Vai_tro=:Vai_tro_1";
            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Vai_tro = htmlspecialchars(strip_tags($this->Vai_tro));
            $this->Vai_tro_1 = htmlspecialchars(strip_tags($this->Vai_tro_1));

            //bind data
            $stmt->bindParam(':Vai_tro',$this->Vai_tro);
            $stmt->bindParam(':Vai_tro_1',$this->Vai_tro_1);
            $stmt->execute();
            return $stmt;
        }
        
        //show list account where workplace
        public function list_staff() {
            $query = "SELECT Ma_nhan_vien FROM account WHERE Ma_don_vi=:Ma_don_vi";
            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ma_don_vi = htmlspecialchars(strip_tags($this->Ma_don_vi));

            //bind data
            $stmt->bindParam(':Ma_don_vi',$this->Ma_don_vi);
            $stmt->execute();
            return $stmt;
        }

        //show data
        public function show_one() {
            $query = "SELECT * FROM account WHERE Id=? LIMIT 1";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->Id);
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->Vai_tro = $row['Vai_tro'];
            $this->Ho_ten = $row['Ho_ten'];
            $this->So_dien_thoai = $row['So_dien_thoai'];
            $this->Dia_chi = $row['Dia_chi'];
            $this->Ma_nhan_vien = $row['Ma_nhan_vien'];
            $this->Ten_tai_khoan = $row['Ten_tai_khoan'];
            $this->Email = $row['Email'];
            $this->Mat_khau = $row['Mat_khau'];
            $this->Ma_don_vi = $row['Ma_don_vi'];
        }

        //login
        public function login_staff() {
            $query = "SELECT Ten_tai_khoan,Mat_khau,Vai_tro from account where Ten_tai_khoan=:Ten_tai_khoan";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->Ten_tai_khoan = htmlspecialchars(strip_tags($this->Ten_tai_khoan));
            //bind data
            $stmt->bindParam(':Ten_tai_khoan',$this->Ten_tai_khoan);
            $stmt->execute();
            return $stmt;
        }

        public function new_account() {
            $query = "INSERT INTO account SET Vai_tro=:Vai_tro ,Ho_ten=:Ho_ten ,So_dien_thoai=:So_dien_thoai ,Dia_chi=:Dia_chi ,Ma_nhan_vien=:Ma_nhan_vien ,
            Ten_tai_khoan=:Ten_tai_khoan ,Email=:Email ,Mat_khau=:Mat_khau ,Ma_don_vi=:Ma_don_vi";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Vai_tro = htmlspecialchars(strip_tags($this->Vai_tro));
            $this->Ho_ten = htmlspecialchars(strip_tags($this->Ho_ten));
            $this->So_dien_thoai = htmlspecialchars(strip_tags($this->So_dien_thoai));
            $this->Dia_chi = htmlspecialchars(strip_tags($this->Dia_chi));
            $this->Ma_nhan_vien = htmlspecialchars(strip_tags($this->Ma_nhan_vien));
            $this->Ten_tai_khoan = htmlspecialchars(strip_tags($this->Ten_tai_khoan));
            $this->Email = htmlspecialchars(strip_tags($this->Email));
            $this->Mat_khau = htmlspecialchars(strip_tags($this->Mat_khau));
            $this->Ma_don_vi = htmlspecialchars(strip_tags($this->Ma_don_vi));
            //bind data
            $stmt->bindParam(':Vai_tro',$this->Vai_tro);
            $stmt->bindParam(':Ho_ten',$this->Ho_ten);
            $stmt->bindParam(':So_dien_thoai',$this->So_dien_thoai);
            $stmt->bindParam(':Dia_chi',$this->Dia_chi);
            $stmt->bindParam(':Ma_nhan_vien',$this->Ma_nhan_vien);
            $stmt->bindParam(':Ten_tai_khoan',$this->Ten_tai_khoan);
            $stmt->bindParam(':Email',$this->Email);
            $stmt->bindParam(':Mat_khau',$this->Mat_khau);
            $stmt->bindParam(':Ma_don_vi',$this->Ma_don_vi);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function update_account() {
            $query = "UPDATE account SET Vai_tro=:Vai_tro ,Ho_ten=:Ho_ten ,So_dien_thoai=:So_dien_thoai ,Dia_chi=:Dia_chi ,Ma_nhan_vien=:Ma_nhan_vien ,
            Ten_tai_khoan=:Ten_tai_khoan ,Email=:Email ,Mat_khau=:Mat_khau ,Ma_don_vi=:Ma_don_vi WHERE Id=:Id";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Id = htmlspecialchars(strip_tags($this->Id));
            $this->Vai_tro = htmlspecialchars(strip_tags($this->Vai_tro));
            $this->Ho_ten = htmlspecialchars(strip_tags($this->Ho_ten));
            $this->So_dien_thoai = htmlspecialchars(strip_tags($this->So_dien_thoai));
            $this->Dia_chi = htmlspecialchars(strip_tags($this->Dia_chi));
            $this->Ma_nhan_vien = htmlspecialchars(strip_tags($this->Ma_nhan_vien));
            $this->Ten_tai_khoan = htmlspecialchars(strip_tags($this->Ten_tai_khoan));
            $this->Email = htmlspecialchars(strip_tags($this->Email));
            $this->Mat_khau = htmlspecialchars(strip_tags($this->Mat_khau));
            $this->Ma_don_vi = htmlspecialchars(strip_tags($this->Ma_don_vi));
            //bind data
            $stmt->bindParam(':Id',$this->Id);
            $stmt->bindParam(':Vai_tro',$this->Vai_tro);
            $stmt->bindParam(':Ho_ten',$this->Ho_ten);
            $stmt->bindParam(':So_dien_thoai',$this->So_dien_thoai);
            $stmt->bindParam(':Dia_chi',$this->Dia_chi);
            $stmt->bindParam(':Ma_nhan_vien',$this->Ma_nhan_vien);
            $stmt->bindParam(':Ten_tai_khoan',$this->Ten_tai_khoan);
            $stmt->bindParam(':Email',$this->Email);
            $stmt->bindParam(':Mat_khau',$this->Mat_khau);
            $stmt->bindParam(':Ma_don_vi',$this->Ma_don_vi);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function delete_account() {
            $query = "DELETE FROM account WHERE Id=:Id";

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