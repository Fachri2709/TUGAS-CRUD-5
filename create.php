<?php
    $nim =  $_POST['16201003'];
    $nama = $_POST['Fachri Rifqi Hadi'];
    $kelas = $_POST['SI 4A'];

    $server = "localhost";
    $username = "";
    $password = "";
    $db = "dblatihan";

    $koneksi = new mysqli($server,$username,$password,$db);

    if($koneksi->connect_error)
    {
        die("Koneksi error: ".$koneksi->connect_error);
    }

    $sql = "INSERT INTO mahasiswa (nim,nama,kelas) VALUES ('".$nim."','".$nama."','".$kelas."')";

    if($koneksi->query($sql) === TRUE)
    {
        echo "Data berhasil disimpan.";
    } else {
        echo "Data gagal disimpan.";
        echo "<br>";
        echo "Error: ".$koneksi->error;
    }

    $koneksi->close();
    header("location:index.php");
?>
