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
					<span class="x-red"></span>二级分类：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<select name="classtwoname" id="classtwoname" lay-verify="classtwoname">
						<?php if (isset($classtwolist) && !empty($classtwolist)) { ?>
							<option value="">请选择</option>
							<?php foreach ($classtwolist as $k => $v) : ?>
								<option value="<?= $v['classtname'] ?>" <?php echo $classtwoname == $v['classtname'] ? 'selected' : '' ?>><?= $v['classtname'] ?></option>
							<?php endforeach; ?>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Part：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="part" name="part" value="<?php echo $part ?>" lay-verify="part"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Fiber Type：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="fibertype" name="fibertype" value="<?php echo $fibertype ?>" lay-verify="fibertype"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Fiber Count：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="fibercount" name="fibercount" value="<?php echo $fibercount ?>" lay-verify="fibercount"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Connector Type：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="connectortype" name="connectortype" value="<?php echo $connectortype ?>" lay-verify="connectortype"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Polish：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="polish" name="polish" value="<?php echo $polish ?>" lay-verify="polish"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Cable Length：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="cablelength" name="cablelength" value="<?php echo $cablelength ?>" lay-verify="cablelength"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Cable Diameter：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="cablediameter" name="cablediameter" value="<?php echo $cablediameter ?>" lay-verify="cablediameter"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Insertion Loss：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="insertionloss" name="insertionloss" value="<?php echo $insertionloss ?>" lay-verify="insertionloss"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Return Loss：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="returnloss" name="returnloss" value="<?php echo $returnloss ?>" lay-verify="returnloss"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Polarity：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="polarity" name="polarity" value="<?php echo $polarity ?>" lay-verify="polarity"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Durability：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="durability" name="durability" value="<?php echo $durability ?>" lay-verify="durability"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Jacket Material：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="jacketmaterial" name="jacketmaterial" value="<?php echo $jacketmaterial ?>" lay-verify="jacketmaterial"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Buy Now：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="buynow" name="buynow" value="<?php echo $buynow ?>" lay-verify="buynow"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Catalog Number：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="catalognumber" name="catalognumber" value="<?php echo $catalognumber ?>" lay-verify="catalognumber"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Type：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="type" name="type" value="<?php echo $type ?>" lay-verify="type"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Series：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="series" name="series" value="<?php echo $series ?>" lay-verify="series"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Imax,A：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="imaxa" name="imaxa" value="<?php echo $imaxa ?>" lay-verify="imaxa"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Umax,V：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="umaxv" name="umaxv" value="<?php echo $umaxv ?>" lay-verify="umaxv"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Qmax,W：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="qmaxw" name="qmaxw" value="<?php echo $qmaxw ?>" lay-verify="qmaxw"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Tmax,K：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="tmaxk" name="tmaxk" value="<?php echo $tmaxk ?>" lay-verify="tmaxk"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>AC：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="ac" name="ac" value="<?php echo $ac ?>" lay-verify="ac"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Length A/A1,mm：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="lengtham" name="lengtham" value="<?php echo $lengtham ?>" lay-verify="lengtham"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Witdh B,mm：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="witdhbm" name="witdhbm" value="<?php echo $witdhbm ?>" lay-verify="witdhbm"
						   autocomplete="off" class="layui-input">
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_pass" class="layui-form-label" style="width: 20%;">
					<span class="x-red"></span>Height H,mm：
				</label>
				<div class="layui-input-inline" style="width: 60%;">
					<input type="text" id="heighthm" name="heighthm" value="<?php echo $heighthm ?>" lay-verify="heighthm"
						   autocomplete="off" class="layui-input">
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
                        url: "<?= RUN . '/seting/goods_save_editz' ?>",
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
