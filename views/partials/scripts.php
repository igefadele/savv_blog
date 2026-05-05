<!-- Bootstrap JS -->
<script src="<?= asset("/js/bootstrap-5.3.3.min.js") ?>"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->


<script src="<?= asset("/js/main.js") ?>"></script>

<script>
document.getElementById('yr').textContent = new Date().getFullYear();
</script>

<?php if (isset($extraJS)) echo $extraJS; ?>

<?php savv_scripts(); ?>
