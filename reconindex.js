$(document).ready(function(){	
	/* section content carousel */
	$(".section-content-carousel .right").click(function(){
		
		let carousel = $(this).parent().find(".section-cardbox");
		let newLeft = parseInt($(carousel).css("left")) -  $(this).parent().width();
		newLeft = Math.max(newLeft, $(this).parent().width()-carousel.width());
		$(carousel).css("left",newLeft + "px"); 
	});
	
	$(".section-content-carousel .left").click(function(){
		let carousel = $(this).parent().find(".section-cardbox");
		let newLeft = parseInt($(carousel).css("left")) +  $(this).parent().width();
		newLeft = Math.min(newLeft,0);
		$(carousel).css("left",newLeft + "px");
	});
	
	$(window).resize(function(){
		$(".section-cardbox").each(function() {
			$(this).css("left",0);
			if ($(this).parent().width() >= $(this).width())
			{
				$(this).parent().find(".left,.right").hide();
			}
			else
			{
				$(this).parent().find(".left,.right").show();
			}
		});
	}).trigger("resize");
	
	$("input[type=checkbox]").on("change", function() {
		$(".recontable").empty();
		$(".recontable").append($("<div class='d-flex'><i class=\"fas fa-sync-alt\"></i>Refreshing</div>"));
		$(this).closest("form").submit();
	});
	
	$("#sortbyorder, #sortby").change(function() {
		console.log($(this).closest("form").serialize());
		$("#searchform button[type=submit]").trigger("click");
	});
});