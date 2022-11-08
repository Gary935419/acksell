<?php require_once('header.php');?>
	<div class="mcenter">
		<div class="search">
			<div class="inner">
				<span class="search_title">Showing <?php echo $goodslistcount ?> Results for "<?php echo $searchtext ?>"</span>
				<div class="search_block">
					<?php if (isset($goodslist) && !empty($goodslist)) { ?>
						<?php foreach ($goodslist as $k => $v) : ?>
							<div class="search_box">
								<a href="<?= RUN . '/webviews/productinfo_details?classname='.$v['classonename'].'&&classtname='.$v['classtwoname'] ?>">
									<span class="search_box_title"><?= $v['catalognumber'] ?></span>
								</a>
								<span class="search_box_text"><?= $v['part'] ?></span>
							</div>
						<?php endforeach; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php require_once('footer.php');?>
