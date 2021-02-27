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
             <form action="<?php base_url('tim/add') ?>" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                     <div class="row">
                         <div class="col-lg-4">
                             <div class="form-group">
                                 <label for="exampleInputEmail1">Nama</label>
                                 <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" name="nama" aria-describedby="emailHelp" placeholder="Masukan Nama">
                                 <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                                 email with anyone else.</small> -->
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Telepon</label>
                                 <input type="number" class="form-control <?php echo form_error('telepon') ? 'is-invalid' : '' ?>" name="telepon" placeholder="08211...">
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Email</label>
                                 <input type="email" class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>" name="email" placeholder="@example.com">
                             </div>
                         </div>
                     </div>
                     <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Deksripsi</label>
                         <textarea class="form-control <?php echo form_error('dekripsi') ? 'is-invalid' : '' ?>" name="deskripsi" rows="3"></textarea>
                     </div>

                     <div class="form-group">
                         <img src="../gambar/default.png" class="img-thumbnail img-preview" style="margin: 5px;" width="100" />
                         <div class="custom-file">
                             <input type="file" class="custom-file-input  <?php echo form_error('foto') ? 'is-invalid' : '' ?>" id="gambar" name="foto" onchange="prevBeritaGambar()">
                             <label class="custom-file-label" for="customFile">Pilih gambar</label>

                         </div>
                     </div>
                     <button type="submit" class="btn btn-primary" value="Save">Submit</button>
                     <a href="<?php echo site_url('tim/') ?>" class="btn btn-xs btn-danger">Back</a>
             </form>
         </div>
     </div>





     <!--Row-->

 </div>
 <!---Container Fluid-->