<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Properti</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Properti</li>
        </ol>
    </div>

    <div class="row">
        <!-- General Colors-->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="<?php echo base_url('./gambar/produk/' . $produk->gambar) ?>" class="img-thumbnail img-preview" style="margin: 5px;" width="300">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h2><strong>Rp. <?php echo $produk->harga ?></strong></h2>
                    <hr>
                    <ul class="list" style="padding-left: 0;">
                        <li class="d-flex justify-content-between">
                            <strong>Nama:</strong>
                            <span><?php echo $produk->nama ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>Alamat</strong>
                            <span><?php echo $produk->alamat ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>Kamar Mandi</strong>
                            <span><?php echo $produk->kamar_mandi ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>Kamar Tidur</strong>
                            <span><?php echo $produk->kamar_tidur ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>Garasi</strong>
                            <span><?php echo $produk->garasi ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>Kota</strong>
                            <span><?php echo $produk->kota ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>Sertifikat</strong>
                            <span><?php echo $produk->sertifikat ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>LT/LB</strong>
                            <span><?php echo $produk->luas ?>m<sup>2</sup> X <?php echo $produk->luas_bangunan ?>m<sup>2</sup></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>dimensi</strong>
                            <span><?php echo $produk->dimensi ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>orientasi</strong>
                            <span><?php echo $produk->orientasi ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>listrik</strong>
                            <span><?php echo $produk->listrik ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong>air</strong>
                            <span><?php echo $produk->air ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Background Gradient Utilities -->
        <div class="col-lg-8">
            <div class="card sm mb-4">
                <div class="card-body">
                    <h1><strong><?php echo $produk->nama ?></strong></h1>
                    <hr>
                    <p><?php echo $produk->deskripsi ?></p>

                </div>
            </div>
        </div>
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="<?php echo site_url('produk/') ?>" class="btn btn-xs btn-danger">Back</a>
        </div>
    </div>