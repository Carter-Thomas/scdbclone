$(document).ready(function(){
		
	$("#pubpriv").click(function() {
		let postdata = {
				"userid": $(this).attr("data-userid"),
				"sessid": $(this).attr("data-sessid"),
				
				};
				
		if ($(this).attr("data-state") == 0)
			postdata["state"] = 1;
		else
			postdata["state"] = 0;
		var thumbsbutton = $(this);
		
		$.ajax({
            url: "pubpriv.ajax.php",
            method: "POST",
            data: postdata,
			}).done(function( e ) {
				if (e=="success")
				{
					$(thumbsbutton).find("i").toggle();
					if ($(thumbsbutton).find("span").text() == "public")
					{
						$(thumbsbutton).find("span").text("private");
						$(thumbsbutton).addClass("privatebookmark");
						
					}
					else
					{
						$(thumbsbutton).find("span").text("public");
						$(thumbsbutton).removeClass("privatebookmark");
					}						
				}
				else
				{
					console.log(e);
				}
			});
	});
	
});