<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'cutipegawai';
$koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if( $koneksi->connect_error )
{
 die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
}
?>
