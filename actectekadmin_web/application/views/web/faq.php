<?php require_once('header.php');?>
	<div class="mcenter">
		<div class="faq">
			<div class="inner">
				<span class="question_title">Frequently Asked question</span>
				<div class="faq_top">
					<span class="faq_top_text">General</span>
					<span class="faq_top_text">Glossary</span>
					<span class="faq_top_text">Optical Transceiver</span>
					<span class="faq_top_text">Media Converter</span>
					<span class="faq_top_text">Passive Product</span>
					<span class="faq_top_text">Data Center</span>
				</div>
				<div class="faq_block">
					<?php if (isset($faqlist1) && !empty($faqlist1)) { ?>
						<?php foreach ($faqlist1 as $k => $v) : ?>
							<div class="faq_area">
								<span class="faq_area_title"><?= $v['question'] ?></span>
								<span class="faq_text"><?= $v['answer'] ?></span>
							</div>
						<?php endforeach; ?>
					<?php } ?>
				</div>
				<div class="faq_block">
					<?php if (isset($faqlist2) && !empty($faqlist2)) { ?>
						<?php foreach ($faqlist2 as $k => $v) : ?>
							<div class="faq_area">
								<span class="faq_area_title"><?= $v['question'] ?></span>
								<span class="faq_text"><?= $v['answer'] ?></span>
							</div>
						<?php endforeach; ?>
					<?php } ?>
				</div>
				<div class="faq_block">
					<?php if (isset($faqlist3) && !empty($faqlist3)) { ?>
						<?php foreach ($faqlist3 as $k => $v) : ?>
							<div class="faq_area">
								<span class="faq_area_title"><?= $v['question'] ?></span>
								<span class="faq_text"><?= $v['answer'] ?></span>
							</div>
						<?php endforeach; ?>
					<?php } ?>
				</div>
				<div class="faq_block">
					<?php if (isset($faqlist4) && !empty($faqlist4)) { ?>
						<?php foreach ($faqlist4 as $k => $v) : ?>
							<div class="faq_area">
								<span class="faq_area_title"><?= $v['question'] ?></span>
								<span class="faq_text"><?= $v['answer'] ?></span>
							</div>
						<?php endforeach; ?>
					<?php } ?>
				</div>
				<div class="faq_block">
					<?php if (isset($faqlist5) && !empty($faqlist5)) { ?>
						<?php foreach ($faqlist5 as $k => $v) : ?>
							<div class="faq_area">
								<span class="faq_area_title"><?= $v['question'] ?></span>
								<span class="faq_text"><?= $v['answer'] ?></span>
							</div>
						<?php endforeach; ?>
					<?php } ?>
				</div>
				<div class="faq_block">
					<?php if (isset($faqlist6) && !empty($faqlist6)) { ?>
						<?php foreach ($faqlist6 as $k => $v) : ?>
							<div class="faq_area">
								<span class="faq_area_title"><?= $v['question'] ?></span>
								<span class="faq_text"><?= $v['answer'] ?></span>
							</div>
						<?php endforeach; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php require_once('footer.php');?>
