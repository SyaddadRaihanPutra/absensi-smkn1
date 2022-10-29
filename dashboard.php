<?php
include 'header.php';
?>
<!-- start: Main -->
<main class="bg-light">
    <div class="p-2">
        <!-- start: Navbar -->
        <nav class="px-3 py-2 bg-white rounded shadow">
            <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
            <span class="fw-bold mb-0 me-auto">DASHBOARD</span>
            <div class="dropdown">
                <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 d-none d-sm-block">Kepala Sekolah</span>
                    <img class="navbar-profile-image" src="assets/img/blank-profile.jpg" alt="Image">
                </div>
            </div>
        </nav>
        <!-- end: Navbar -->
        <div class="row mt-3">
            <div class="col-sm-6 rounded mt-5">
                <div class="card text-center">
                    <div class="card-body shadow-lg p-4 rounded">
                        <div>
                            <i class="ri-group-line summary-icon bg-primary mb-2 position-absolute top-0 start-50 translate-middle"></i>
                        </div>
                        <h5 class="card-title mt-5">DATA SISWA</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-primary">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-5">
                <div class="card text-center">
                    <div class="card-body shadow-lg p-4 rounded">
                        <div>
                            <i class="ri-user-line summary-icon bg-primary mb-2 position-absolute top-0 start-50 translate-middle"></i>
                        </div>
                        <h5 class="card-title mt-5">DATA GURU</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-primary">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mt-5">
            <div>Akses Cepat</div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-primary">
                    <div>
                        <i class="ri-file-chart-line summary-icon bg-primary mb-2"></i>
                        <div>Ekspor Absensi Kelas-XII</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-indigo">
                    <div>
                        <i class="ri-file-chart-line summary-icon bg-indigo mb-2"></i>
                        <div>Ekspor Absensi Kelas-XI</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-success">
                    <div>
                        <i class="ri-file-chart-line summary-icon bg-success mb-2"></i>
                        <div>Ekspor Absensi Kelas-X</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" class="text-dark text-decoration-none bg-white p-3 rounded shadow-sm d-flex justify-content-between summary-danger">
                    <div>
                        <i class="ri-equalizer-line summary-icon bg-danger mb-2"></i>
                        <div>Pengaturan</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
</body>

<?php
include 'footer.php';
?>