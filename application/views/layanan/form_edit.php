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
             <form action="<?php base_url("layanan/edit") ?>" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="id" id="id" value="<?php echo $layanan->id ?>">
                 <div class="form-group">
                     <label for="exampleInputEmail1">Judul</label>
                     <input type="text" class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?>" name="judul" aria-describedby="emailHelp" value="<?php echo $layanan->judul ?>">
                 </div>
                 <div class="invalid-feedback">
                     <?php echo form_error('judul') ?>
                 </div>
                 <div class="form-group">
                     <img src="<?php echo base_url('./gambar/layanan/' . $layanan->logo) ?>" class="img-thumbnail img-preview" style="margin: 5px;" width="100">
                     <input type="hidden" name="old_image" value="<?php echo $layanan->logo ?>" />
                     <div class="custom-file">
                         <input type="file" class="custom-file-input  <?php echo form_error('logo') ? 'is-invalid' : '' ?>" id="preview_gambar" name="logo" value="<?php echo $layanan->logo ?>" onchange="prevBeritaGambar()">
                         <label class="custom-file-label" for="customFile">Pilih gambar</label>
                     </div>
                 </div>
                 <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Deksripsi</label>
                     <textarea class="ckeditor <?php echo form_error('dekripsi') ? 'is-invalid' : '' ?>" name="deskripsi" rows="3"><?php echo $layanan->deskripsi ?></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                 <a href="<?php echo site_url('layanan/') ?>" class="btn btn-xs btn-danger">Back</a>

             </form>
         </div>
     </div>





     <!--Row-->

 </div>
 <!---Container Fluid-->