<?php if (isset($_SESSION['success_message'])) { ?>
  <div id="toastSuccess"
    class="toast show align-items-center text-bg-success bg-success border-0 z-1 position-absolute bottom-0 end-0 mb-2 me-2"
    role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        <?php echo $_SESSION['success_message']; ?>
      </div>
      <button id="closeToastBtn" type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
        aria-label="Close"></button>
    </div>
  </div>
<?php } ?>

<?php
unset($_SESSION['success_message']);
echo "<script>";
echo "setTimeout(() => {";
echo "let toastSuccess = document.getElementById('toastSuccess');";
echo "  toastSuccess?.remove();";
echo "}, 2500);";
echo "</script>";
?>
<?php
dep($_SESSION);
?>
<script src="<?php echo APP_URL; ?>/app/views/js/lib/bootstrap.bundle.min.js"></script>
<script src="<?php echo APP_URL; ?>/app/views/js/lib/axios.min.js"></script>
<script src="<?php echo APP_URL; ?>/app/views/js/main.js"></script>
<script src="<?php echo APP_URL; ?>/app/views/js/<?php echo $jsfilename; ?>.js"></script>