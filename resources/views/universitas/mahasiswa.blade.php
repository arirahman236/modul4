<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <!-- <ol>
        <li><?php //echo $mahasiswa01;?></li>
        <li>Nayo Tama</li>
        <li>Hapid Husain</li>
        <li>Alvian Ramadani</li>
    </ol>
    <ol>
        <li><?php //echo $mahasiswa01;?></li>
        <li><?php //echo $mahasiswa02;?></li>
        <li><?php //echo $mahasiswa03;?></li>
        <li><?php //echo $mahasiswa04;?></li>
    </ol>
    <ol>
        <li><?php //echo $mahasiswa[0];?></li>
        <li><?php //echo $mahasiswa[1];?></li>
        <li><?php// echo $mahasiswa[2];?></li>
        <li><?php //echo $mahasiswa[3];?></li>
    </ol> -->
    <ol>
        <?php 
            foreach ($mahasiswa as $nama) {
                echo "<li> $nama </li>";
            }
        ?>
    </ol>
    <div>
        Copyright © <?= date("Y");?> Teknik Informatika UM
    </div>
</body>
</html>