<?php

// Class yang tidak diintansiasi
// Class hewan
trait Hewan{
    public  $nama = "",
            $darah = 50,
            $jumlahKaki,
            $keahlian = "";


    // Method Atraksi
    public function atraksi($namaHewan, $keahlianHewan){
        $this->nama = $namaHewan;
        $this->keahlian = $keahlianHewan;
        return "$this->nama sedang $this->keahlian";
    }
}

// Class Fight
trait Fight{
    public  $attackPower,
            $defencePower;
    // Method serang
    public function serang($hewan){
        return "$this->namaHewan sedang menyerang $hewan";
    }
    // Method diserang
    public function diserang($namaHewan, $darah, $attackPowerHewan, $defencePowerHewan){
        $darah = $darah;
        $namaHewan = $namaHewan;
        $this->attackPower = $attackPowerHewan;
        $this->defencePower = $defencePowerHewan;

        $result = round($darah - ($this->attackPower/$this->defencePower));
        
        return "$this->namaHewan Sedang diserang oleh $namaHewan, sisa darah $this->namaHewan adalah $result";

    }
}

// Class yang dapat diinstansiasi
// Class Elang
class Elang{
    use Fight,Hewan;
    public  $namaHewan = "Elang",
            $jumlahKakiHewan = 2,
            $keahlianHewan = "Terbang Tinggi",
            $attackPowerHewan = 10,
            $defencePowerHewan = 5;

    // method getInfoHewan
    public function getInfoHewan($aP, $dP, $nama, $keahlian, $darah, $jumlahKaki){
        // properti dari class fight dan Hewan
        $aP = $aP;
        $dP = $dP;
        $nama = $nama;
        $keahlian = $keahlian;
        $darah = $darah;
        $jumlahKaki = $jumlahKaki;

        return "$aP";
    }
}
// class Harimau
class Harimau{
    use Fight,Hewan;

    public  $namaHewan = "Harimau",
            $jumlahKakiHewan = 4,
            $keahlianHewan = "Lari Cepat",
            $attackPowerHewan = 8,
            $defencePowerHewan = 7;

    // method getInfoHewan
    public function getInfoHewan(){
        
    }
}

$elang = new Elang();
$harimau = new Harimau();
// Atraksi
echo "<br>";
echo $elang->atraksi($elang->namaHewan, $elang->keahlianHewan);
echo "<br>";
echo $harimau->atraksi($harimau->namaHewan, $harimau->keahlianHewan);
echo "<br><br>";
// Serang
echo $elang->serang($harimau->namaHewan);
echo "<br>";
echo $harimau->serang($elang->namaHewan);
echo "<br><br>";
// getInfoHewan belum beres
echo $elang->getInfoHewan($elang->attackPower,$elang->defencePower, $elang->nama, $elang->keahlian, $elang->darah, $elang->jumlahKaki);
// Diserang