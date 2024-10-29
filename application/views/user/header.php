<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMEANSAWI</title>
    <link rel="shortcut icon" href=" <?php echo base_url('template/assets/img/smkn 1 slawi.png');?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href=" <?php echo base_url('template/assets/css/style.css'); ?>">
    <link rel="stylesheet" href=" <?php echo base_url('template/assets/css/eskul.css'); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

</head>

<body>
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <!-- Navbar brand (logo and text) -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="<?php echo base_url('template/assets/img/smkn 1 slawi.png');?>" alt="School Logo" style="height: 50px;">
                    <div class="brand-text ms-2">
                        <span>SMEAN<span class="font-weight-bold">SAWI</span></span>
                        <div class="brand-subtext">Prestasi adalah Tradisi</div>
                    </div>
                </a>
        
                <!-- Toggler for mobile view -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Menu Items -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Profil Sekolah Dropdown -->
                        <li class="nav-item">
                            <div class="tombol">
                            <a class="nav-link smooth-menu" href="<?php echo base_url('user'); ?>" style="color: black;">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="tombol">
                            <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                Profil Sekolah
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profilDropdown">
    <li class="dropdown">
    <a class="dropdown-item" href="<?php echo base_url('kepsekdetail'); ?>">Sambutan Kepala Sekolah</a>
</li>

                                <li><a class="dropdown-item" href="<?= base_url('sejarah-user'); ?>">Sejarah</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('visimisi'); ?>">Visi & Misi</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('gurustaff/detail/'); ?>">Guru dan Staff</a></li>
                            </ul>
                        </li>
                      

                        <!-- Berita Dropdown -->
                        <li class="nav-item dropdown">
                            <div class="tombol">
                            <a class="nav-link dropdown-toggle" href="#" id="beritaDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                Berita
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="beritaDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url('berita/detail_kedua'); ?>">Berita Terbaru</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('info_ppdb'); ?>">Info Sekolah</a></li>                            </ul>
                        </li>
        
                        <!-- Kompetensi Keahlian Dropdown -->
                        <li class="nav-item dropdown">
                            <div class="tombol">
                            <a class="nav-link "  href="<?= base_url('saranaprasarana/view'); ?>" id="kompetensiDropdown" role="button"
                               style="color: black;">
                              SaranaPrasarana
                            </a>
                            
                        </li>

                     
                               
                        <!-- Other Menu Items -->
                        <li class="nav-item">
                            <div class="tombol">
                            <a class="nav-link smooth-menu" href="<?= base_url('galeri/view'); ?>" style="color: black;">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <div class="tombol">
                            <a class="nav-link smooth-menu" href="<?= base_url('visimisi'); ?>" style="color: black;">Visi&Misi</a>
                        </li>
                        <li class="nav-item">
                            <div class="tombol">
                            <a class="nav-link smooth-menu" href="<?= base_url('infoppdb/view'); ?>" style="color: black;">Info PPDB</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- End Navigation -->
    </header>
    <!-- home -