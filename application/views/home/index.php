
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Layanan Kami</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row" align="center">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <h2><b>Sewa</b> </h2>
                  <div class="card-body-c">
                <p class="content-c">
                  Properti Rumahnya
                </p>
              </div>
              <div class="card-footer-c">
                <a href="sewa" class="link-c link-icon">tekan untuk sewa rumah
                </a>
              </div>
                </div>
                </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <h2><b>Jual</b></h2>
                  <div class="card-body-c">
                <p class="content-c">
                  Properti Rumahnya
                </p>
              </div>
              <div class="card-footer-c">
                <a href="dijual" class="link-c link-icon">tekan untuk beli rumah
                </a>
              </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Properti Terbaru</h2>
              </div>
            </div>
          </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
        <?php foreach ($produk as $produks) : ?>
          <div class="carousel-item-b">
            <div class="card-box-a card-shadow" >
              <div class="img-box-a"  > 
              <img src="<?php echo base_url('gambar/produk/' . $produks->gambar) ?>" alt="" class="img-a img-fluid"  style="height : 300px" />
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
                      <span class="price-a"><?php echo $produks->jenis ?> | Rp. <?php echo number_format($produks->harga,0)?></span>
                    </div>
                    <a href="#" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Luas</h4>
                        <span><?php echo $produks->luas?>
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Tidur</h4>
                        <span> <center><?php echo $produks->kamar_tidur ?></center></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Mandi</h4>
                        <span><center><?php echo $produks->kamar_mandi ?></center></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garasi</h4>
                        <span><center> <?php echo $produks->garasi ?></center></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      
      <br>
      <br>
      <div class="container">
        <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Properti Dijual</h2>
              </div>
              <div class="title-link">
              <a href="<?php echo site_url('property')?>">Semua Disewa
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
        </div>
        <div class="row">
          <?php foreach ($dijual as $produks) : ?>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
              <img src="<?php echo base_url('gambar/produk/' . $produks->gambar) ?>" alt="" class="img-a img-fluid"  style="height : 300px; width:350px"  />

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
                      <span class="price-a">Di Jual | Rp. <?php echo number_format($produks->harga,0) ?></span>
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
      </div>

      
      <br>
      <br>
      <div class="container">
        <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Properti Disewa</h2>
              </div>
              <div class="title-link">
                <a href="<?php echo site_url('disewakan')?>">Semua Disewa
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
        </div>
        <div class="row">
          <?php foreach ($disewa as $produks) : ?>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
              <img src="<?php echo base_url('gambar/produk/' . $produks->gambar) ?>" alt="" class="img-a img-fluid"  style="height : 300px; width:350px"  />

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
                      <span class="price-a">Di Sewa | Rp. <?php echo number_format($produks->harga,0) ?></span>
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
      </div>

    </section><!-- End Latest Properties Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimoni Pembeli</h2>
              </div>
            </div>
          </div>
        </div>
        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <?php foreach ($testimoni as $testimonis) : ?>
          <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="gambar/web/<?php echo $testimonis->gambar ?>" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                    <span class="ion-ios-quote"></span>
                  </div>
                  <div class="testimonials-content">
                      <br><br>
                    <?php echo $testimonis->keterangan ?>
                  </div>
                  <div class="testimonial-author-box">
                    <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                    <h5 class="testimonial-author"><?php echo $testimonis->nama ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

