<!doctype html>
<html class="x-admin-sm">
<head>
	<meta charset="UTF-8">
	<title>我的管理后台-Actectek</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport"
		  content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi"/>
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
	<link rel="stylesheet" href="<?= STA ?>/css/font.css">
	<link rel="stylesheet" href="<?= STA ?>/css/xadmin.css">
	<script src="<?= STA ?>/lib/layui/layui.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?= STA ?>/js/jquery.mini.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/xadmin.js"></script>
</head>
<body>
<div class="x-nav">
          <span class="layui-breadcrumb">
            <a>
              <cite>商品管理</cite></a>
          </span>
</div>
<div class="layui-fluid">
	<div class="layui-row layui-col-space15">
		<div class="layui-col-md12">
			<div class="layui-card">
				<div class="layui-card-body ">
					<form class="layui-form layui-col-space5" method="get" action="<?= RUN, '/seting/goods_list' ?>">
						<div class="layui-inline layui-show-xs-block">
							<input type="text" name="searchtext" id="searchtext" value="<?php echo $searchtext ?>"
								   placeholder="Part or Catalog Number" autocomplete="off" class="layui-input">
						</div>
						<div class="layui-inline layui-show-xs-block">
							<button class="layui-btn" lay-submit="" lay-filter="sreach"><i
										class="layui-icon">&#xe615;</i></button>
						</div>
					</form>
				</div>
				<button class="layui-btn layui-card-header" style="float: right;margin-top: -40px;margin-right: 20px;"
						onclick="xadmin.open('英文添加','<?= RUN . '/seting/goods_add' ?>',900,500)"><i
							class="layui-icon"></i>英文添加
				</button>
				<div class="layui-card-body ">
					<table class="layui-table layui-form">
						<thead>
						<tr>
							<th style="width: 10%">一级分类</th>
							<th style="width: 10%">二级分类</th>
							<th style="width: 10%">Part</th>
							<th style="width: 10%">Catalog Number</th>
							<th style="width: 10%">Buy Now</th>
							<th style="width: 10%">添加时间</th>
							<th style="width: 40%">操作</th>
						</thead>
						<tbody>
						<?php if (isset($list) && !empty($list)) { ?>
							<?php foreach ($list as $num => $once): ?>
								<tr id="p<?= $once['id'] ?>" sid="<?= $once['id'] ?>">
									<td><?= $once['classonename'] ?></td>
									<td><?= $once['classtwoname'] ?></td>
									<td><?= $once['part'] ?></td>
									<td><?= $once['catalognumber'] ?></td>
									<td><?= $once['buynow'] ?></td>
									<td><?= date('Y-m-d H:i',$once['addtime']) ?></td>
									<td class="td-manage">
										<button class="layui-btn layui-btn-normal"
												onclick="xadmin.open('英文编辑','<?= RUN . '/seting/goods_edit?id=' ?>'+<?= $once['id'] ?>,900,500)">
											<i class="layui-icon">&#xe642;</i>英文编辑
										</button>
										<button class="layui-btn layui-btn-normal"
												onclick="xadmin.open('中文添加','<?= RUN . '/seting/goods_editz?id=' ?>'+<?= $once['id'] ?>,900,500)">
											<i class="layui-icon">&#xe642;</i>中文添加
										</button>
										<button class="layui-btn layui-btn-danger"
												onclick="goods_delete('<?= $once['id'] ?>')"><i class="layui-icon">&#xe640;</i>删除
										</button>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php } else { ?>
							<tr>
								<td colspan="7" style="text-align: center;">暂无数据</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="layui-card-body ">
					<div class="page">
						<?= $pagehtml ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</body>
<script>
	function goods_delete(id) {
		layer.confirm('您是否确认删除？', {
					title: '温馨提示',
					btn: ['确认', '取消']
					// 按钮
				},
				function (index) {
					$.ajax({
						type: "post",
						data: {"id": id},
						dataType: "json",
						url: "<?= RUN . '/seting/goods_delete' ?>",
						success: function (data) {
							if (data.success) {
								$("#p" + id).remove();
								layer.alert(data.msg, {
											title: '温馨提示',
											icon: 6,
											btn: ['确认']
										},
								);
							} else {
								layer.alert(data.msg, {
											title: '温馨提示',
											icon: 5,
											btn: ['确认']
										},
								);
							}
						},
					});
				});
	}
</script>
</html>
