
  <main id="main">

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Postingan Terbaru</h1>
          <span class="color-text-a">Hot news</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="home">Wishproperti</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            Berita_user
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- =======  Blog Grid ======= -->
<section class="news-grid grid">
  <div class="container">
    <div class="row">
        <?php 
        $no = $this->uri->segment('3') + 1;
        foreach ($berita as $beritas) : ?>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="<?php echo base_url('gambar/blog/' . $beritas->gambar) ?>" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <!-- <div class="card-category-b">
                <a href="#" class="category-b"><?php echo $beritas->judul ?></a>
              </div> -->
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="<?php echo site_url('berita_user/detail/').$beritas->id_berita ?>"><?php echo $beritas->judul ?>
                </h2>
              </div>
              <div class="card-date">
                <span class="date-b"><?php echo $beritas->tanggal ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach;?>
    </div>

    <?php 	echo $this->pagination->create_links('pagination-a', 'pagination justify-content-end');	?>

   
  </div>
</section><!-- End Blog Grid-->

</main><!-- End #main -->
