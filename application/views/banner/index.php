<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h3 class="m-0 font-weight-bold text-primary">Banner Depan</h3>
                        <a href="<?php echo site_url('banner/add') ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>Add Data</a>
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
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($banner as $bannerku) : ?>
                                <tr>
                                    <td><?php echo $bannerku->deskripsi ?></td>
                                    <td>
                                        <img src="<?php echo base_url('gambar/web/' . $bannerku->gambar) ?>" width="180" />
                                    </td>
                                    <td>
                                        <form action="<?php echo base_url('banner/delete/' . $bannerku->id) ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm ('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</button>
                                        </form>

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