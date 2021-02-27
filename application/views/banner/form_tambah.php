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
             <form action="<?php base_url('banner/add') ?>" method="post" enctype="multipart/form-data">
                 <div class="row">
                     <div class="col-lg-3">
                         <div class="form-group">
                             <img src="../gambar/default.png" class="img-thumbnail img-preview" style="margin : 5px;" width="118" />
                             <div class="custom-file">
                                 <input type="file" class="custom-file-input  <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" id="gambar" name="gambar" onchange="prevBeritaGambar()">
                                 <label class="custom-file-label" for="customFile">Pilih gambar</label>

                             </div>
                         </div>
                     </div>
                     <div class="col-lg-9">
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1" class="form-label">Deksripsi</label>
                             <textarea class="form-control <?php echo form_error('dekripsi') ? 'is-invalid' : '' ?>" name="deskripsi" rows="5"></textarea>
                         </div>
                     </div>
                 </div>
                 <button type="submit" class="btn btn-primary" value="Save">Submit</button>
             </form>
         </div>
     </div>





     <!--Row-->

 </div>
 <!---Container Fluid-->