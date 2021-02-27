<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
        <div class=" sidebar-brand-icon">
            <img src="<?= base_url('assets/'); ?>img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Ruang Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Data Properti</span>
        </a>
        <div id="collapseBootstrap" class="collapse show" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('produk'); ?>">Properti</a>
                <a class=" collapse-item" href="<?= base_url('galeri'); ?>">Gambar Properti</a>
            </div>
        </div>
    </li>
    <!--<li class=" nav-item">-->
    <!--    <a class="nav-link" href="<?= base_url('banner'); ?>">-->
    <!--        <i class="fab fa-fw fa-wpforms"></i>-->
    <!--        <span>Banner Depan</span>-->

    <!--    </a>-->
    <!--</li>-->
    <!--<li class=" nav-item">-->
    <!--    <a class="nav-link" href="<?= base_url('banner'); ?>">-->
    <!--        <i class="fab fa-fw fa-wpforms"></i>-->
    <!--        <span>Banner</span>-->

    <!--    </a>-->
    <!--</li>-->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('layanan'); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Layanan</span>

        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('tim'); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Tim</span>

        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('testimoni'); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Testimoni</span>

        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('blog'); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Berita</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->