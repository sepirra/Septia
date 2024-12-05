<?php
$mahasiswa = [
    ["sera", "2341564251", "teknik informatika", "redsiren.com"],
    ["oliver", "2341564251", "tenik sepeda motor", "enno813.com"],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar mahasiswa</title>
</head>
</html>
<h1>daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama :<?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li> Email : <?= $mhs[3]; ?></li>
    
</ul>
<?php endforeach; ?>