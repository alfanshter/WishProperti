
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?php echo $produk->nama ?></h1>
              <span class="color-text-a"><?php echo $produk->alamat ?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="property-grid.php">Properti</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  304 Blaster Up
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <?php foreach ($galeri as $key => $value) : ?>
              <div class="carousel-item-b" style="height : 600px">
                <img src="<?php echo base_url('gambar/produk/isi/' . $value->gambar) ?>" alt="">
              </div>
              <?php endforeach; ?>
            </div>
            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="ion-money">Rp. </span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c"><?php echo number_format( $produk->harga ,0)?></h5>
                    </div>
                  </div>
                </div>
                
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12 ">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Properti ID:</strong>
                        <span><?php echo $produk->id ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Lokasi:</strong>
                        <span><?php echo $produk->alamat ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Properti Tipe :</strong>
                        <span>Rumah</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span><?php echo $produk->id_status ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>LT/LB:</strong>
                        <span><?php echo $produk->luas ?>m<sup>2</sup> X <?php echo $produk->luas_bangunan ?>m<sup>2</sup></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Kamar Tidur:</strong>
                        <span><?php echo $produk->kamar_tidur ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Kamar Mandi:</strong>
                        <span><?php echo $produk->kamar_mandi ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Garasi:</strong>
                        <span><?php echo $produk->garasi ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Sertifikat:</strong>
                        <span><?php echo $produk->sertifikat ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Dimensi:</strong>
                        <span><?php echo $produk->dimensi ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Orientasi:</strong>
                        <span><?php echo $produk->orientasi ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Listrik:</strong>
                        <span><?php echo $produk->listrik ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Air:</strong>
                        <span><?php echo $produk->air ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Deskripsi Properti</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                  <?php echo $produk->deskripsi ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Ubication</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              </div>
              <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                <img src="assets/img/plan2.jpg" alt="" class="img-fluid">
              </div>
              <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                  <div id="show_maps"  style="width:100%;height:100%;"></div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

 