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
             <a href="<?php echo site_url('galeri/') ?>" class="btn btn-xs btn-warning">Back</a>
             <div class="row text-center">
                 <?php foreach ($galeri as $key => $value) : ?>
                     <div class="col-lg-4">
                         <div class="card-body">
                             <div class="form-group">
                                 <img src="<?php echo base_url('gambar/produk/isi/' . $value->gambar) ?>" height="200px" width="300px" />
                             </div>
                             <form action="<?php echo base_url('galeri/delete/' . $value->id_galeri) ?>" method="post">
                                 <input type="hidden" name="_method" value="DELETE">
                                 <button type="submit" onclick="return confirm ('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</button>

                             </form>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>




     <!--Row-->

 </div>
 <!---Container Fluid-->