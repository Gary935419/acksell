<?php require_once('header.php');?>
	<div class="mcenter">
		<div class="question">
			<div class="inner">
				<span class="question_title">Ask A Question</span>
				<div class="question_info">
					<span class="question_text">Title</span>
					<input type="text" placeholder="" name="title" id="title" />
				</div>
				<div class="question_info">
					<div class="question_bottom">
						<span class="question_text">Contents</span>
						<textarea name="contents" id="contents" class="question_bottom_box"></textarea>
					</div>
				</div>
				<div class="question_info">
					<span class="question_text">Categroy</span>
					<input type="text" placeholder="" name="categroy" id="categroy" />
				</div>
				<div class="question_info">
					<span class="question_text">Your Email</span>
					<input type="text" placeholder="" name="email" id="email"/>
				</div>
				<div class="question_info">
					<span class="question_text">Your Name</span>
					<input type="text" placeholder="" name="yname" id="yname"/>
				</div>
<!--				<div class="question_info">-->
<!--					<span class="question_caption">8+6=</span>-->
<!--					<input type="text" placeholder="Enter the result" />-->
<!--				</div>-->
				<input type="button" value="SUBMIT" onclick="insertquestion()" class="question_submit" />
				<!--					<a href="" class="question_submit">Back to Question List</a>-->

			</div>
		</div>
	</div>
	<?php require_once('footer.php');?>
