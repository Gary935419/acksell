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
<div class="layui-fluid" style="padding-top: 66px;">
    <div class="layui-row">
        <form method="post" class="layui-form" action="" name="basic_validate" id="tab">

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>分类名：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="classname" name="classname" value="<?php echo $classname ?>" lay-verify="classname"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>分类图片：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<button type="button" class="layui-btn" id="upload1">上传图片</button>
					<div class="layui-upload-list">
						<input type="hidden" name="classimg" value="<?php echo $classimg ?>" id="classimg" lay-verify="classimg" autocomplete="off"
							   class="layui-input">
						<img class="layui-upload-img" src="<?php echo $classimg ?>" style="width: 100px;height: 100px;" id="classimgimg" name="classimgimg">
						<p id="demoText"></p>
					</div>
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>分类标题：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="classtitle" name="classtitle" value="<?php echo $classtitle ?>" lay-verify="classtitle"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>分类简介：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
						<textarea id="classcontent" name="classcontent" class="layui-textarea"
								  lay-verify="classcontent"><?php echo $classcontent ?></textarea>
				</div>
			</div>

            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label" style="width: 30%;">
                </label>
                <button class="layui-btn" lay-filter="add" lay-submit="">
                    确认提交
                </button>
            </div>
        </form>
    </div>
</div>

<script>
	layui.use('upload', function(){
		var $ = layui.jquery
				,upload = layui.upload;

		//普通图片上传
		var uploadInst = upload.render({
			elem: '#upload1'
			,url: '<?= RUN . '/upload/pushFIle' ?>'
			,before: function(obj){
				//预读本地文件示例，不支持ie8
				obj.preview(function(index, file, result){
					$('#classimgimg').attr('src', result); //图片链接（base64）
					var img = document.getElementById("classimgimg");
					img.style.display="block";
				});
			}
			,done: function(res){
				if(res.code == 200){
					$('#classimg').val(res.src); //图片链接（base64）
					return layer.msg('上传成功');
				}else {
					return layer.msg('上传失败');
				}
			}
			,error: function(){
				//演示失败状态，并实现重传
				var demoText = $('#demoText');
				demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
				demoText.find('.demo-reload').on('click', function(){
					uploadInst.upload();
				});
			}
		});
		//多图片上传
		upload.render({
			elem: '#uploads'
			,url: '<?= RUN . '/upload/pushFIle' ?>'
			,multiple: true
			,before: function(obj){
				//预读本地文件示例，不支持ie8
				var timestamp = (new Date()).valueOf();
				obj.preview(function(index, file, result){
					$('#imgnew').append('<img id="avaterimg'+ timestamp +'" style="width:100px;height:100px;" src="'+ result +'" alt="'+ file.name +'" class="layui-upload-img"><p id="avaterimgp'+ timestamp +'" style="margin-top: -70px;margin-left: -43px;" class="layui-btn layui-btn-xs layui-btn-danger demo-delete" onclick="jusp('+ timestamp +')">删除</p>')
				});
			}
			,done: function(res){
				//上传完毕
				if(res.code == 200){
					var timestamp = (new Date()).valueOf();
					$('#newinp').append('<input type="hidden" name="avater[]" id="avater'+ timestamp +'" value="'+ res.src +'">')
					return layer.msg('上传成功');
				}else {
					return layer.msg('上传失败');
				}
			}
		});
	});
	function jusp(index) {
		$("#avater"+index).remove();
		$("#avaterimg"+index).remove();
		$("#avaterimgp"+index).remove();
	}
</script>
<script>
    layui.use(['form', 'layer'],
        function () {
            var form = layui.form,
                layer = layui.layer;
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
                        url: "<?= RUN . '/seting/classone_save_edit' ?>",
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
