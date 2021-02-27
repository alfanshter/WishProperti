 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Forms</li>
         </ol>
     </div>
     <?php if ($this->session->flashdata('success')) : ?>
         <div class="alert alert-success" role="alert">
             <?php echo $this->session->flashdata('success'); ?>
         </div>
     <?php endif; ?>

     <!-- Form Basic -->
     <div class="card mb-3">
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
         </div>
         <div class="card-body">
             <form action="<?php base_url("produk/edit") ?>" method="post" enctype="multipart/form-data">
                 <div class="row">
                     <div class="col-lg-6">
                         <input type="hidden" name="id" id="id" value="<?php echo $produk->id ?>">
                         <input type="hidden" name="id_banner" id="id" value="<?php echo $produk->id_banner ?>">
                         <input type="hidden" name="id_status" id="id" value="<?php echo $produk->id_status ?>">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Nama Properti</label>
                             <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" name="nama" aria-describedby="emailHelp" value="<?php echo $produk->nama ?>">
                         </div>
                         <div class="invalid-feedback">
                             <?php echo form_error('nama') ?>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Harga</label>
                             <input type="number" class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" name="harga" value="<?php echo $produk->harga ?>">
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-lg-3">
                         <div class="form-group">
                             <label for="">Jenis Properti</label>
                             <select name="id_jenis" id="id_jenis" class="form-control">
                                 <?php foreach ($jenis as $k) {
                                        echo "<option value='$k->id_jenis'";
                                        echo $produk->id_jenis == $k->id_jenis ? 'selected' : '';
                                        echo ">$k->jenis</option>";
                                    } ?>
                             </select>
                         </div>
                     </div>
                     <div class="col-lg-3">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Luas</label>
                             <input type="text" class="form-control <?php echo form_error('luas') ? 'is-invalid' : '' ?>" name="luas" placeholder="100 M" value="<?php echo $produk->luas ?>">
                         </div>
                     </div>
                     <div class="col-lg-2">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Jumlah Kamar Mandi</label>
                             <input type="text" class="form-control <?php echo form_error('kamar_mandi') ? 'is-invalid' : '' ?>" name="kamar_mandi" aria-describedby="emailHelp" placeholder="0" value="<?php echo $produk->kamar_mandi ?>">
                             <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                                 email with anyone else.</small> -->
                         </div>
                     </div>
                     <div class="col-lg-2">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Jumlah Kamar Tidur</label>
                             <input type="text" class="form-control <?php echo form_error('kamar_tidur') ? 'is-invalid' : '' ?>" name="kamar_tidur" placeholder="0" value="<?php echo $produk->kamar_tidur ?>">
                         </div>
                     </div>
                     <div class="col-lg-2">
                         <div class="form-group">
                             <label for="exampleInputPassword1">Jumlah Garasi</label>
                             <input type="text" class="form-control <?php echo form_error('garasi') ? 'is-invalid' : '' ?>" name="garasi" placeholder="0" value="<?php echo $produk->garasi ?>">
                         </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="exampleInputPassword1">Alamat</label>
                     <input type="text" class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>" name="alamat" value="<?php echo $produk->alamat ?>">
                 </div>

                 <div class="form-group">
                     <label for="exampleInputPassword1">Kota</label>
                     <select class="form-control <?php echo form_error('kota') ? 'is-invalid' : '' ?>" name="kota">
                         <option>Pasuruan</option>
                         <option>Sidoarjo</option>
                         <option>Surabaya</option>
                         <option>Malang</option>
                         <option>Gresik</option>
                         <option>Lamongan</option>
                         <option>Tuban</option>
                         <option>Mojokerto</option>
                     </select>
                 </div>

                 <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Deksripsi</label>
                     <textarea class="ckeditor <?php echo form_error('dekripsi') ? 'is-invalid' : '' ?>" name="deskripsi" rows="3"><?php echo $produk->deskripsi ?></textarea>
                 </div>

                 <div class="form-group">
                     <img src="<?php echo base_url('./gambar/produk/' . $produk->gambar) ?>" class="img-thumbnail img-preview" style="margin: 5px;" width="100">
                     <input type="hidden" name="old_image" value="<?php echo $produk->gambar ?>" />
                     <div class="custom-file">
                         <input type="file" class="custom-file-input  <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" id="preview_gambar" name="gambar" value="<?php echo $produk->gambar ?>" onchange="prevBeritaGambar()">
                         <label class="custom-file-label" for="customFile">Pilih gambar</label>
                     </div>
                 </div>
                 <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                 <a href="<?php echo site_url('produk/') ?>" class="btn btn-xs btn-danger">Back</a>

             </form>
         </div>
     </div>





     <!--Row-->

 </div>
 <!---Container Fluid-->