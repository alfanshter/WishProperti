<main id="main">

<!-- ======= Intro Single ======= -->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single"><?php echo $berita->judul ?></h1>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            <?php echo $berita->judul ?>

            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section><!-- End Intro Single-->

<!-- ======= Blog Single ======= -->
<section class="news-single nav-arrow-b">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <center>
        <div class="news-img-box">        
          <img src="<?php echo base_url('gambar/blog/' . $berita->gambar)?>" alt="" class="img-fluid">
        </div>
        </center>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <div class="post-information">
          <ul class="list-inline text-center color-a">
            <li class="list-inline-item mr-2">
              <strong>Author: </strong>
              <span class="color-text-a">Wishproperti</span>
            </li>
            <li class="list-inline-item">
              <strong>Date: </strong>
              <span class="color-text-a"><?php echo $berita->tanggal ?></span>
            </li>
          </ul>
        </div>
        <div class="post-content color-text-a">
        <?php echo $berita->isi ?>
        </div>
        <!-- <div class="post-footer">
          <div class="post-share">
            <span>Share: </span>
            <ul class="list-inline socials">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div> -->
      </div>
      <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
        <div class="title-box-d">
          <h3 class="title-d">Comments (4)</h3>
        </div>
        <div class="box-comments">
          <?php
              $id_berita =  $id_berita;
              $query = $this->db->query("SELECT * FROM tb_komentar WHERE komentar_status='0' AND komentar_content_id = '$id_berita'");
              foreach ($query->result() as $utama):
          ?>
          <ul class="list-comments">
            <li>
              <div class="comment-avatar">
                <img src="<?php echo base_url('gambar/komentar/default.png') ?>" alt="">
              </div>
              <div class="comment-details">
                <h4 class="comment-author"><?php echo $utama->komentar_nama ?></h4>
                <span><?php echo $utama->komentar_tanggal ?></span>
                <p class="comment-description">
                <?php echo $utama->komentar_isi ?>
                </p>
                <button  type="button" onclick="document.getElementById('<?php echo $utama->komentar_id?>"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Balas</button>
              </div>
            </li>

                            <?php
                    $id_berita = $id_berita;
                    $komentar_id=$utama->komentar_id;
                    $query = $this->db->query("SELECT * FROM tb_komentar WHERE komentar_status='$komentar_id' AND komentar_content_id = '$id_berita'");
                    foreach ($query->result() as $balasan):
                  ?>
                <li class="comment-children">
                  <div class="comment-avatar">
                    <img src="<?php echo base_url('gambar/komentar/default2.png') ?>" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author"><?php echo $balasan->komentar_nama ?></h4>
                    <span><?php echo $balasan->komentar_tanggal ?></span>
                    <p class="comment-description">
                      <?php echo $balasan->komentar_isi ?>
                    </p>
                    <button  type="button" onclick="document.getElementById('<?php echo $utama->komentar_id?>"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Balas</button>
                  </div>
                </li>
                <?php endforeach;?>
          </ul>
          
          <?php endforeach;?>
        </div>
        
        
        <div class="form-comments">
          <div class="title-box-d">
            <h3 class="title-d">Tinggalkan Komentar</h3>
          </div>
          <form class="form-a"  method="POST" action="<?php echo site_url('berita_user/kirim') ?>" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="inputName">Masukkan Nama</label>
                  <input type="hidden" value="<?php echo $id_berita;?>" name="id"></input>
                  <input type="hidden" value="<?php echo date(DATE_RFC822, time());?>" name="tanggal"></input>
                  <input type="text" class="form-control form-control-lg form-control-a"  name="nama" placeholder="nama" required ></input>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="inputEmail1">Masukkan Email</label>
                  <input type="email" class="form-control form-control-lg form-control-a" name="email" placeholder="Email *" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <label for="textMessage">Masukkan Pesan</label>
                  <textarea id="textMessage" class="form-control" placeholder="Comment *" name="isi" cols="45" rows="8" required></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-a" >Kirim Komentar</button>
              </div>
            </div>
          </form>
        </div>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Balas Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?php echo site_url('berita_user/balas') ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Masukkan Nama:</label>
                    <input type="hidden" value="<?php echo $id_berita;?>" name="id_berita"></input>
                    <input type="hidden" value="<?php echo $utama->komentar_id?>" name="komentar_id"></input>
                    <input type="hidden" value="<?php echo date(DATE_RFC822, time());?>" name="tanggal"></input>

                    <input type="text" class="form-control" name="nama" >
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Pesan:</label>
                    <textarea class="form-control" name="isi"></textarea>
                  </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send message</button>
              </div>

                </form>
              </div>
            </div>
          </div>
        </div>

</div>
      </div>
    </div>
  </div>
</section><!-- End Blog Single-->

</main><!-- End #main -->
