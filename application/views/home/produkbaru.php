
  <main id="main">

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">WishProperti</h1>
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
      <?php 
      $no = $this->uri->segment('3') + 1;
      foreach ($produk as $produks) : ?>
      <div class="col-md-4"  >
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
          <img src="<?php echo base_url('gambar/produk/' . $produks->gambar) ?>" class="img-a img-fluid" style="height : 300px" >
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="<?php echo site_url('home/detail/' . $produks->id) ?>"><?php echo $produks->nama ?>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">Disewakan | Rp. <?php echo $produks->harga ?></span>
                </div>
                <a href="<?php echo site_url('home/detail/' . $produks->id) ?>" class="link-a">Klik untuk melihat lebih lanjut
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
    <?php 	echo $this->pagination->create_links('pagination-a', 'pagination justify-content-end');	?>
  </div>
</section><!-- End Property Grid Single-->

</main><!-- End #main -->
