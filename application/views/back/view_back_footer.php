
</div>

</div>
<footer class="footer mt-auto py-3 bg-dark">
    <div class="container text-center">
        <span class="text-white">Panel de Control - <?php echo date('d/m/Y') ?></span>
    </div>
</footer>
</main>

<!-- General JS jQuery, Popper y Bootstrap -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/datatable/pdfmake.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/datatable/vfs_fonts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/datatable/datatables.min.js'); ?>"></script>
<!-- Otros JS -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.loadingModal.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js?v=1'); ?>"></script>
<!-- Custom JS -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-custom.js?v=1.1'); ?>"></script>

<script type="text/javascript">
    $(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('hidden');
            <?php if (!$this->agent->is_mobile()) { ?>
                $('#content').toggleClass('col-md-12');
            <?php } ?>
        });
        
         $('#table').DataTable();
    });
</script>
</body>
</html>