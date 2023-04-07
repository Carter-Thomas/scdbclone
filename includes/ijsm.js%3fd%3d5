class icubehelper {
	static rotu($u, $v, $a) {
		return $u * Math.cos($a) - $v * Math.sin($a);
	}

	static rotv($u, $v, $a) {
		return $u * Math.sin($a) + $v * Math.cos($a);
	}

	static rotxy($x, $y, $z, $ex, $ey, $ez, $ax, $ay) {
		let $ry = this.rotu($ey, $ez, $ax);
		let $rz = this.rotv($ey, $ez, $ax);
		let $rx = this.rotu($ex, $rz, $ay);
		$rz = this.rotv($ex, $rz, $ay);
		return $x * $rx + $y * $ry + $z * $rz;
	}

	static rotz($x, $y, $z, $ax, $ay) {
		return this.rotxy($x, $y, $z, 0, 0, -1, $ax, $ay);
	}

	static perspective($x, $y, $z, $ax, $ay, $p) {
		return $p / (1.0 - 0.3 * this.rotz($x, $y, $z, $ax, $ay));
	}

	static projxy($face, $x, $y, $z, $ex, $ey, $ax, $ay) {
		let $xx = $face == 2 ? $z : $x;
		let $yy = $face == 0 ? -$z : $y;
		let $zz = $face == 0 ? -$y : ($face == 2 ? $x : -$z);
		return this.perspective($xx, $yy, $zz, $ax, $ay, this.rotxy($xx, $yy, $zz, $ex, $ey, 0, $ax, $ay));
	}

	static projx($face, $x, $y, $z, $ax, $ay) {
		return this.projxy($face, $x, $y, $z, 1, 0, $ax, $ay);
	}

	static projy($face, $x, $y, $z, $ax, $ay) {
		return this.projxy($face, $x, $y, $z, 0, 1, $ax, $ay);
	}

	static outcoordx($x, $m) {
		return $m > 0 ? $x * 0.58 + 0.52 : $x * -0.58 + 0.48;
	}

	static outcoordy($y, $m) {
		return $m > 0 ? $y * 0.58 + 0.46 : $y * -0.58 + 0.54;
	}


	static tile($target, $scale, $face, $color, $x0, $y0, $x1, $y1, $x2, $y2, $x3, $y3, $z, $ax, $ay) {
		let $xx0 = this.outcoordx(this.projx($face, $x0, $y0, $z, $ax, $ay), 1) * $scale;
		let $yy0 = this.outcoordy(this.projy($face, $x0, $y0, $z, $ax, $ay), 1) * $scale;
		let $xx1 = this.outcoordx(this.projx($face, $x1, $y1, $z, $ax, $ay), 1) * $scale;
		let $yy1 = this.outcoordy(this.projy($face, $x1, $y1, $z, $ax, $ay), 1) * $scale;
		let $xx2 = this.outcoordx(this.projx($face, $x2, $y2, $z, $ax, $ay), 1) * $scale;
		let $yy2 = this.outcoordy(this.projy($face, $x2, $y2, $z, $ax, $ay), 1) * $scale;
		let $xx3 = this.outcoordx(this.projx($face, $x3, $y3, $z, $ax, $ay), 1) * $scale;
		let $yy3 = this.outcoordy(this.projy($face, $x3, $y3, $z, $ax, $ay), 1) * $scale;
		$target.polygon($xx0+","+$yy0+" "+$xx1+","+$yy1+" "+$xx2+","+$yy2+" "+$xx3+","+$yy3).fill($color);
	}

	static square($target, $scale, $face, $color, $x, $y, $z, $size, $border) {
		this.tile($target,$scale, $face, $color,
			 $x + $border - 0.5, $y + $border - 0.5,
			 $x + $size - $border - 0.5, $y + $border - 0.5,
			 $x + $size - $border - 0.5, $y + $size - $border - 0.5,
			 $x + $border - 0.5, $y + $size - $border - 0.5,
			 $z, -0.5, 0.6);
	}


}

