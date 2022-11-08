<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="renderer" content="webkit" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template" />
	<title>Actectek</title>
	<meta name="keywords" content="actectek" />
	<meta name="description" content="actectek" />
	<link rel="stylesheet" type="text/css" href="<?= STA ?>/css/web/StyleSheet.css" />
	<link rel="stylesheet" type="text/css" href="<?= STA ?>/css/web/swiper-bundle.min.css" />

	<script src="<?= STA ?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?= STA ?>/js/web/index.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/web/jquery.date_input.pack.js"></script>
	<script type="text/javascript" src="<?= STA ?>/lib/layui/layui.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?= STA ?>/js/xadmin.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/upload/jquery_form.js"></script>
</head>

<body>
<div class="max">
	<div class="mhead">
		<div class="inner">
			<!--<div class="language">
				<select name="myselect" id="myselect">
					<option value="1" <?php echo $yflg == 1 ? 'selected' : '' ?>>English</option>
					<option value="2" <?php echo $yflg == 2 ? 'selected' : '' ?>>Chinese</option>
				</select>
			</div> -->
			<div class="header_block">
				<a href="/" class="logo">
					<img src="<?= STA ?>/images/web/logo.png" alt="" />
				</a>
<!--				<div class="header_form">-->
<!--					<select name="classonename" id="classonename">-->
<!--						--><?php //if (isset($classonelist) && !empty($classonelist)) { ?>
<!--							<option value="">All Categories</option>-->
<!--							--><?php //foreach ($classonelist as $k => $v) : ?>
<!--								<option value="--><?//= $v['classname'] ?><!--">--><?//= $v['classname'] ?><!--</option>-->
<!--							--><?php //endforeach; ?>
<!--						--><?php //} ?>
<!--					</select>-->
<!--					<div class="header_form_box">-->
<!--						<input type="text" placeholder="Search For Part or Catalog Number" name="searhtext" id="searhtext" />-->
<!--						<button onclick="gosearchgoods()">-->
<!--							<img src="--><?//= STA ?><!--/images/web/search.png" alt="" />-->
<!--						</button>-->
<!--					</div>-->
<!--				</div>-->
				<a href="<?php echo $setinfo['indexbuynow'] ?>" target="_blank" class="header_block_link">
					<img src="<?= STA ?>/images/web/ico4.png" alt="" />
				</a>
			</div>
		</div>
	</div>
	<div class="nav">
		<div class="inner">
			<ul class="nav_list">
				<li class="nav_item">
					<a href="/">Home</a>
				</li>
				<li class="nav_item">
					<a href="#">Products</a>
					<ul class="nav_erlist">
						<?php if (isset($classonelist) && !empty($classonelist)) { ?>
							<?php foreach ($classonelist as $k => $v) : ?>
								<li class="nav_eritem">
									<a href="<?= RUN . '/webviews/productinfo?classname='.$v['classname'] ?>">
										<?= $v['classname'] ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php } ?>
					</ul>
				</li>
				<li class="nav_item">
					<a href="https://<?php echo $setinfo['onlinestore'] ?>" target="_blank">Online Store</a>
				</li>
				<li class="nav_item">
					<a href="<?= RUN . '/webviews/contact' ?>" target="_blank">Contact</a>
				</li>
			</ul>
		</div>
	</div>
