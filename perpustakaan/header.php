<?php 
session_start();
if($_SESSION['status_login']!=true){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="mainNav" style="background: linear-gradient(4deg, rgba(0,0,139), rgba(176,224,230));">
                                        
      <div class="container-fluid">
        <a class="navbar-brand fs-3" href="tampil_siswa.php">Perpustakaan</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ms-5" >
            <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
              <a class="nav-link" aria-current="page" href="buku.php">Buku</a>
            </li>
            </li>
              <a class="nav-link" aria-current="page" href="histori_peminjaman.php">Transaksi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Daftar
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="tampil_siswa.php">Data Siswa</a></li>
                <li><a class="dropdown-item" href="tampil_kelas.php">Data Kelas</a></li>
              </ul>
            </li>
            </li>
              <a class="nav-link" aria-current="page" href="logout.php">Log Out</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container bg-light rounded" style="margin-top:10px">