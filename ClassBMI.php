<?php
class bmiPasien
{
    public $nama,
        $berat,
        $tinggi,
        $umur,
        $jenisKelamin;

    public function hasilBMI()
    {
        return "<b>Nama : $this->nama  <br><br>
                Berat Badan : $this->berat <br><br>
                Tinggi Badan : $this->tinggi <br><br>
                Umur : $this->umur <br><br>
                Jenis Kelamin : $this->jenisKelamin</b>";
    }
    public function statusBMI($BMI)
    {
        if ($BMI < 18.5){
           return "<td>Kekurangan Berat Badan</td>"; 
        }  elseif ($BMI >= 18.5 && $BMI <= 23.9) {
            return "<td>Normal (ideal)</td>";
        }  elseif ($BMI >= 24.0 && $BMI <= 26.9) {
            return "<td>Kelebihan Berat Badan</td>";
        }  else {
            return "<td>Kegemukan (Obesitas)</td>";
        }
    }
}

if (isset($_GET["nama_lengkap"])) {
    $bmi = new bmiPasien;
    $bmi->nama = $_GET["nama_lengkap"];
    $bmi->berat = $_GET["berat"];
    $bmi->tinggi = $_GET["tinggi"];
    $bmi->umur = $_GET["umur"];
    $bmi->jenisKelamin = $_GET["jenis_kelamin"];
}
$pasien1 = ["nama" => "Mulia", "kelamin" => "Laki Laki", "umur" => 22, "berat" => 57.6, "tinggi" => 179];
$pasien2 = ["nama" => "Ali", "kelamin" => "Laki Laki", "umur" => 21, "berat" => 52.3, "tinggi" => 185];
$pasien3 = ["nama" => "Yahya", "kelamin" => "Laki Laki", "umur" => 15, "berat" => 55.2, "tinggi" => 151];
$pasien4 = ["nama" => $bmi->nama, "kelamin" => $bmi->jenisKelamin, "umur" => $bmi->umur, "berat" => $bmi->berat, "tinggi" => $bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];

?>