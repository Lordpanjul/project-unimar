<?php
//cek button    
    if ($_POST['Submit'] == "Submit") {
    $nik             = $_POST['nik'];
    $nama            = $_POST['nama'];
    $jurusan         = $_POST['jurusan'];
    $alamat          = $_POST['alamat'];
    $telepon         = $_POST['telepon'];
    //validasi data data kosong
    if (empty($_POST['nik'])||empty($_POST['nama'])||empty($_POST['alamat'])||empty($_POST['telepon'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='pendaftaran.php';
            </script>
        <?php
    }
    else {
    include "connection.php";
		
    //Masukan data ke Table
    $input    ="insert into mahasiswa (nik,nama,jurusan,alamat,telepon) values ('$nik','$nama','$jurusan','$alamat','$telepon')";
    $query_input =mysqli_query($kon,$input);
    if ($query_input) {
    //Jika Sukses
    ?>
        <script language="JavaScript">
        alert('Input Data Mahasiswa Berhasil');
        document.location='pendaftaran.php';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
    }
//Tutup koneksi engine MySQL
    mysql_close($Open);
    }
}
?>