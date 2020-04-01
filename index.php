<?php 
abstract class Karyawan
{
    abstract public function hitungKaryawan();
}

class stayHome extends Karyawan
{
    public $nik;
    public $nama;
    public $alamat;
    protected $tanggungan;
    protected $jumlahkendaraan;
    private $gaji;


    public function setGaji($gaji)
    {
        $this->gaji = $gaji;
    }

    public function getGaji()
    {
        return $this->gaji;
    }

    public function hitungKaryawan()
    {
        return ($this->nik . " " . $this->nama . " " . $this->alamat . " " . $this->tanggungan . " " . $this->jumlahkendaraan . " " . $this->gaji);
    }
}

$stayhome = new stayHome();
// echo $stayhome->hitungKaryawan();
$karyawan_sh = $stayhome->setNik = '1001' . $stayhome->setNama = '<td> Ani </td>' . $stayhome->setAlamat = '<td>Jl. Srengseng Raya</td>' . $stayhome->setTanggungan = '<td>3 Anak</td>' . $stayhome->setJml_kendaraan = '<td>1 Motor</td>' . $stayhome->setGaji = '<td>3000000</td>';
$karyawan_sh1 = $stayhome->setNik = '1002' . $stayhome->setNama = '<td> Asep </td>' . $stayhome->setAlamat = '<td>Jl. Panjang</td>' . $stayhome->setTanggungan = '<td>1 istri & 3 Anak</td>' . $stayhome->setJml_kendaraan = '<td>1 Motor</td>' . $stayhome->setGaji = '<td>4000000</td>';
$karyawan_sh2 = $stayhome->setNik = '1003' . $stayhome->setNama = '<td> Alex </td>' . $stayhome->setAlamat = '<td>Jl. Kedoya Selatan</td>' . $stayhome->setTanggungan = '<td>1 istri & 2 Anak</td>' . $stayhome->setJml_kendaraan = '<td>1 Motor & 1 Mobil</td>' . $stayhome->setGaji = '<td>6000000</td>';
$karyawan_sh3 = $stayhome->setNik = '1004' . $stayhome->setNama = '<td> Siti </td>' . $stayhome->setAlamat = '<td>Jl. Kedoya Utara</td>' . $stayhome->setTanggungan = '<td>2 Anak</td>' . $stayhome->setJml_kendaraan = '<td>1 Motor & 1 Mobil</td>' . $stayhome->setGaji = '<td>6000000</td>';
$karyawan_sh4 = $stayhome->setNik = '1005' . $stayhome->setNama = '<td> Sugeng </td>' . $stayhome->setAlamat = '<td>Jl. Pintu air</td>' . $stayhome->setTanggungan = '<td>1 istri & 1 Anak</td>' . $stayhome->setJml_kendaraan = '<td>1 Motor</td>' . $stayhome->setGaji = '<td>4500000</td>';
class Wfh extends Karyawan
{
    public $nik;
    public $nama;
    public $alamat;
    protected $tanggungan;
    protected $jumlahkendaraan;
    private $gaji;


    public function setGaji($gaji)
    {
        $this->gaji = $gaji;
    }

    public function getGaji()
    {
        return $this->gaji;
    }

    public function hitungKaryawan()
    {
        return ($this->nik . " " . $this->nama . " " . $this->alamat . " " . $this->tanggungan . " " . $this->jumlahkendaraan . " " . $this->gaji);
    }
}

$wfh = new Wfh();
$karyawan_wfh = $wfh->setNik = '1006' . $wfh->setNama = '<td> Budi </td>' . $wfh->setAlamat = '<td>Jl. Duri kosambi</td>' . $wfh->setTanggungan = '<td> 1 istri & 2 Anak</td>' . $wfh->setJml_kendaraan = '<td>1 Motor</td>' . $wfh->setGaji = '<td>4000000</td>';
$karyawan_wfh1 = $wfh->setNik = '1007' . $wfh->setNama = '<td> Angel </td>' . $wfh->setAlamat = '<td>Jl. Kedamaian</td>' . $wfh->setTanggungan = '<td>3 Anak</td>' . $wfh->setJml_kendaraan = '<td>2 Motor</td>' . $wfh->setGaji = '<td>4500000</td>';
$karyawan_wfh2 = $wfh->setNik = '1008' . $wfh->setNama = '<td> Sutris </td>' . $wfh->setAlamat = '<td>Jl. Abadi raya</td>' . $wfh->setTanggungan = '<td>2 istri & 3 Anak</td>' . $wfh->setJml_kendaraan = '<td>2 Motor & 1 Mobil</td>' . $wfh->setGaji = '<td>8000000</td>';
$karyawan_wfh3 = $wfh->setNik = '1009' . $wfh->setNama = '<td> Kirno </td>' . $wfh->setAlamat = '<td>Jl. Bangun Nusa</td>' . $wfh->setTanggungan = '<td>1 istri & 4 Anak</td>' . $wfh->setJml_kendaraan = '<td>2 Motor</td>' . $wfh->setGaji = '<td>5000000</td>';
$karyawan_wfh4 = $wfh->setNik = '1010' . $wfh->setNama = '<td> Tuti </td>' . $wfh->setAlamat = '<td>Jl. Semanan raya</td>' . $wfh->setTanggungan = '<td>1 Anak</td>' . $wfh->setJml_kendaraan = '<td>1 Motor</td>' . $wfh->setGaji = '<td>5500000</td>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Lora', serif;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h2>Karyawan PT. ABC</h2>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h4>DATA KARYAWAN STAY HOME</h4>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggungan</th>
                            <th>Jumlah Kendaraan</th>
                            <th>Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $karyawan_sh; ?> </td>                           
                        </tr>
                        <tr>
                            <td><?php echo $karyawan_sh1; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $karyawan_sh2; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $karyawan_sh3; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $karyawan_sh4; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h4>DATA KARYAWAN WORK FROM HOME</h4>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggungan</th>
                            <th>Jumlah Kendaraan</th>
                            <th>Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $karyawan_wfh; ?> </td>                           
                        </tr>
                        <tr>
                            <td><?php echo $karyawan_wfh1; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $karyawan_wfh2; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $karyawan_wfh3; ?> </td>
                        </tr>
                        <tr>
                            <td><?php echo $karyawan_wfh4; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>