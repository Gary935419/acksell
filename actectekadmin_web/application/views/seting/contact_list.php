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
              <cite>联系信息</cite></a>
          </span>
</div>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body ">
                    <form class="layui-form layui-col-space5" method="get" action="<?= RUN, '/seting/contact_list' ?>">
                        <div class="layui-inline layui-show-xs-block">
                            <input type="text" name="email" id="email" value="<?php echo $email ?>"
                                   placeholder="邮件" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-inline layui-show-xs-block">
                            <button class="layui-btn" lay-submit="" lay-filter="sreach"><i
                                        class="layui-icon">&#xe615;</i></button>
                        </div>
                    </form>
                </div>
                <div class="layui-card-body ">
                    <table class="layui-table layui-form">
                        <thead>
                        <tr>
                            <th style="width: 10%">姓名</th>
                            <th style="width: 10%">公司名</th>
                            <th style="width: 10%">邮件</th>
                            <th style="width: 10%">电话</th>
							<th style="width: 10%">国家</th>
							<th style="width: 20%">产品</th>
							<th style="width: 10%">主题</th>
							<th style="width: 10%">标签</th>
							<th style="width: 10%">时间</th>
                        </thead>
                        <tbody>
                        <?php if (isset($list) && !empty($list)) { ?>
                            <?php foreach ($list as $num => $once): ?>
                                <tr id="p<?= $once['id'] ?>" sid="<?= $once['id'] ?>">
									<td><?= $once['yourname'] ?></td>
									<td><?= $once['yourcompanyname'] ?></td>
									<td><?= $once['youremail'] ?></td>
									<td><?= $once['yourtel'] ?></td>
									<td><?= $once['yourcountry'] ?></td>
									<td><?= $once['yourproduct'] ?></td>
									<td><?= $once['yoursubject'] ?></td>
									<td><?= $once['yourtag'] ?></td>
									<td><?= date('Y-m-d H:i',$once['addtime']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="9" style="text-align: center;">暂无数据</td>
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
</html>
