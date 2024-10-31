<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <div class="row">
                <h2>Selamat Datang, <?php echo $this->session->userdata('username'); ?></h2>
                <div class="container mt-5">
                    <div class="row mt-4">
                        <!-- Total Berita -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Berita</h5>
                                    <p><?= $total_berita; ?></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Ekstrakurikuler</h5>
                                    <p><?= $total_ekstrakurikuler; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Galeri</h5>
                                    <p><?= $total_galeri; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Guru Staff</h5>
                                    <p><?= $total_gurustaff; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Info PPDB</h5>
                                    <p><?= $total_info_ppdb; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Jurusan</h5>
                                    <p><?= $total_jurusan; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Kepala Sekolah</h5>
                                    <p><?= $total_kepalasekolah; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Kontak</h5>
                                    <p><?= $total_kontak; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Kritik Saran</h5>
                                    <p><?= $total_kritiksaran; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Pengumuman</h5>
                                    <p><?= $total_pengumuman; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Prestasi</h5>
                                    <p><?= $total_prestasi; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Sejarah</h5>
                                    <p><?= $total_sejarah; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Stats</h5>
                                    <p><?= $total_stats; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Visi Misi</h5>
                                    <p><?= $total_visi_misi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>