
	<div class="mfoot">
		<div class="footer_top">
			<div class="inner">
				<div class="footer_top_left">
					<span class="footer_top_left_text1">Any Question</span>
					<span class="footer_top_left_text2">We're here to help</span>
					<span class="footer_top_left_text3">We're happy to answer  your question. We  respond to most inquiries within 24 hours</span>
				</div>
				<div class="footer_top_right">
					<a href="mailto:<?php echo $setinfo['companyemail'] ?>" target="_blank" class="footer_top_link">
						<img src="<?= STA ?>/images/web/ico1.png" alt="" />
						<span>Send Email</span>
					</a>
					<a href="<?= RUN . '/webviews/contact' ?>" target="_blank" class="footer_top_link">
						<img src="<?= STA ?>/images/web/ico2.png" alt="" />
						<span>Leave Message</span>
					</a>
					<a href="<?= RUN . '/webviews/question' ?>" target="_blank" class="footer_top_link">
						<img src="<?= STA ?>/images/web/ico3.png" alt="" />
						<span>Ask Question</span>
					</a>
				</div>
			</div>
		</div>
		<div class="footer_center">
			<div class="inner">
				<ul class="footer_center_list">
					<li class="footer_center_item">
						<a href="#">Support</a>
						<a href="<?= RUN . '/webviews/faq' ?>" target="_blank">FAQ</a>
					</li>
					<li class="footer_center_item">
						<a href="#">Terms and Rights</a>
						<a href="<?= RUN . '/webviews/privacy' ?>" target="_blank">Privacy Policy</a>
						<a href="#" target="_blank">Terms & Conditions</a>
						<a href="#" target="_blank">Intellectual Property Rights</a>
					</li>
					<li class="footer_center_item">
						<a href="#">Thermoelectrics</a>
						<a href="#" target="_blank">TEC Modules</a>
						<a href="#" target="_blank">TEC Controller</a>
						<a href="#" target="_blank">TEC Assemblies</a>
					</li>
					<li class="footer_center_item">
						<a href="#">Optoelectronics</a>
						<a href="#" target="_blank">Optical Transceiver</a>
						<a href="#" target="_blank">DAC & AOC Cable</a>
						<a href="#" target="_blank">Fiber Cable</a>
					</li>
					<li class="footer_center_item">
						<a href="#">Component Kits</a>
						<a href="#" target="_blank">Enclosure</a>
						<a href="#" target="_blank">SMT Resistor Kit</a>
						<a href="#" target="_blank">SMT Capacitor Kit</a>
					</li>
					<li class="footer_center_item">
						<span>Online Store:</span>
						<a href="<?php echo $setinfo['onlinestore'] ?>" target="_blank"><?php echo $setinfo['onlinestore'] ?></a>
						<span>Email:</span>
						<a href="mailto:<?php echo $setinfo['companyemail'] ?>" target="_blank"><?php echo $setinfo['companyemail'] ?></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer_bottom">
			<div class="footer_bottom_box">
				<img src="<?= STA ?>/images/web/foo10.jpg" alt="" />
			</div>
			<span class="small">Copyright @ 2022 ACTectek Co. Ltd. All rights reserved.</span>
		</div>
	</div>


</div><!--  / .max-->

<script>
	function insertcontact() {
		$.ajax({
			cache: true,
			type: "POST",
			url: "<?= RUN . '/webviews/insertcontact' ?>",
			data: {
				yourname:$('#yourname').val(),
				yourcompanyname:$('#yourcompanyname').val(),
				youremail:$('#youremail').val(),
				yourtel:$('#yourtel').val(),
				yourcountry:$('#yourcountry').val(),
				yourproduct:$('#yourproduct').val(),
				yoursubject:$('#yoursubject').val(),
				yourtag:$('#yourtag').val()
			},
			async: false,
			error: function (request) {
				alert("error");
			},
			success: function (data) {
				var data = eval("(" + data + ")");
				if (data.result){
					setTimeout(function(){
						layer.msg(data.msg);
					},1000);
					setTimeout(function(){
						window.location.href='/';
					},2000);
				}else {
					setTimeout(function(){
						layer.msg(data.msg);
					},1000);
				}
			}
		});
	}
</script>
<script>
	function insertquestion() {
		$.ajax({
			cache: true,
			type: "POST",
			url: "<?= RUN . '/webviews/insertquestion' ?>",
			data: {
				title:$('#title').val(),
				contents:$('#contents').val(),
				categroy:$('#categroy').val(),
				email:$('#email').val(),
				yname:$('#yname').val()
			},
			async: false,
			error: function (request) {
				alert("error");
			},
			success: function (data) {
				var data = eval("(" + data + ")");
				if (data.result){
					setTimeout(function(){
						layer.msg(data.msg);
					},1000);
					setTimeout(function(){
						window.location.href='/';
					},2000);
				}else {
					setTimeout(function(){
						layer.msg(data.msg);
					},1000);
				}
			}
		});
	}
</script>
<script>
	$("#myselect").change(function(){
		var yflg=$("#myselect").val();
		var classname = $("#classname").val();
		var classtname = $("#classtname").val();
		window.location.href = '/webviews/productinfo_details?classname='+classname+'&&classtname='+classtname+'&&yflg='+yflg;
	});
</script>
<script>
	function gosearchgoods() {
		var classonename=$("#classonename").val();
		var searhtext = $("#searhtext").val();
		window.location.href = '/webviews/search?classonename='+classonename+'&&searhtext='+searhtext;
	}
</script>
</body>

</html>
