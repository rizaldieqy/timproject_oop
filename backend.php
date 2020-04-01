<?php 

abstract class Karyawan{
    abstract public function hitungKaryawan();
}

class stayHome extends Karyawan{
    public $nik = 1001;
    public $nama = "Jamal";
    public $alamat = "Jl. Lurus";
    protected $tanggungan = "1 istri & 1 anak";
    protected $jumlahkendaraan = "2 Motor";
    private $gaji = 3000;


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
echo $stayhome->hitungKaryawan();



class Wfh extends Karyawan{
    public $nik = 1005;
    public $nama = "Yadi";
    public $alamat = "Jl. Panjang";
    protected $tanggungan = "1 istri & 3 anak";
    protected $jumlahkendaraan = "2 Motor & 1 Mobil";
    private $gaji = 5000;


    public function setGaji($gaji){
        $this->gaji = $gaji;
    }

    public function getGaji(){
        return $this->gaji;
    }

    public function hitungKaryawan(){
        return ($this->nik . " " . $this->nama . " " . $this->alamat . " " . $this->tanggungan . " " . $this->jumlahkendaraan . " " . $this->gaji);
    }
}

$wfh = new Wfh();
echo $wfh->hitungKaryawan();

?>