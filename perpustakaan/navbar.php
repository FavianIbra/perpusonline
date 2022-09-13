<?php 
session_start();
if($_SESSION['status_login']!=true){
    header('location: login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title></title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="mainNav" style="background: linear-gradient(4deg, rgba(0,0,139), rgba(176,224,230));">
                                        
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Perpustakaan</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ms-5" >
            <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="login.php">Login</a>
            </li>
              <a class="nav-link" aria-current="page" href="home.php">Home</a>
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
          </ul>
        </div>
      </div>
    </nav><br><br><br>