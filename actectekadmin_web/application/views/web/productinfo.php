<?php require_once('header.php');?>
	<div class="mcenter">
		<div class="product_fiber">
			<div class="product_left">
				<a class="product_link">All Products</a>
				<?php if (isset($classlist) && !empty($classlist)) { ?>
					<?php foreach ($classlist as $k => $v) : ?>
						<div class="product_left_box">
						    <a href="<?= RUN . '/webviews/productinfo?classname='.$v['classname'] ?>">
						        <span class="product_left_text"><?= $v['classname'] ?></span>
						    </a>
							<div class="product_left_info">
								<?php if (isset($v['classtwolistnow'][0]) && !empty($v['classtwolistnow'][0])) { ?>
								    <?php foreach ($v['classtwolistnow'] as $kk => $vv) : ?>
								        <a href="<?= RUN . '/webviews/productinfo_details?classname='.$v['classname'].'&&classtname='.$vv['classtname'] ?>" class="product_left_link product_left_on">>>><?= $vv['classtname'] ?></a>
									<?php endforeach; ?>
								<?php } ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php } ?>
			</div>
			<div class="product_tec_right">
				<span class="product_tec_title"><?php echo $classonetal['classname'] ?> - <?php echo $classonetal['classtitle'] ?></span>
				<div class="product_tec_box">
					<span><?php echo $classonetal['classcontent'] ?></span>
					<span class="product_tec_btn">Series description | Show/Hide</span>
				</div>

				<?php if (isset($classtwolistonenew) && !empty($classtwolistonenew)) { ?>
					<?php foreach ($classtwolistonenew as $kkk => $vvv) : ?>
						<table class="product_tec_yaunhe" border="1px solid #a3a3a3">
							<thead>
							<tr>
								<th>Categroies</th>
								<th>Photos</th>
								<th>Datasheet</th>
								<th>Description</th>
								<th>Learn More</th>
								<th>Buy Now</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td><?= $vvv['classtname'] ?></td>
								<td>
									<img src="<?= $vvv['classtimg'] ?>" alt="" />
								</td>
								<td><?= $vvv['classdatasheet'] ?></td>
								<td><?= $vvv['classdescription'] ?></td>
								<td><?= $vvv['classlearnmore'] ?></td>
								<td>
									<a href="<?= $vvv['classbuynow'] ?>">
										<img src="<?= STA ?>/images/web/ico5.png" alt="" />
									</a>
								</td>
							</tr>
							</tbody>
						</table>
					<?php endforeach; ?>
				<?php } ?>
			</div>
		</div>
	</div>
<?php require_once('footer.php');?>
