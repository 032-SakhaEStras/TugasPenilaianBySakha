<?php
    $nama_siswa = "Sakha Allkoesyah";
    $kelas = "XII PPLG 2";
    $nilai_tugas = 85;
    $nilai_UTS = 75;
    $nilai_UAS = 90;
    $nilai_Akhir = $nilai_tugas * 30/100 + $nilai_UTS * 30/100 + $nilai_UAS * 40/100;

    if ($nilai_Akhir > 90) {
        $predikat = "A";
        $status = "LULUS";
    } else if ($nilai_Akhir > 80 && $nilai_Akhir < 90) {
        $predikat = "B";
        $status = "LULUS";
    } else if ($nilai_Akhir > 75 && $nilai_Akhir < 80) {
        $predikat = "C";
        $status = "LULUS";
    } else if ($nilai_Akhir > 60 && $nilai_Akhir < 75) {
        $predikat = "D";
        $status = "TIDAK LULUS";
    } else {
        $predikat = "E";
        $status = "TIDAK LULUS";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian PHP</title>
</head>
<body>
    <p>
        Nama Siswa:
        <?= 
            $nama_siswa;
        ?>
    </p>
    <p>
        Kelas:
        <?php
            echo $kelas;
        ?>
    </p>
    <hr>
    <p>
        Nilai Tugas:
        <?= 
            $nilai_tugas;
        ?>
    </p>
    <p>
    <p>
        Nilai UTS:
        <?= 
            $nilai_UTS;
        ?>
    </p>
        <p>
        Nilai UAS:
        <?= 
            $nilai_UAS;
        ?>
    </p>
    <hr>
        <p>
        Nilai Akhir:
        <?= 
            $nilai_Akhir;
        ?>
    </p>
    <p>
        Predikat:
        <?= 
            $predikat;
        ?>
    </p>
    <p>
        Status:
        <?= 
            $status;
        ?>
    </p>
</body>
</html>