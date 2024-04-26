<?php
if (isset($$paginate) && empty($$paginate['data']) && $$paginate['current_page'] > 1) {
  redirect($_SERVER['REDIRECT_URL']);
}
?>
<nav aria-label="Page navigation" class="d-flex justify-content-between align-items-baseline">
  <ul class="pagination m-0">
    <li class="page-item">
      <a href="<?php echo $$paginate['prev_page_url'] ?? ""; ?>" class="page-link">Anterior</a>
    </li>
    <?php for ($i = 1; $i <= $$paginate['total']; $i++) { ?>
      <li class="page-item">
        <a class="page-link <?php echo $$paginate['current_page'] == $i ? 'active' : '' ?>" href="<?php echo "?page=" . $i; ?>"><?php echo $i; ?></a>
      </li>
    <?php } ?>
    <li class="page-item">
      <a href="<?php echo $$paginate['next_page_url']; ?>" class="page-link">Siguiente</a>
    </li>
  </ul>
  <div>
    <p class="m-0">
      Mostrando
      <span class="fw-bold"><?php echo $$paginate['from']; ?></span>
      de
      <span class="fw-bold"><?php echo $$paginate['to']; ?></span>
      de
      <span class="fw-bold"><?php echo $$paginate['total']; ?></span>
      resultados
    </p>
  </div>
</nav>