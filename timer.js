var currentAlg = 0;
var algdata;
function UpdateNextAlg()
{
	if ($(".algscheckbox:checked").length == 0)
	{
		alert("you must select at least one case");
		return;
	}
	
	if ($(".algscheckbox:checked:not(.practiced)").length == 0)
	{
		$(".algscheckbox").removeClass("practiced");
	}
	
	let algfind = Math.floor((Math.random() * algdata.length));
	while (algfind > 0)
	{
		for (let i = 0; i< $(".algscheckbox").length; i++)
		{
			if ($("#alg"+i).is(":checked") && !$("#alg"+i).hasClass("practiced"))
			{
				algfind--;
				if (algfind == 0)
				{
					currentAlg = i;
					$("#alg"+currentAlg).addClass("practiced");
					break;
				}
			}
		}
	}

	let variation = Math.floor((Math.random() * algdata[currentAlg][3].length));
	let linktext = "/a/"+algdata[currentAlg][6]+"/"+algdata[currentAlg][1].replaceAll(" ", "_")+"/"+algdata[currentAlg][2].replaceAll(" ", "_");
	if ($("#puzzle").val()=="SQ1")
	{
		linktext = "http://www.squandb.net?type=alg&alg="+algdata[currentAlg][3][0].replaceAll(" ", "_");
	}
	$("#practice_alg").html(algdata[currentAlg][3][variation] + "<a href='"+linktext+"' target='_blank'><i class='fa fa-link' aria-hidden='true' style='margin-left: 0.5rem;'></i></a>");
	$("#practice_alg").append($("<i id='refreshalg' style='margin-left: 0.5rem; cursor: pointer' class='fas fa-sync-alt' aria-hidden='true'></i>"));
	$("#refreshalg").click(UpdateNextAlg);
	$("#practice_img").attr("src",algdata[currentAlg][5]);
	
}

function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = $("#timerstats table");
  switching = true;
  while (switching) {
    switching = false;
    rows = $(table).find("tr");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = parseFloat($(rows).eq(i).find("td").eq(3).text());
      y = parseFloat($(rows).eq(i+1).find("td").eq(3).text());
      // Check if the two rows should switch place:
      if (x < y) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      $(rows).eq(i).before($(rows).eq(i+1));
      switching = true;
    }
  }
}

function UpdateTimerStats()
{
	var line;
	if ($("#timerstats table tr[data-id="+algdata[currentAlg][0]+"]").length == 0)
	{
		$("#timerstats table").append("<tr data-id='"+algdata[currentAlg][0]+"'></tr>");
		let linktext = "/a/"+algdata[currentAlg][6]+"/"+algdata[currentAlg][1].replaceAll(" ", "_")+"/"+algdata[currentAlg][2].replaceAll(" ", "_");
		if ($("#puzzle").val()=="SQ1")
		{
			linktext = "http://www.squandb.net?type=alg&alg="+algdata[currentAlg][3][0].replaceAll(" ", "_");
		}
		line = $("#timerstats table tr[data-id="+algdata[currentAlg][0]+"]");
		$(line).append($("<td><a href='"+linktext+"' target='_blank'><img src='template/renderers/"+algdata[currentAlg][5]+"' /></a></td>"));
		$(line).append($("<td><a href='"+linktext+"' target='_blank'>"+algdata[currentAlg][2]+"<i class='fa fa-link' aria-hidden='true' style='margin-left: 0.5rem;'></i></a></td>"));
		$(line).append($("<td><span class='case_results'>"+$("#stopwatch_display").text()+"</span><i class='fas fa-eraser' id='erase"+algdata[currentAlg][0]+"'></i></td>"));
		$(line).append($("<td>"+$("#stopwatch_display").text()+"</td>"));
		
		$("#erase"+algdata[currentAlg][0]).click(function() { 
			var res = $(this).parent().find("span").text();
			if (res.includes(','))
			{
				$(this).parent().find("span").text(res.substr(0,res.lastIndexOf(',')));
			}
			else
			{
				$(this).parent().find("span").text("");
			}
		});
	}
	else
	{
		var resultCell = $("#timerstats table tr[data-id="+algdata[currentAlg][0]+"] td:nth-child(3) span");
		var resultsText = "";
		if ($(resultCell).text().length > 0)
		{
			resultsText = $(resultCell).text() + ", " + $("#stopwatch_display").text();
		}
		else
		{
			resultsText = $("#stopwatch_display").text();
		}
		$(resultCell).text(resultsText);
		var results = resultsText.split(", ");
		var resultsAmount = 0;
		var resultsSum = 0;
		for (let i =0; i< results.length; i++)
		{
			let num = parseFloat(results[i]);
			if (num != NaN)
			{
				resultsAmount ++;
				resultsSum += parseFloat(num);
			}			
		}
		$("#timerstats table tr[data-id="+algdata[currentAlg][0]+"] td:nth-child(4)").text(Math.round(parseFloat(resultsSum)/parseFloat(resultsAmount)*100)/100);
	}		
	sortTable();
}

var timerstart, isrunning = false;
var startdown = new Date().getTime();

function KeyDown(event)
{
	if (isrunning || (!isrunning &&  (event.key == ' ' || event.keycode == 32)))
	{
		event.preventDefault();
		startTouchTimer();				
	}
}

function KeyUp(event)
{			
	if (isrunning || (!isrunning &&  (event.key == ' ' || event.keycode == 32)))
	{
		event.preventDefault();
		endTouchTimer(event)
	}
}

