$(document).ready(function(){
	$("#subcategorytabs a[data-val]").on("click", function() {
		$("#subcategorytabs a").removeClass("active");
		$(this).addClass("active");
		
		$(".puzzle-row").hide();
		$($(this).attr("data-val")).show();
	});
	$("#subcategorytabs li:nth-child(1) a[data-val]").click();
	
	
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
	
	for (let i=1; i<=4; i++)
	{
		var mySwiper = new Swiper("#swiper-"+i, {
			slidesPerView: "auto",
			freeMode: true,
			freeModeMomentum: false,
			spaceBetween: 10,
			  navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
		  });
	};
});