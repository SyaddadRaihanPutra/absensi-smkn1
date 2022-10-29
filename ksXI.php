<?php
include 'header.php';
?>

<main class="bg-light">
    <div class="p-2">
        <!-- start: Navbar -->
        <nav class="px-3 py-2 bg-white rounded shadow">
            <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
            <span class="fw-bold mb-0 me-auto">DATA SISWA KELAS XI</span>
            <div class="dropdown">
                <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 d-none d-sm-block">Kepala Sekolah</span>
                    <img class="navbar-profile-image" src="assets/img/blank-profile.jpg" alt="Image">
                </div>
            </div>
        </nav>
        <div>
            <div class="d-inline-flex p-3 mt-3 mb-3" style="width: 350px; float: right;">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!-- end: Navbar -->
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr class="text-bg-warning">
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">202121051</td>
                    <td>Fauzi Ardiansyah</td>
                    <td>XI</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td scope="row">202121051</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>XI</td>
                    <td>RPL</td>
                </tr>
                <tr>
                    <td scope="row">202121051</td>
                    <td>Lorem, ipsum dolor.</td>
                    <td>XI</td>
                    <td>RPL</td>
                </tr>
            </tbody>
        </table>
        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</main>

<?php
include 'footer.php';
?>