class sqcubehelper {
	static drawEdge($target, $rot, $topColor, $edgeColor, $centerx, $centery, $radius, $edgewidth)
	{
		// draw triangle
		let $xx0 = $centerx;
		let $yy0 = $centery;
		let $xx1 = $centerx + Math.cos($rot*sqcubehelper.edgerad + sqcubehelper.edgerad1)*$radius;
		let $yy1 = $centery + Math.sin($rot*sqcubehelper.edgerad + sqcubehelper.edgerad1)*$radius;
		let $xx2 = $centerx + Math.cos(($rot+1)*sqcubehelper.edgerad - sqcubehelper.edgerad1)*$radius;
		let $yy2 = $centery + Math.sin(($rot+1)*sqcubehelper.edgerad - sqcubehelper.edgerad1)*$radius;
		
		// imagefilledpolygon($im, array($xx0, $yy0, $xx1, $yy1, $xx2, $yy2), 3, $topColor);
		// imagepolygon($im, array($xx0, $yy0, $xx1, $yy1, $xx2, $yy2), 3 ,0x0);
		
		
		$target.polygon($xx0+","+$yy0+" "+$xx1+","+$yy1+" "+$xx2+","+$yy2).fill($topColor);
		
		// draw edge
		let $xxx0 = $xx1;
		let $yyy0 = $yy1;
		let $xxx1 = $xx2;
		let $yyy1 = $yy2;
		let $xxx2 = $xx2 + Math.cos($rot*sqcubehelper.edgerad + sqcubehelper.edgerad1)*$edgewidth;
		let $yyy2 = $yy2 + Math.sin($rot*sqcubehelper.edgerad + sqcubehelper.edgerad1)*$edgewidth;
		let $xxx3 = $xx1 + Math.cos(($rot+1)*sqcubehelper.edgerad- sqcubehelper.edgerad1)*$edgewidth;
		let $yyy3 = $yy1 + Math.sin(($rot+1)*sqcubehelper.edgerad- sqcubehelper.edgerad1)*$edgewidth;
		
		//imagefilledpolygon($im, array($xxx0, $yyy0, $xxx1, $yyy1, $xxx2, $yyy2, $xxx3, $yyy3), 4, $edgeColor);
		//imagepolygon($im, array($xxx0, $yyy0, $xxx1, $yyy1, $xxx2, $yyy2, $xxx3, $yyy3), 4,0x0);
		$target.polygon($xxx0+","+$yyy0+" "+$xxx1+","+$yyy1+" "+$xxx2+","+$yyy2+" "+$xxx3+","+$yyy3).fill($edgeColor);
	}


