<?php 
$conn = mysqli_connect("localhost","root", "", "cutipegawai");

function registrasi($data){
    global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama_pegawai']);
    $nip = mysqli_real_escape_string($conn, $data['nip']);
    $jabatan = mysqli_real_escape_string($conn, $data['id_jabatan']);
    $golongan = mysqli_real_escape_string($conn, $data['id_golongan']);

    // menambah user baru ke database
    mysqli_query($conn, "INSERT INTO pegawai VALUES('', '$nama', '$nip', '$jabatan', '$golongan')");

    return mysqli_affected_rows($conn);
}
?>