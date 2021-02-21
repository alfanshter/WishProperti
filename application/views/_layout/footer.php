</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; 2020 - <?= SITE_NAME; ?>
            </span>
        </div>
    </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/chart-bar-demo.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<!-- Page level custom scripts -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
</script>
<script>
    function prevBeritaGambar() {
        const gambar = document.querySelector('#gambar');
        // const gambarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        // gambarLabel.textContent = gambar.files[0].name;

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

</body>

</html>