	static drawCorner($target, $rot, $topColor, $edgeColor1, $edgeColor2, $centerx, $centery, $radius, $edgewidth)
	{
		// draw triangle
		let $xx0 = $centerx;
		let $yy0 = $centery;
		let $xx1 = $centerx + Math.cos($rot*sqcubehelper.edgerad + sqcubehelper.edgerad1)*$radius;
		let $yy1 = $centery + Math.sin($rot*sqcubehelper.edgerad + sqcubehelper.edgerad1)*$radius;
		let $xx2 = $centerx + Math.cos(($rot+1)*sqcubehelper.edgerad)*($radius*sqcubehelper.diag);
		let $yy2 = $centery + Math.sin(($rot+1)*sqcubehelper.edgerad)*($radius*sqcubehelper.diag);
		let $xx3 = $centerx + Math.cos(($rot+2)*sqcubehelper.edgerad - sqcubehelper.edgerad1)*$radius;
		let $yy3 = $centery + Math.sin(($rot+2)*sqcubehelper.edgerad - sqcubehelper.edgerad1)*$radius;
		$target.polygon($xx0+","+$yy0+" "+$xx1+","+$yy1+" "+$xx2+","+$yy2+" "+$xx3+","+$yy3).fill($topColor);
		
		// draw edge 1
		let $xxx0 = $xx1;
		let $yyy0 = $yy1;
		let $xxx1 = $xx2;
		let $yyy1 = $yy2;
		let $xxx2 = $xx2 + Math.cos(($rot+1)*sqcubehelper.edgerad)*$edgewidth;
		let $yyy2 = $yy2 + Math.sin(($rot+1)*sqcubehelper.edgerad)*$edgewidth;
		let $xxx3 = $xx1 + Math.cos($rot*sqcubehelper.edgerad)*$edgewidth;
		let $yyy3 = $yy1 + Math.sin($rot*sqcubehelper.edgerad)*$edgewidth;
		
		//imagefilledpolygon($im, array($xxx0, $yyy0, $xxx1, $yyy1, $xxx2, $yyy2, $xxx3, $yyy3), 4, $edgeColor1);
		//imagepolygon($im, array($xxx0, $yyy0, $xxx1, $yyy1, $xxx2, $yyy2, $xxx3, $yyy3), 4,0x0);
		$target.polygon($xxx0+","+$yyy0+" "+$xxx1+","+$yyy1+" "+$xxx2+","+$yyy2+" "+$xxx3+","+$yyy3).fill($edgeColor1);
		
		// draw edge 1
		$xxx0 = $xx2;
		$yyy0 = $yy2;
		$xxx1 = $xx3;
		$yyy1 = $yy3;
		$xxx2 = $xx3 + Math.cos(($rot+2)*sqcubehelper.edgerad)*$edgewidth;
		$yyy2 = $yy3 + Math.sin(($rot+2)*sqcubehelper.edgerad)*$edgewidth;
		$xxx3 = $xx2 + Math.cos(($rot+1)*sqcubehelper.edgerad)*$edgewidth;
		$yyy3 = $yy2 + Math.sin(($rot+1)*sqcubehelper.edgerad)*$edgewidth;
		
		//imagefilledpolygon($im, array($xxx0, $yyy0, $xxx1, $yyy1, $xxx2, $yyy2, $xxx3, $yyy3), 4, $edgeColor2);
		//imagepolygon($im, array($xxx0, $yyy0, $xxx1, $yyy1, $xxx2, $yyy2, $xxx3, $yyy3), 4,0x0);
		$target.polygon($xxx0+","+$yyy0+" "+$xxx1+","+$yyy1+" "+$xxx2+","+$yyy2+" "+$xxx3+","+$yyy3).fill($edgeColor2);
	}
	
	static GetECLoc($str, $amount)
	{
		let $translated = 0;
		let $index = 0;
		for (let $index=0; $translated < $amount; $index++)
		{
			$translated++;
			if ($str[$index] == 'c' || $str[$index] == 'C')
			{
				$translated++;
			}
		}
		return $index;
	}
	
	static draw($target, $cece, $row, $x, $y, $mono, $direction, $offset, $radius, $edgeSize)
	{
		
		var c= {'r':"#D00000",
		   'o':"#EE8800",
		   'b':"#2040D0",
		   'g':"#11AA00",
		   'w':"#FFFFFF",
		   'y':"#FFFF00",
		   'l':"#888888",
		   'd':"#555555",
		   'x':"#999999",
		   'k':"#111111",
		   'c':"#0099FF",
		   'p':"#FF99CC",
		   'm':"#FF0099"};
				
		let $translated = sqcubehelper.GetECLoc($cece, $offset);
		$cece = $cece.substr($cece.length+$translated) + $cece.substr(0, $cece.length+$translated);
		$row = $row.substr($row.length+$offset) + $row.substr(0, $row.length+$offset);
		
		let $irow =0;
		for (let $i = ($direction > 0 ? 0 : $cece.length-1); 
			($direction > 0 && $i < $cece.length) || ($direction < 0 && $i >=0); 
			$i+= $direction)
		{
			if ($cece[$i] == 'e' || $cece[$i] == 'E')
			{
				// draw Edge
				let $topcolor = c['y'];
				if ($cece[$i] == 'e')
				{
					$topcolor = c['w'];
				}
				if ($mono == true)
				{
					$topcolor = c['l'];
				}
				
				let $edgecolor = c[$row.toLowerCase()[$irow]];
				if ($mono == true)
				{
					$edgecolor = c['l'];
				}
				sqcubehelper.drawEdge($target,-3+$irow, $topcolor, $edgecolor, $x, $y, $radius, $edgeSize); 
				$irow++;
			}
			else
			{
				// draw Corner
				let $topcolor = c['y'];
				if ($cece[$i] == 'c')
				{
					$topcolor = c['w'];
				}
				if ($mono == true)
				{
					$topcolor = c['l'];
				}
				let $edgecolor1 = c[$row.toLowerCase()[$irow]];
				let $edgecolor2 = c[$row.toLowerCase()[$irow+1]];
				if ($mono == true)
				{
					$edgecolor1 = c['l'];
					$edgecolor2 = c['l'];
				}
				
				sqcubehelper.drawCorner($target, -3+$irow, $topcolor, $edgecolor1, $edgecolor2, $x, $y, $radius, $edgeSize); 
				
				$irow += 2;
			}
		}
		$target.line($x + $radius*1.5 * Math.cos(sqcubehelper.edgerad1 + sqcubehelper.edgerad * 3), 
			$y + $radius*1.5 * Math.sin(sqcubehelper.edgerad1 + sqcubehelper.edgerad * 3), 
			$x + $radius*1.5 * Math.cos(sqcubehelper.edgerad1 + sqcubehelper.edgerad * 9), 
			$y + $radius*1.5 * Math.sin(sqcubehelper.edgerad1 + sqcubehelper.edgerad * 9)).stroke({ color: c['r'],width: 2});
	}

}