function startTouchTimer(event)
{
	if (isrunning) {
		clearInterval(timerhandle);
		if (!$("#stopwatch_display").hasClass("pressed"))
		{
			startdown = new Date().getTime()+500;
		}
	}
	else {
		
		$("#stopwatch_display").addClass("pressed");
		$("#stopwatch_display").text("0.00");
	}	
}

function endTouchTimer(event)
{			
	$("#stopwatch_display").removeClass("pressed");
	
	if (isrunning) {
		UpdateTimerStats();
		UpdateNextAlg();
		clearInterval(timerhandle);
		isrunning = false;
	} 
	else
	{	
		if (startdown < new Date().getTime())
		{
			timerstart = Date.now();
			timerhandle = setInterval(updateStopwatch, 10);
			isrunning = true;		
		}
	}
}

function UpdateAlgsToPractice()
{
	
	$("#algstopractice").empty();
	
	var selectnone = $("<button>Select None</button>");
	var selectAll = $("<button>Select All</button>");
	$("#algstopractice").append(selectnone);
	$("#algstopractice").append(selectAll);
	$("#algstopractice").append("<br/>");
	$(selectnone).click(function() {
		$(".catstopractice input[type=checkbox]").attr("checked",false);
		$(".algtopracticeopt input[type=checkbox]").attr("checked",false);
	});
	
	$(selectAll).click(function() {
		$(".catstopractice input[type=checkbox]").attr("checked",true);
		$(".algtopracticeopt input[type=checkbox]").attr("checked",true);
	});
	
	for (let i =0; i< algdata.length; i++)
	{
		var categoryshortened = algdata[i][4].replaceAll(" ", "");
		if (algdata[i][4] != undefined && algdata[i][4].length > 0 && $("div.catstopractice[data-cat="+categoryshortened+"]").length == 0)
		{
			$("#algstopractice").append($("<div class='catstopractice' id='cat"+categoryshortened+"' data-cat='"+categoryshortened+"'><div class='categoryselector'><input type='checkbox' id='category"+categoryshortened+"' class='catselector' data-cat='"+categoryshortened+"' checked><label for='category"+categoryshortened+"'>"+algdata[i][4]+"</label></div></div></div>"));
		
		}
		
		var practiceopt = $("<div class='algtopracticeopt'><input type='checkbox' class='algscheckbox' id='alg"+i+"' data-cat='"+categoryshortened+"' checked /><label for='alg"+i+"'>"+algdata[i][2]+"</label></div>");
		
		if (algdata[i][4] != undefined && algdata[i][4].length > 0)
		{
			$("#cat"+categoryshortened).append(practiceopt);
		}		
		else {
			$("#algstopractice").append(practiceopt);
		}
		
	}
	
	$(".catselector").on("click change",function() {
		if ($(this).prop("checked") == true)
		{
			$(this).parent().parent().find(".algscheckbox").prop("checked",true);
		}
		else
		{
			
			$(this).parent().parent().find(".algscheckbox").prop("checked",false);
		}
	});
		
}

$(document).ready(function() {
	
	$(window).keydown(KeyDown);				
	$(window).keyup(KeyUp);
	$("#stopwatch_display").on("touchstart",startTouchTimer);				
	$("#stopwatch_display").on("touchend",endTouchTimer);
	
	
	
	
	
	
	$("#algset").change(function(){
		if ($("#puzzle").val() == "SQ1")
		{
			$.post('sq1algdata.ajax.php',{"cat":$("#algset").val()}, function(data) {
				algdata = $.parseJSON(data);
				UpdateAlgsToPractice();
				UpdateNextAlg();
				$("#timerstats table tbody").empty();
			});
		}
		else
		{
			$.post('algdata.ajax.php',{"cat":$("#algset").val()}, function(data) {
				algdata = $.parseJSON(data);
				UpdateAlgsToPractice();
				UpdateNextAlg();
				$("#timerstats table tbody").empty();
			});
		}
	});
	
	
	$("#algcatcat").change(function(){
		$("#algset option").hide();
		$("#algset option[data-catcat='"+$("#algcatcat").val()+"']").show();
		$("#algset").val($("#algset option[data-catcat='"+$("#algcatcat").val()+"']:first").val());
		$("#algset").change();
	});
	
	
	$("#puzzle").change(function(){
		$("#algcatcat option").hide();
		$("#algcatcat option[data-puzzle='"+$("#puzzle").val()+"']").show();
		$("#algcatcat").val($("#algcatcat option[data-puzzle='"+$("#puzzle").val()+"']:first").val());
		$("#algcatcat").change();
	}).change();
	
	
	$("#algsetsubgroup").change(function(){		
		$("#timerstats table tbody").empty();
		UpdateNextAlg();
	});
	
	
	$("#hideimage").change(function(){
		$("#practice_img").fadeToggle();
	});
	$("#selectspecificcases").click(function() {
		$("#algstopractice").slideToggle();
	});
});

function updateStopwatch()
{
	let now = Date.now()
	let diff = now - timerstart;
			
	$("#stopwatch_display").text(msToTime(diff));
}

function msToTime(s) {

	function pad(num, size) {
		var s = num+"";
		while (s.length < size) s = "0" + s;
		return s;
	}
  var ms = s % 1000;
  s = (s - ms) / 1000;
  var secs = s;
  
  ms = parseInt(ms / 10);

  return secs + '.' + pad(ms, 2);
}