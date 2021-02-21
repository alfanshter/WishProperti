<!-- ======= Intro Section ======= -->

<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
    <?php foreach ($banner as $bannerku => $value) : ?>

      <div class="carousel-item-a intro-item bg-image" style="background-image: url(gambar/produk/<?php echo $value->gambar ?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">alamat : <?php echo $value->alamat ?>
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b"><td><?php echo $value->nama ?></td></span> 
                      <br><?php echo $value->kota ?>
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="<?php echo site_url('home/detail/' . $value->id) ?>"><span class="price-a"><?php echo $value->jenis ?> | Rp. <?php echo number_format( $value->harga,0) ?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div><!-- End Intro Section -->
