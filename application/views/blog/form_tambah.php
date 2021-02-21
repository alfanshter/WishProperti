 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Insert Data</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Forms</li>
         </ol>
     </div>

     <!-- Form Basic -->
     <div class="card mb-3">
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
         </div>
         <div class="card-body">
             <form action="<?php base_url('blog/add') ?>" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                     <label for="exampleInputEmail1">Judul</label>
                     <input type="text" class="form-control <?php echo form_error('judul') ? 'is-invalid' : '' ?>" name="judul" aria-describedby="emailHelp" placeholder="Masukan Judul">
                     <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                                 email with anyone else.</small> -->
                 </div>

                 <div class="form-group">
                     <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
                     <textarea id="ckeditor" class="ckeditor" <?php echo form_error('isi') ? 'is-invalid' : '' ?>" name="isi"></textarea>
                 </div>

                 <div class="form-group">
                     <img src="../gambar/default.png" class="img-thumbnail img-preview" style="margin: 5px;" width="100" />
                     <div class="custom-file">
                         <input type="file" class="custom-file-input  <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" id="gambar" name="gambar" onchange="prevBeritaGambar()">
                         <label class="custom-file-label" for="customFile">Pilih gambar</label>

                     </div>

                 </div>
                 <button type="submit" class="btn btn-primary" value="Save">Submit</button>
                 <a href="<?php echo site_url('testimoni/') ?>" class="btn btn-xs btn-danger">Back</a>

             </form>
         </div>
     </div>





     <!--Row-->

 </div>
 <!---Container Fluid-->