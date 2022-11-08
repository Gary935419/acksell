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
			<input type="hidden" id="classname" name="classname" value="<?php echo $classname ?>">
			<input type="hidden" id="classtname" name="classtname" value="<?php echo $classtname ?>">
			<input type="hidden" id="yflg" name="yflg" value="<?php echo $yflg ?>">
			<div class="product_tec_right">
				<span class="product_fiber_right_title">MPO/MTP Breakout Cable</span>
				<a href="<?php echo $fileurl ?>">
				<span class="product_fiber_right_datasheet">MPO/MTP Breakout Cable Datasheet</span>
				</a>
				<div class="product_fiber_block">
					<table class="product_tec_table" border="1px solid #a3a3a3">
						<thead>
						<tr>
							<th>
								<span>Catalog Number</span>
							</th>
							<th>
								<span>Type</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>Series</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>Imax,A</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>Umax,V</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>Qmax,W</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>Tmax,K</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>AC</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>Length A/A1,mm</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>Witdh B,mm</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>
								<span>Height H,mm</span>
								<div class="product_tec_info">
									<img src="<?= STA ?>/images/web/jian8.png" alt="" />
									<img src="<?= STA ?>/images/web/jian9.png" alt="" />
								</div>
							</th>
							<th>Part</th>
							<th>Fiber Type</th>
							<th>Fiber Count</th>
							<th>Connector Type</th>
							<th>Polish</th>
							<th>Cable Length</th>
							<th>Cable Diameter</th>
							<th>Insertion Loss</th>
							<th>Return Loss</th>
							<th>Polarity</th>
							<th>Durability</th>
							<th>Jacket Material</th>
							<th>Buy Now</th>
						</tr>
						</thead>
						<tbody>
						<?php if (isset($goodslist) && !empty($goodslist)) { ?>
							<?php foreach ($goodslist as $kk => $vv) : ?>
								<tr>
									<td><?= $vv['catalognumber'] ?></td>
									<td><?= $vv['type'] ?></td>
									<td><?= $vv['series'] ?></td>
									<td><?= $vv['imaxa'] ?></td>
									<td><?= $vv['umaxv'] ?></td>
									<td><?= $vv['qmaxw'] ?></td>
									<td><?= $vv['tmaxk'] ?></td>
									<td><?= $vv['ac'] ?></td>
									<td><?= $vv['lengtham'] ?></td>
									<td><?= $vv['witdhbm'] ?></td>
									<td><?= $vv['heighthm'] ?></td>
									<td><?= $vv['part'] ?></td>
									<td><?= $vv['fibertype'] ?></td>
									<td><?= $vv['fibercount'] ?></td>
									<td><?= $vv['connectortype'] ?></td>
									<td><?= $vv['polish'] ?></td>
									<td><?= $vv['cablelength'] ?></td>
									<td><?= $vv['cablediameter'] ?></td>
									<td><?= $vv['insertionloss'] ?></td>
									<td><?= $vv['returnloss'] ?></td>
									<td><?= $vv['polarity'] ?></td>
									<td><?= $vv['durability'] ?></td>
									<td><?= $vv['jacketmaterial'] ?></td>
									<td>
										<a href="<?= $vv['buynow'] ?>">
											<img src="<?= STA ?>/images/web/ico5.png" alt="" />
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php } ?>

						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
<?php require_once('footer.php');?>
