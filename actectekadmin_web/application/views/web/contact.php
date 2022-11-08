<?php require_once('header.php');?>
	<div class="mcenter">
		<div class="contact">
			<div class="inner">
				<span class="contact_title">Contact Us</span>
				<div class="contact_block">
					<div class="contact_left">
						<div class="contact_box">
							<span class="contact_box_title"><?php echo $setinfo['companyname'] ?></span>
							<span class="contact_text">Address: <?php echo $setinfo['companyaddress'] ?><br>
                  Phone: <?php echo $setinfo['companytel'] ?><br>
                </span>
						</div>
						<div class="contact_box">
							<span class="contact_box_title">Email</span>
							<span class="contact_text">Sales Email: <?php echo $setinfo['companyemail'] ?><br>
                  Technical Support: <?php echo $setinfo['companytechnical'] ?><br>
                  Job inquiries: <?php echo $setinfo['companyinquiries'] ?><br>
                  Skype: <?php echo $setinfo['companyskype'] ?>
                </span>
						</div>
						<div class="contact_box">
							<span class="contact_box_title">Distributor/Agent Information</span>
							<span class="contact_text"><?php echo $setinfo['companydistributor'] ?></span>
						</div>
					</div>
					<div class="contact_right">
						<div class="question_info">
							<span class="question_text">Your Name*</span>
							<input type="text" placeholder="" name="yourname" id="yourname" />
						</div>
						<div class="question_info">
							<span class="question_text">Company Name</span>
							<input type="text" placeholder="" name="yourcompanyname" id="yourcompanyname"/>
						</div>
						<div class="question_info">
							<span class="question_text">Email*</span>
							<input type="text" placeholder="" name="youremail" id="youremail" />
						</div>
						<div class="question_info">
							<span class="question_text">Phone Number</span>
							<input type="text" placeholder="" name="yourtel" id="yourtel" />
						</div>
						<div class="question_info">
							<span class="question_text">Country/Region*</span>
							<input type="text" placeholder="" name="yourcountry" id="yourcountry" />
						</div>
						<div class="question_info">
							<span class="question_text">Product*</span>
							<input type="text" placeholder="" name="yourproduct" id="yourproduct" />
						</div>
						<div class="question_info">
							<span class="question_text">Subject*</span>
							<input type="text" placeholder="" name="yoursubject" id="yoursubject" />
						</div>
						<div class="question_info">
							<span class="question_text">Tag</span>
							<textarea placeholder="Your Message(required)" name="yourtag" id="yourtag"></textarea>
						</div>
						<input type="button" value="SUBMIT" onclick="insertcontact()" class="question_submit" />
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require_once('footer.php');?>