sqcubehelper.edgerad = Math.PI/180.0*30;
sqcubehelper.edgerad1 = Math.PI/180.0*1;
sqcubehelper.diag = 1.35;

	
		
$(document).ready(function(){
	
	$(".icube").each(function() {
		var c= {'r':"#D00000",
		   'o':"#EE8800",
		   'b':"#2040D0",
		   'g':"#11AA00",
		   'w':"#FFFFFF",
		   'y':"#FFFF00",
		   'l':"#888888",
		   'd':"#555555",
		   'x':"#999999",
		   'k':"#111111",
		   'c':"#0099FF",
		   'p':"#FF99CC",
		   'm':"#FF0099"};


		let width=$(this).attr("data-width");
		$(this).removeAttr("data-width");
		let height=$(this).attr("data-height");
		$(this).removeAttr("data-height");
		var draw = SVG().addTo(this).size(width, height);
		//var rect = draw.rect(100, 100).attr({ fill: '#f06' })
		var fl=$(this).attr("data-fl") && $(this).attr("data-fl").length > 0 ? $(this).attr("data-fl") : "llllllllllllggggggllloooooo";
		$(this).removeAttr("data-fl");
		var rank=$(this).attr("data-rank") && $(this).attr("data-rank").length > 0 ? $(this).attr("data-rank") : 3;
		$(this).removeAttr("data-rank");
		var padding=width/9;
		var cubiesize=(width-padding*2)/rank; 
		var cubiepadding = cubiesize/10;
		cubiesize -= cubiepadding;
		var niceradius = cubiesize/4;
		
		icubehelper.square(draw,width,0, 0x010101, 0, 0, 0.5, 1, 0); // U
		icubehelper.square(draw,width,1, 0x090909, 0, 0, 0.5, 1, 0); // F
		icubehelper.square(draw,width,2, 0x050505, 0, 0, 0.5, 1, 0); // R

		for ($face = 0; $face < 3; $face++) {
			for ($i = 0; $i < rank; $i++) {
				for ($j = 0; $j < rank; $j++) {
					icubehelper.square(draw,width,$face, c[fl.substr(($face * rank + $i) * rank + $j, 1)],
						   $j / (1.0 * rank), $i / (1.0 * rank), 0.5 + 5 / 1000.0, 1.0 / rank, 25 / 1000.0);
				}
			}
		}


	});

	$(".jcube").each(function() {
		var c= {'r':"#D00000",
		   'o':"#EE8800",
		   'b':"#2040D0",
		   'g':"#11AA00",
		   'w':"#FFFFFF",
		   'y':"#FFFF00",
		   'l':"#888888",
		   'd':"#555555",
		   'x':"#999999",
		   'k':"#111111",
		   'c':"#0099FF",
		   'p':"#FF99CC",
		   'm':"#FF0099"};


		let width=$(this).attr("data-width");
		$(this).removeAttr("data-width");
		let height=$(this).attr("data-height");
		$(this).removeAttr("data-height");
		
		var draw = SVG().addTo(this).size(width, height);
		//var rect = draw.rect(100, 100).attr({ fill: '#f06' })
		var us=$(this).attr("data-us") && $(this).attr("data-us").length > 0 ? $(this).attr("data-us") : "lllllllll";
		var ub=$(this).attr("data-ub") && $(this).attr("data-ub").length > 0 ? $(this).attr("data-ub") : "lll";
		var uf=$(this).attr("data-uf") && $(this).attr("data-uf").length > 0 ? $(this).attr("data-uf") : "lll";
		var ul=$(this).attr("data-ul") && $(this).attr("data-ul").length > 0 ? $(this).attr("data-ul") : "lll";
		var ur=$(this).attr("data-ur") && $(this).attr("data-ur").length > 0 ? $(this).attr("data-ur") : "lll";
		var rank=$(this).attr("data-rank") && $(this).attr("data-rank").length > 0 ? $(this).attr("data-rank") : 3;
		
		$(this).removeAttr("data-us");
		$(this).removeAttr("data-uf");
		$(this).removeAttr("data-ub");
		$(this).removeAttr("data-ul");
		$(this).removeAttr("data-ur");
		$(this).removeAttr("data-rank");
		
		
		
		var padding=width/9;
		var cubiesize=(width-padding*2)/rank; 
		var cubiepadding = cubiesize/10;
		cubiesize -= cubiepadding;
		var niceradius = cubiesize/4;
		
		draw.rect(width-padding*2,width-padding*2).move(padding,padding).attr({ fill: '#000' });
			
		for (let i = 0; i < rank; i++) {
			for (let j = 0; j < rank; j++) {
				var tl=niceradius;
				var tr=niceradius;
				var bl=niceradius;
				var br=niceradius;
				if (i==0)
				{
					tl=1;
					bl=1;
					if (j==0)
					{
						br=1;
					}
				}
				if (j==0)
				{
					tl=1;
					tr=1;
					if (i==rank-1)
					{
						bl=1;
					}
				}
				if (i==rank-1)
				{
					tr=1;
					br=1;
					
					if (i==rank-1)
					{
						tr=1;
					}
				}
				if (j==rank-1)
				{
					if (i==rank-1)
					{
						tl=1;
					}
					bl=1;
					br=1;
				}
				
				draw.rect(cubiesize/2+niceradius,cubiesize/2+niceradius).move(padding+i*(cubiesize+cubiepadding)+cubiepadding/2,padding+j*(cubiesize+cubiepadding)+cubiepadding/2).attr({rx:tl, ry:tl,  fill: c[us.substr(i+j*rank,1)]})
				draw.rect(cubiesize/2+niceradius,cubiesize/2+niceradius).move(padding+i*(cubiesize+cubiepadding)+cubiepadding/2,cubiesize/2-niceradius+padding+j*(cubiesize+cubiepadding)+cubiepadding/2).attr({rx:bl, ry:bl,  fill: c[us.substr(i+j*rank,1)]})
				draw.rect(cubiesize/2+niceradius,cubiesize/2+niceradius).move(cubiesize/2-niceradius+padding+i*(cubiesize+cubiepadding)+cubiepadding/2,padding+j*(cubiesize+cubiepadding)+cubiepadding/2).attr({rx:tr, ry:tr,  fill: c[us.substr(i+j*rank,1)]})
				draw.rect(cubiesize/2+niceradius,cubiesize/2+niceradius).move(cubiesize/2-niceradius+padding+i*(cubiesize+cubiepadding)+cubiepadding/2,cubiesize/2-niceradius+padding+j*(cubiesize+cubiepadding)+cubiepadding/2).attr({rx:br, ry:br,  fill: c[us.substr(i+j*rank,1)]})
			}
		}
		
		// bg
		draw.rect(width-padding*2,padding).move(padding,0).attr({ fill: '#000' });
		draw.rect(width-padding*2,padding).move(padding,padding+rank*(cubiesize+cubiepadding)).attr({ fill: '#000' });
		draw.rect(padding,width-padding*2).move(0, padding).attr({ fill: '#000' });
		draw.rect(padding,width-padding*2).move(padding+rank*(cubiesize+cubiepadding), padding).attr({ fill: '#000' });
		
		for (let i = 0; i < rank; i++) {
			
			//back
			draw.rect(cubiesize,padding-cubiepadding).move(padding+i*(cubiesize+cubiepadding)+cubiepadding/2,cubiepadding/2).attr({rx:1, ry:1,  fill: c[ub.substr(rank-1-i,1)]})
			//front
			draw.rect(cubiesize,padding-cubiepadding).move(padding+i*(cubiesize+cubiepadding)+cubiepadding/2,padding+rank*(cubiesize+cubiepadding)+cubiepadding/2).attr({rx:1, ry:1, fill: c[uf.substr(i,1)]})
			//left
			draw.rect(padding-cubiepadding,cubiesize).move(cubiepadding/2, padding+i*(cubiesize+cubiepadding)+cubiepadding/2).attr({rx:1, ry:1, fill: c[ul.substr(i,1)]})
			//right
			draw.rect(padding-cubiepadding,cubiesize).move(padding+rank*(cubiesize+cubiepadding)+cubiepadding/2,padding+i*(cubiesize+cubiepadding)+cubiepadding/2).attr({rx:1, ry:1, fill: c[ur.substr(rank-1-i,1)]})
		}


	});

	$(".sqcube").each(function() {
		var c= {'r':"#D00000",
		   'o':"#EE8800",
		   'b':"#2040D0",
		   'g':"#11AA00",
		   'w':"#FFFFFF",
		   'y':"#FFFF00",
		   'l':"#888888",
		   'd':"#555555",
		   'x':"#999999",
		   'k':"#111111",
		   'c':"#0099FF",
		   'p':"#FF99CC",
		   'm':"#FF0099"};


		let width=$(this).attr("data-width");
		$(this).removeAttr("data-width");
		let height=$(this).attr("data-height");
		$(this).removeAttr("data-height");
		var display=$(this).attr("data-display") && $(this).attr("data-display").length > 0 ? $(this).attr("data-display") : "lllllllll";
		if (display == 2)
		{
			height = height * 2;
		}
		
		var draw = SVG().addTo(this).size(width, height);
		//var rect = draw.rect(100, 100).attr({ fill: '#f06' })
		var toprow=$(this).attr("data-tr") && $(this).attr("data-tr").length > 0 ? $(this).attr("data-tr") : "llllllllllll";
		var botrow=$(this).attr("data-br") && $(this).attr("data-br").length > 0 ? $(this).attr("data-br") : "llllllllllll";
		var ptop=$(this).attr("data-t") && $(this).attr("data-t").length > 0 ? $(this).attr("data-t") : "llllllllllll";
		var pbot=$(this).attr("data-b") && $(this).attr("data-b").length > 0 ? $(this).attr("data-b") : "llllllllllll";
		
		var $radius = width/2 - width/6;
		var $edgeSize = width / 15;
		
		
		$(this).removeAttr("data-display");
		$(this).removeAttr("data-tr");
		$(this).removeAttr("data-br");
		$(this).removeAttr("data-t");
		$(this).removeAttr("data-b");
		$(this).removeAttr("data-height");
		$(this).removeAttr("data-width");
		
		
		sqcubehelper.draw(draw,pbot, botrow, width/2,width/2, true, -1, 6,$radius,$edgeSize);
		sqcubehelper.draw(draw,ptop, toprow, width/2,width/2, false, 1, 0,$radius,$edgeSize);

		// bot
		if (display == 2)
		{	
			sqcubehelper.draw(draw, ptop, toprow, width/2,width*3/2, true, -1, 6,$radius,$edgeSize);
			sqcubehelper.draw(draw,pbot, botrow, width/2,width*3/2, false, 1, 0,$radius,$edgeSize);
		}


	});



});