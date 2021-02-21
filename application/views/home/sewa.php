
  <main id="main">

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Sewa Rumah</h1>
          <span class="color-text-a">Daftar Properti</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Properti
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- ======= Property Grid ======= -->
<section class="property-grid grid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="grid-option">
          <form>
            <select class="custom-select">
              <option selected>Tampilkan semua</option>
              <option value="1">terbaru</option>
              <option value="2">terlama</option>
            </select>
          </form>
        </div>
      </div>
      <?php foreach ($produk as $produks) : ?>
      <div class="col-md-4">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="gambar/produk/<?php echo $produks->gambar ?>" alt="" class="img-a img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#"><?php echo $produks->nama ?>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a"><?php echo $produks->status ?> | Rp. <?php echo $produks->harga ?></span>
                </div>
                <a href="property-single.php" class="link-a">Klik untuk melihat lebih lanjut
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Luas</h4>
                    <span><?php echo $produks->luas ?>
                      <sup>2</sup>
                    </span>
                  </li>
                  <li>
                    <h4 class="card-info-title">kamar tidur</h4>
                    <span><center><?php echo $produks->kamar_tidur ?></center></span>
                  </li>
                  <li>
                    <h4 class="card-info-title">kamar mandi</h4>
                    <span><center><?php echo $produks->kamar_mandi ?></center></span>
                  </li>
                  <li>
                    <h4 class="card-info-title">garasi</h4>
                    <span><center><?php echo $produks->garasi ?></center></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
    <div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <span class="ion-ios-arrow-back"></span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item next">
              <a class="page-link" href="#">
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Property Grid Single-->

</main><!-- End #main -->
