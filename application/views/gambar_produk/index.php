<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h3 class="m-0 font-weight-bold text-primary">Daftar Gambar Properti</h3>
                    </div>
                </div>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <th>Nama Properti</th>
                            <th>Gambar Utama</th>
                            <th>Jumlah gambar</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($galeri as $key => $value) : ?>
                                <tr>
                                    <td> <?php echo $value->nama ?></td>
                                    <td> <img src="<?php echo base_url('gambar/produk/' . $value->gambar) ?>" width="64" /></td>
                                    <td><span class="badge bg-info">
                                            <h4><?php echo $value->total_gambar ?></h4>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('galeri/add/' . $value->id) ?>" class="btn btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fas fa-plus"></i>Tambah Gambar</a><br>
                                        <a href="<?php echo site_url('galeri/detail/' . $value->id) ?>" class="btn btn-sm btn-info"></i>Detail</a>

                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>