<?php 
    class Nilai {
        public $mapel;
        public $nilai;

        public function __construct($mapel, $nilai){
            $this->mapel = $mapel;
            $this->nilai = $nilai;
        }
    }

    class Siswa {
        public $nrp;
        public $nama;
        public $daftarNilai = [];

        public function __construct($nrp, $nama){
            $this->nrp = $nrp;
            $this->nama = $nama;
        }

        public function tambahNilai($mapel , $nilai) {
            $this->daftarNilai[] = new Nilai($mapel , $nilai);
        }

    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateRandomSiswa() {
        $siswa = new Siswa(rand(100000, 777781288), generateRandomString(10));
        $mapel = ['Inggris', 'Indonesia', 'Jepang'];
        for ($i=0; $i < 3; $i++) { 
            $mapelRandom = array_rand($mapel);
            $nilai = rand(0, 100);
            $siswa->tambahNilai($mapel[$mapelRandom] , $nilai);
        }
        return $siswa;
    }

    $newSiswa = new Siswa("123451231", "Dhani");
    $newSiswa->tambahNilai("Inggris", 100);
    echo "siswa baru ". "\n";
    echo "nrp " . $newSiswa->nrp . "\n";
    echo "nama " . $newSiswa->nama . "\n";
    $nilaiSiswaBaru = $newSiswa->daftarNilai;
    foreach ($nilaiSiswaBaru as $key => $value) {
        echo "$value->mapel : $value->nilai <br>";
    }

    $daftarSiswa = [];
    for ($i=0 ; $i<10 ;$i++){
     $daftarSiswa[] = generateRandomSiswa();
    }

    foreach($daftarSiswa as $value) {
        echo "NRP: ". $value->nrp. "\n";
        echo "Nama: ". $value->nama. "\n";
        foreach($value->daftarNilai as $value2) {
            echo "Mapel: ". $value2->mapel. "\n";
            echo "Nilai: ". $value2->nilai. "\n";
        }
    }
    

?>