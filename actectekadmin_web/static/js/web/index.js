// JavaScript Document

$(function(){

	$('.question_bottom_box').eq(0).addClass('question_bottom_box_on');
	$(".question_top span").click(function(){
			$(this).addClass("question_top_link").siblings().removeClass("question_top_link");
			var i=$(this).index();
			$('.question_bottom_box').eq(i).addClass('question_bottom_box_on').siblings().removeClass('question_bottom_box_on');

	});	
	$(".faq_area").click(function() {
		$(this).toggleClass("faq_area_on").siblings().removeClass("faq_area_on");
	})
	$('.faq_block').eq(0).addClass('faq_block_on');
	$(".faq_top_text").click(function(){
			$(this).addClass("faq_top_text_link").siblings().removeClass("faq_top_text_link");
			var i=$(this).index();
			$('.faq_block').eq(i).addClass('faq_block_on').siblings().removeClass('faq_block_on');

	});	
	$(".product_left_text").click(function() {
		$(this).siblings(".product_left_info").toggle()
	})
	$(".product_tec_btn").click(function() {
		$(this).siblings(".product_tec_text").toggleClass("product_tec_texton")
	})

	  




});










