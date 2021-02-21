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
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <img src="<?php echo base_url('./gambar/tim/' . $tim->foto) ?>" class="img-thumbnail img-preview" style="margin: 5px;" width="300">
                    <hr>
                    <ul class="list" style="padding-left: 0;">
                        <li class="d-flex justify-content-between">
                            <strong><?php echo $tim->nama ?></strong>
                            <span></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong><?php echo $tim->email ?></strong>
                        </li>
                        <li class="d-flex justify-content-between">
                            <strong><?php echo $tim->telepon ?></strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Background Gradient Utilities -->
        <div class="col-lg-8">
            <div class="card sm mb-4">
                <div class="card-body">
                    <p><?php echo $tim->deskripsi ?></p>

                </div>
            </div>
        </div>
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="<?php echo site_url('tim/') ?>" class="btn btn-xs btn-danger">Back</a>
        </div>
    </div>