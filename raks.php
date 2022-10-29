<?php
include 'header.php';
?>

<main>
    <div class="p-2">
        <!-- start: Navbar -->
        <nav class="px-3 py-2 bg-white rounded shadow">
            <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
            <span class="fw-bold mb-0 me-auto">REKAP ABSEN</span>
            <div class="dropdown">
                <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 d-none d-sm-block">Kepala Sekolah</span>
                    <img class="navbar-profile-image" src="assets/img/blank-profile.jpg" alt="Image">
                </div>
            </div>
        </nav>
        <div class="card mt-5">
            <div class="card-body text-center">
                <h4>REKAP ABSEN SISWA SMKN 1 JAKARTA</h4>
            </div>
            <div class="row m-3">
                <div class="col-sm-6 mt-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: '2';">DAY</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: '2';">WEEK</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: '2';">MONTH</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: '2';">SEMESTER</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">REKAP ABSEN SMKN 1 JAKARTA HARI INI</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>HADIR</h5>
                            <h5>SAKIT</h5>
                            <h5>IZIN</h5>
                            <h5>ALPHA</h5>
                            <h5>TERLAMBAT</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Ekspor</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>
    </div>

</main>


<?php
include 'footer.php';
?>