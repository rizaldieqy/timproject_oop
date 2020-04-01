<?php 

abstract class Karyawan{
    abstract public function hitungKaryawan();
}

class stayHome extends Karyawan{
    public $nik, $nama, $alamat;
    protected $tanggungan, $jumlahkendaraan;
    private $gaji;


    public function setNik($nik){
        $this->nik = $nik;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    public function setTanggungan($tanggungan){
        $this->tanggungan = $tanggungan;
    }

    public function setJumlahkendaraan($jumlahkendaraan){
        $this->jumlahkendaraan = $jumlahkendaraan;
    }

    public function setGaji($gaji){
        $this->gaji = $gaji;
    }

    public function getGaji(){
        return $this->gaji;
    }

    public function hitungKaryawan(){
        return ($this->nik . " " . $this->nama . " " . $this->alamat . " " . $this->tanggungan . " " . $this->jumlahkendaraan . " " . $this->gaji . "<br>");
    }
}

$stayhome = new stayHome();
$karyawanstay = $stayhome->setNik = "1001" . " " . $stayhome->setNama = "Jamal" . " " . $stayhome->setAlamat = "Jl. Jalan" . " " . $stayhome->setTanggungan = "1 istri & 1 anak" . " " . $stayhome->setJumlahkendaraan = "2 motor" . " " . $stayhome->setGaji = "3000";
echo $karyawanstay;




class Wfh extends Karyawan{
    public $nik, $nama, $alamat;
    protected $tanggungan, $jumlahkendaraan;
    private $gaji;


    public function setNik($nik){
        $this->nik = $nik;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    public function setTanggungan($tanggungan){
        $this->tanggungan = $tanggungan;
    }

    public function setJumlahkendaraan($jumlahkendaraan){
        $this->jumlahkendaraan = $jumlahkendaraan;
    }

    public function setGaji($gaji){
        $this->gaji = $gaji;
    }

    public function getGaji(){
        return $this->gaji;
    }

    public function hitungKaryawan(){
        return ($this->nik . " " . $this->nama . " " . $this->alamat . " " . $this->tanggungan . " " . $this->jumlahkendaraan . " " . $this->gaji . "<br>");
    }
}

$workfromhome = new Wfh();
$karyawanhome = $karyawanhome->setNik = "1005" . " " . $karyawanhome->setNama = "Yadi" . " " . $karyawanhome->setAlamat = "Jl. Lurus" . " " . $karyawanhome->setTanggungan = "1 istri & 3 anak" . " " . $karyawanhome->setJumlahkendaraan = "2 motor & 1 mobil" . " " . $karyawanhome->setGaji = "5000";
echo $karyawanhome;

?>