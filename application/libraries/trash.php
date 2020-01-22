<span class="qty pl-4">
	<button type="button" class="addTocartBtn btn btn-outline-success btn-rounded  py-1" style="border-radius: 1.25rem;">Add To Cart</button>

	<span class="add-more-item" style="display: none;">
		<span class="minus bg-white text-danger border minus" onclick="minusItem(this);">-</span>
		<input type="number" class="count" name="qty" value="1" style="width: 5%; border:none;">
		<span class="plus bg-dark bg-white text-danger border plus" onclick="plusItem(this);">+</span>
	</span>
</span>


<!-- loop.php product code -->


<div class="product-list <?= $carousel == true ? 'item' : '' ?> <?= $classes ?> <?= $active ?>">
	<div class="inner">
		<div class="img-container">
			<a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>">
				<img src="<?= base_url('/attachments/shop_images/' . $article['image']) ?>" alt="<?= str_replace('"', "'", $article['title']) ?>">
			</a>
		</div>
		<h2>
			<a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>"><?= character_limiter($article['title'], 70) ?></a>
		</h2>
		<div class="price">
			<span class="underline"><?= lang('price') ?>: <span><?= $article['price'] != '' ? number_format($article['price'], 2) : 0 ?><?= CURRENCY ?></span></span>
			<?php
			if ($article['old_price'] != '' && $article['old_price'] != 0 && $article['price'] != '' && $article['price'] != 0) {
				$percent_friendly = number_format((($article['old_price'] - $article['price']) / $article['old_price']) * 100) . '%';
				?>
				<span class="price-down"><?= $percent_friendly ?></span>
			<?php } ?>
		</div>
		<div class="price-discount <?= $article['old_price'] == '' ? 'invisible' : '' ?>">
			<?= lang('old_price') ?>: <span><?= $article['old_price'] != '' ? number_format($article['old_price'], 2) . CURRENCY : '' ?></span>
		</div>
		<?php if (self::$CI->load->get_var('publicQuantity') == 1) { ?>
			<div class="quantity">
				<?= lang('in_stock') ?>: <span><?= $article['quantity'] ?></span>
			</div>
		<?php } if (self::$CI->load->get_var('moreInfoBtn') == 1) { ?>
			<a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>" class="info-btn gradient-color">
				<span class="text-to-bg"><?= lang('info_product_list') ?></span>
			</a>
		<?php } ?>
		<div class="add-to-cart">
			<a href="javascript:void(0);" class="add-to-cart btn-add" data-goto="<?= LANG_URL . '/shopping-cart' ?>" data-id="<?= $article['id'] ?>">
				<img class="loader" src="<?= base_url('assets/imgs/ajax-loader.gif') ?>" alt="Loding">
				<span class="text-to-bg"><?= lang('add_to_cart') ?></span>
			</a>
		</div>
		<div class="add-to-cart">
			<a href="javascript:void(0);" class="add-to-cart btn-add more-blue" data-goto="<?= LANG_URL . '/checkout' ?>" data-id="<?= $article['id'] ?>">
				<img class="loader" src="<?= base_url('assets/imgs/ajax-loader.gif') ?>" alt="Loding">
				<span class="text-to-bg"><?= lang('buy_now') ?></span>
			</a>
		</div>
	</div>
</div>
<?php
$i++;
}
<!-- loop php product code -->