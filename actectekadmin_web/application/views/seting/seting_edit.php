<!DOCTYPE html>
<html class="x-admin-sm">

<head>
	<meta charset="UTF-8">
	<title>我的管理后台-Actectek</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport"
		  content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi"/>
	<link rel="stylesheet" href="<?= STA ?>/css/font.css">
	<link rel="stylesheet" href="<?= STA ?>/css/xadmin.css">
	<script type="text/javascript" src="<?= STA ?>/lib/layui/layui.js" charset="utf-8"></script>
	<script type="text/javascript" src="<?= STA ?>/js/xadmin.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?= STA ?>/js/upload/jquery_form.js"></script>
</head>
<body>
 
    
<div class="layui-fluid layui-card" style="padding-top: 66px;">
	<div class="layui-row">
		<form method="post" class="layui-form" action="" name="basic_validate" id="tab">
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>首页顶部BuyNow(链接)：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="indexbuynow" name="indexbuynow" lay-verify="indexbuynow"
							   autocomplete="off" class="layui-input" value="<?=$list['indexbuynow'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>公司邮箱：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companyemail" name="companyemail" lay-verify="companyemail"
							   autocomplete="off" class="layui-input" value="<?=$list['companyemail'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>OnlineStore：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="onlinestore" name="onlinestore" lay-verify="onlinestore"
							   autocomplete="off" class="layui-input" value="<?=$list['onlinestore'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>公司名称：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companyname" name="companyname" lay-verify="companyname"
							   autocomplete="off" class="layui-input" value="<?=$list['companyname'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>公司地址：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companyaddress" name="companyaddress" lay-verify="companyaddress"
							   autocomplete="off" class="layui-input" value="<?=$list['companyaddress'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>公司电话：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companytel" name="companytel" lay-verify="companytel"
							   autocomplete="off" class="layui-input" value="<?=$list['companytel'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>公司Fax：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companyfax" name="companyfax" lay-verify="companyfax"
							   autocomplete="off" class="layui-input" value="<?=$list['companyfax'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>技术支持：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companytechnical" name="companytechnical" lay-verify="companytechnical"
							   autocomplete="off" class="layui-input" value="<?=$list['companytechnical'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>工作调查：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companyinquiries" name="companyinquiries" lay-verify="companyinquiries"
							   autocomplete="off" class="layui-input" value="<?=$list['companyinquiries'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>公司Skype：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companyskype" name="companyskype" lay-verify="companyskype"
							   autocomplete="off" class="layui-input" value="<?=$list['companyskype'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>经销商：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="companydistributor" name="companydistributor" lay-verify="companydistributor"
							   autocomplete="off" class="layui-input" value="<?=$list['companydistributor'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red"></span>隐私条款：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<textarea placeholder="" id="privacyinfo" name="privacyinfo" class="layui-textarea"
								  lay-verify="privacyinfo"><?=$list['privacyinfo'];?></textarea>
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_pass" class="layui-form-label" style="width: 20%;">
						<span class="x-red">*</span>隐私条款日期：
					</label>
					<div class="layui-input-inline" style="width: 60%;">
						<input type="text" id="privacydate" name="privacydate" lay-verify="privacydate"
							   autocomplete="off" class="layui-input" value="<?=$list['privacydate'];?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label for="L_repass" class="layui-form-label" style="width: 20%;">
					</label>
					<button class="layui-btn" lay-filter="add" lay-submit="">
						确认提交
					</button>
				</div>
		</form>
	</div>
</div>
<script>
	layui.use(['laydate', 'form'],
			function() {
				var laydate = layui.laydate;
				//执行一个laydate实例
				laydate.render({
					elem: '#privacydate' //指定元素
				});
			});
</script>
<script>
	layui.use(['form','layedit', 'layer'],
			function () {
				var form = layui.form,
						layer = layui.layer;
				var layedit = layui.layedit;
				layedit.set({
					uploadImage: {
						url: '<?= RUN . '/upload/pushFIletextarea' ?>',
						type: 'post',
					}
				});
				var editIndex1 = layedit.build('privacyinfo', {
					height: 300,
				});
				//自定义验证规则
				// form.verify({
				// 	ltitle: function (value) {
				// 		if ($('#ltitle').val() == "") {
				// 			return '请输入标签名。';
				// 		}
				// 	},
				// });

				$("#tab").validate({
					submitHandler: function (form) {
						$.ajax({
							cache: true,
							type: "POST",
							url: "<?= RUN . '/seting/seting_save' ?>",
							data: $('#tab').serialize(),
							async: false,
							error: function (request) {
								alert("error");
							},
							success: function (data) {
								var data = eval("(" + data + ")");
								if (data.success) {
									layer.msg(data.msg);
									setTimeout(function () {
										cancel();
									}, 2000);
								} else {
									layer.msg(data.msg);
								}
							}
						});
					}
				});
			});

	function cancel() {
		//关闭当前frame
		xadmin.close();
	}
</script>
</body>
</html>
