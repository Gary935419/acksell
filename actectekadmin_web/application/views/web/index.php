<?php require_once('header.php');?>
	<div class="mcenter">
		<div class="banner">
			<img src="<?= STA ?>/images/web/banner1.jpg" alt="" />
		</div>
		<div class="index_project">
			<div class="index_project_left">
				<a class="product_link">All Products</a>
				<?php if (isset($classonelist) && !empty($classonelist)) { ?>
					<?php foreach ($classonelist as $k => $v) : ?>
						<a href="<?= RUN . '/webviews/productinfo?classname='.$v['classname'] ?>" target="_blank"><?= $v['classname'] ?></a>
					<?php endforeach; ?>
				<?php } ?>
			</div>
			<div class="index_project_right">
				<ul class="index_project_list">
					<?php if (isset($classonelist) && !empty($classonelist)) { ?>
						<?php foreach ($classonelist as $k => $v) : ?>
							<li class="index_project_item">
								<a href="<?= RUN . '/webviews/productinfo?classname='.$v['classname'] ?>" target="_blank">
									<div><img src="<?= $v['classimg'] ?>" alt="" /></div>
									<span><?= $v['classname'] ?></span>
								</a>
							</li>
						<?php endforeach; ?>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
<?php require_once('footer.php');?>
