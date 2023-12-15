<?php
    class Oder {

        private $conn;

        public $Id;
        public $Ten_mat_hang;
        public $Ma_don_hang;
        public $Nguoi_gui;
        public $Ma_khach_hang;
        public $Sdt_nguoi_gui;
        public $Dia_chi_gui;
        public $Ma_buu_chinh_gui;
        public $Nguoi_nhan;
        public $Sdt_nguoi_nhan;
        public $Dia_chi_nhan;
        public $Ma_buu_chinh_nhan;
        public $Loai_hang;
        public $Chi_dan;
        public $Ghi_chu;
        public $Cuoc_phi;
        public $COD;
        public $Khoi_luong;
        public $Thoi_gian_gui;
        public $Thoi_gian_hoan_thanh;
        public $Quan_ly_cong_ty;

        public function __construct($db) {
            $this->conn = $db;
        }

        //read data
        public function read_info() {
            $query = "SELECT * FROM oder ORDER BY Id DESC";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();
            return $stmt;
        }

        //show data
        public function show_is() {
            $query = "SELECT * FROM oder WHERE Id=? LIMIT 1";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->Id);
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->Ten_mat_hang = $row['Ten_mat_hang'];
            $this->Ma_don_hang = $row['Ma_don_hang'];
            $this->Nguoi_gui = $row['Nguoi_gui'];
            $this->Ma_khach_hang = $row['Ma_khach_hang'];
            $this->Sdt_nguoi_gui = $row['Sdt_nguoi_gui'];
            $this->Dia_chi_gui = $row['Dia_chi_gui'];
            $this->Ma_buu_chinh_gui = $row['Ma_buu_chinh_gui'];
            $this->Nguoi_nhan = $row['Nguoi_nhan'];
            $this->Sdt_nguoi_nhan = $row['Sdt_nguoi_nhan'];
            $this->Dia_chi_nhan = $row['Dia_chi_nhan'];
            $this->Ma_buu_chinh_nhan = $row['Ma_buu_chinh_nhan'];
            $this->Loai_hang = $row['Loai_hang'];
            $this->Chi_dan = $row['Chi_dan'];
            $this->Ghi_chu = $row['Ghi_chu'];
            $this->Cuoc_phi = $row['Cuoc_phi'];
            $this->COD = $row['COD'];
            $this->Khoi_luong = $row['Khoi_luong'];
            $this->Thoi_gian_gui = $row['Thoi_gian_gui'];
            $this->Thoi_gian_hoan_thanh = $row['Thoi_gian_hoan_thanh'];
            $this->Quan_ly_cong_ty = $row['Quan_ly_cong_ty'];

        }

        public function new_oder() {
            $query = "INSERT INTO oder SET Ten_mat_hang=:Ten_mat_hang ,Ma_don_hang=:Ma_don_hang ,Nguoi_gui=:Nguoi_gui ,Ma_khach_hang=:Ma_khach_hang ,
            Sdt_nguoi_gui=:Sdt_nguoi_gui ,Dia_chi_gui=:Dia_chi_gui ,Ma_buu_chinh_gui=:Ma_buu_chinh_gui ,Nguoi_nhan=:Nguoi_nhan ,Sdt_nguoi_nhan=:Sdt_nguoi_nhan ,
            Dia_chi_nhan=:Dia_chi_nhan ,Ma_buu_chinh_nhan=:Ma_buu_chinh_nhan ,Loai_hang=:Loai_hang ,Chi_dan=:Chi_dan ,Ghi_chu=:Ghi_chu ,Cuoc_phi=:Cuoc_phi ,
            COD=:COD ,Khoi_luong=:Khoi_luong ,Thoi_gian_gui=:Thoi_gian_gui ,Thoi_gian_hoan_thanh=:Thoi_gian_hoan_thanh ,Quan_ly_cong_ty=:Quan_ly_cong_ty";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Ten_mat_hang = htmlspecialchars(strip_tags($this->Ten_mat_hang));
            $this->Ma_don_hang = htmlspecialchars(strip_tags($this->Ma_don_hang));
            $this->Nguoi_gui = htmlspecialchars(strip_tags($this->Nguoi_gui));
            $this->Ma_khach_hang = htmlspecialchars(strip_tags($this->Ma_khach_hang));
            $this->Sdt_nguoi_gui = htmlspecialchars(strip_tags($this->Sdt_nguoi_gui));
            $this->Dia_chi_gui = htmlspecialchars(strip_tags($this->Dia_chi_gui));
            $this->Ma_buu_chinh_gui = htmlspecialchars(strip_tags($this->Ma_buu_chinh_gui));
            $this->Nguoi_nhan = htmlspecialchars(strip_tags($this->Nguoi_nhan));
            $this->Sdt_nguoi_nhan = htmlspecialchars(strip_tags($this->Sdt_nguoi_nhan));
            $this->Dia_chi_nhan = htmlspecialchars(strip_tags($this->Dia_chi_nhan));
            $this->Ma_buu_chinh_nhan = htmlspecialchars(strip_tags($this->Ma_buu_chinh_nhan));
            $this->Loai_hang = htmlspecialchars(strip_tags($this->Loai_hang));
            $this->Chi_dan = htmlspecialchars(strip_tags($this->Chi_dan));
            $this->Ghi_chu = htmlspecialchars(strip_tags($this->Ghi_chu));
            $this->Cuoc_phi = htmlspecialchars(strip_tags($this->Cuoc_phi));
            $this->COD = htmlspecialchars(strip_tags($this->COD));
            $this->Khoi_luong = htmlspecialchars(strip_tags($this->Khoi_luong));
            $this->Thoi_gian_gui = htmlspecialchars(strip_tags($this->Thoi_gian_gui));
            $this->Thoi_gian_hoan_thanh = htmlspecialchars(strip_tags($this->Thoi_gian_hoan_thanh));
            $this->Quan_ly_cong_ty = htmlspecialchars(strip_tags($this->Quan_ly_cong_ty));

            //bind data
            $stmt->bindParam(':Ten_mat_hang',$this->Ten_mat_hang);
            $stmt->bindParam(':Ma_don_hang',$this->Ma_don_hang);
            $stmt->bindParam(':Nguoi_gui',$this->Nguoi_gui);
            $stmt->bindParam(':Ma_khach_hang',$this->Ma_khach_hang);
            $stmt->bindParam(':Sdt_nguoi_gui',$this->Sdt_nguoi_gui);
            $stmt->bindParam(':Dia_chi_gui',$this->Dia_chi_gui);
            $stmt->bindParam(':Ma_buu_chinh_gui',$this->Ma_buu_chinh_gui);
            $stmt->bindParam(':Nguoi_nhan',$this->Nguoi_nhan);
            $stmt->bindParam(':Sdt_nguoi_nhan',$this->Sdt_nguoi_nhan);
            $stmt->bindParam(':Dia_chi_nhan',$this->Dia_chi_nhan);
            $stmt->bindParam(':Ma_buu_chinh_nhan',$this->Ma_buu_chinh_nhan);
            $stmt->bindParam(':Loai_hang',$this->Loai_hang);
            $stmt->bindParam(':Chi_dan',$this->Chi_dan);
            $stmt->bindParam(':Ghi_chu',$this->Ghi_chu);
            $stmt->bindParam(':Cuoc_phi',$this->Cuoc_phi);
            $stmt->bindParam(':COD',$this->COD);
            $stmt->bindParam(':Khoi_luong',$this->Khoi_luong);
            $stmt->bindParam(':Thoi_gian_gui',$this->Thoi_gian_gui);
            $stmt->bindParam(':Thoi_gian_hoan_thanh',$this->Thoi_gian_hoan_thanh);
            $stmt->bindParam(':Quan_ly_cong_ty',$this->Quan_ly_cong_ty);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function update_the_oder() {
            $query = "UPDATE oder SET Ten_mat_hang=:Ten_mat_hang ,Ma_don_hang=:Ma_don_hang ,Nguoi_gui=:Nguoi_gui ,Ma_khach_hang=:Ma_khach_hang ,
            Sdt_nguoi_gui=:Sdt_nguoi_gui ,Dia_chi_gui=:Dia_chi_gui ,Ma_buu_chinh_gui=:Ma_buu_chinh_gui ,Nguoi_nhan=:Nguoi_nhan ,Sdt_nguoi_nhan=:Sdt_nguoi_nhan ,
            Dia_chi_nhan=:Dia_chi_nhan ,Ma_buu_chinh_nhan=:Ma_buu_chinh_nhan ,Loai_hang=:Loai_hang ,Chi_dan=:Chi_dan ,Ghi_chu=:Ghi_chu ,Cuoc_phi=:Cuoc_phi ,COD=:COD ,
            Khoi_luong=:Khoi_luong ,Thoi_gian_gui=:Thoi_gian_gui ,Thoi_gian_hoan_thanh=:Thoi_gian_hoan_thanh ,Quan_ly_cong_ty=:Quan_ly_cong_ty WHERE Id=:Id";

            $stmt = $this->conn->prepare($query);

            //clean data
            $this->Id = htmlspecialchars(strip_tags($this->Id));
            $this->Ten_mat_hang = htmlspecialchars(strip_tags($this->Ten_mat_hang));
            $this->Ma_don_hang = htmlspecialchars(strip_tags($this->Ma_don_hang));
            $this->Nguoi_gui = htmlspecialchars(strip_tags($this->Nguoi_gui));
            $this->Ma_khach_hang = htmlspecialchars(strip_tags($this->Ma_khach_hang));
            $this->Sdt_nguoi_gui = htmlspecialchars(strip_tags($this->Sdt_nguoi_gui));
            $this->Dia_chi_gui = htmlspecialchars(strip_tags($this->Dia_chi_gui));
            $this->Ma_buu_chinh_gui = htmlspecialchars(strip_tags($this->Ma_buu_chinh_gui));
            $this->Nguoi_nhan = htmlspecialchars(strip_tags($this->Nguoi_nhan));
            $this->Sdt_nguoi_nhan = htmlspecialchars(strip_tags($this->Sdt_nguoi_nhan));
            $this->Dia_chi_nhan = htmlspecialchars(strip_tags($this->Dia_chi_nhan));
            $this->Ma_buu_chinh_nhan = htmlspecialchars(strip_tags($this->Ma_buu_chinh_nhan));
            $this->Loai_hang = htmlspecialchars(strip_tags($this->Loai_hang));
            $this->Chi_dan = htmlspecialchars(strip_tags($this->Chi_dan));
            $this->Ghi_chu = htmlspecialchars(strip_tags($this->Ghi_chu));
            $this->Cuoc_phi = htmlspecialchars(strip_tags($this->Cuoc_phi));
            $this->COD = htmlspecialchars(strip_tags($this->COD));
            $this->Khoi_luong = htmlspecialchars(strip_tags($this->Khoi_luong));
            $this->Thoi_gian_gui = htmlspecialchars(strip_tags($this->Thoi_gian_gui));
            $this->Thoi_gian_hoan_thanh = htmlspecialchars(strip_tags($this->Thoi_gian_hoan_thanh));
            $this->Quan_ly_cong_ty = htmlspecialchars(strip_tags($this->Quan_ly_cong_ty));

            //bind data
            $stmt->bindParam(':Id',$this->Id);
            $stmt->bindParam(':Ten_mat_hang',$this->Ten_mat_hang);
            $stmt->bindParam(':Ma_don_hang',$this->Ma_don_hang);
            $stmt->bindParam(':Nguoi_gui',$this->Nguoi_gui);
            $stmt->bindParam(':Ma_khach_hang',$this->Ma_khach_hang);
            $stmt->bindParam(':Sdt_nguoi_gui',$this->Sdt_nguoi_gui);
            $stmt->bindParam(':Dia_chi_gui',$this->Dia_chi_gui);
            $stmt->bindParam(':Ma_buu_chinh_gui',$this->Ma_buu_chinh_gui);
            $stmt->bindParam(':Nguoi_nhan',$this->Nguoi_nhan);
            $stmt->bindParam(':Sdt_nguoi_nhan',$this->Sdt_nguoi_nhan);
            $stmt->bindParam(':Dia_chi_nhan',$this->Dia_chi_nhan);
            $stmt->bindParam(':Ma_buu_chinh_nhan',$this->Ma_buu_chinh_nhan);
            $stmt->bindParam(':Loai_hang',$this->Loai_hang);
            $stmt->bindParam(':Chi_dan',$this->Chi_dan);
            $stmt->bindParam(':Ghi_chu',$this->Ghi_chu);
            $stmt->bindParam(':Cuoc_phi',$this->Cuoc_phi);
            $stmt->bindParam(':COD',$this->COD);
            $stmt->bindParam(':Khoi_luong',$this->Khoi_luong);
            $stmt->bindParam(':Thoi_gian_gui',$this->Thoi_gian_gui);
            $stmt->bindParam(':Thoi_gian_hoan_thanh',$this->Thoi_gian_hoan_thanh);
            $stmt->bindParam(':Quan_ly_cong_ty',$this->Quan_ly_cong_ty);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s.\n",$stmt->error);
            return false;
        }

        public function delete_oder() {
            $query = "DELETE FROM oder WHERE Id=:Id";

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