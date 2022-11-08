<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?= STA ?>/css/font.css">
	<link rel="stylesheet" href="<?= STA ?>/css/xadmin.css">
	<link type="text/css" href="<?= STA ?>/css/jquery-ui.css" rel="stylesheet"/>
	<script src="<?= STA ?>/lib/layui/layui.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?= STA ?>/js/jquery.mini.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/xadmin.js"></script>
</head>
<body>
<div class="layui-fluid">
	<div class="layui-row layui-col-space15">
		<div class="layui-col-md12">
			<div class="layui-card">
				<div class="layui-card-body ">
					<blockquote class="layui-elem-quote">欢迎您登录Actectek后台管理系统
					</blockquote>
				</div>
			</div>
		</div>
		<div class="layui-col-md12">
			<div class="layui-card">
				<div class="layui-card-header">系统统计</div>
				<div class="layui-card-body ">
					<ul class="layui-row layui-col-space10 layui-this x-admin-carousel x-admin-backlog">
						<li class="layui-col-md3">
							<a href="javascript:;" class="x-admin-backlog-body">
								<h3>联系信息</h3>
								<p>
									<cite><?=$num1;?></cite> 条</p>
							</a>
						</li>
						<li class="layui-col-md3">
							<a href="javascript:;" class="x-admin-backlog-body">
								<h3>问题信息</h3>
								<p>
									<cite><?=$num2;?></cite> 条</p>
							</a>
						</li>
						<li class="layui-col-md3">
							<a href="javascript:;" class="x-admin-backlog-body">
								<h3>商品信息(英文)</h3>
								<p>
									<cite><?=$num3;?></cite> 条</p>
							</a>
						</li>
						<li class="layui-col-md3">
							<a href="javascript:;" class="x-admin-backlog-body">
								<h3>商品信息(中文)</h3>
								<p>
									<cite><?=$num4;?></cite> 条</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="layui-col-md12">
			<div class="layui-card">
				<div class="layui-card-header">开发团队</div>
				<div class="layui-card-body ">
					<table class="layui-table">
						<tbody>
						<tr>
							<th>开发者</th>
							<td>大连G-R科技有限公司</td></tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>
