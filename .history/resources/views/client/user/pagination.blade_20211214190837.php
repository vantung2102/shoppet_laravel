<div class="product__pagination row">
    <div class="col l-12 m-12 c-12">
      <ul class="product__pagination-list center">
        <li class="product__pagination-item">
          <a href="#" class="product__pagination-link">
            <i class="fas fa-angle-left"></i>
          </a>
        </li>

        <?php for($i = 1; $i <= $data['total_pages']; $i++):?>

          <li class="product__pagination-item pagination-item-active">
            <a href="<?= base_url("product/product&page=$i") ?>" class="product__pagination-link"><?= $i ?></a>
          </li>
        
        <?php endfor; ?>

        <li class="product__pagination-item">
          <a href="#" class="product__pagination-link">
            <i class="fas fa-angle-double-right"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>