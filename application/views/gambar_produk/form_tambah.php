 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h4 class="mb-0 text-gray-800">Gambar Properti : <?= $produk->nama ?></h4>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Forms</li>
         </ol>
     </div>


     <!-- Form Basic -->
     <div class="card mb-3">
         <div class="card-body">
             <?php
                echo validation_errors('' . '')
                ?>
             <?php if (isset($error_upload)) {
                    echo '' . $error_upload . '';
                } ?>
             <form action="<?php base_url('galeri/add/') ?>" method="post" enctype="multipart/form-data">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="form-group">
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" id="gambar" name="gambar[]" onchange="prevBeritaGambar()" multiple>
                                 <label class="custom-file-label" for="customFile">Pilih gambar</label>
                             </div>
                         </div>
                     </div>
                     <input type="hidden" name="id" value="<?= $produk->id ?>">
                     <div class="col-lg-6">
                         <div class="form-group">
                             <img src="./gambar/default.png" class="img-thumbnail img-preview" width="200" />
                         </div>
                     </div>
                 </div>
                 <button type="submit" class="btn btn-primary" value="upload">Tambah</button>
                 <a href="<?php echo site_url('galeri/') ?>" class="btn btn-xs btn-danger">Back</a>
             </form>
         </div>
     </div>





     <!--Row-->

 </div>
 <!---Container Fluid-->