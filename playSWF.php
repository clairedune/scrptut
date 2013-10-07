<?php
	function insertSWF($movieName, $width="1000", $height="700")
	{
		echo(
			'<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"' . "\n" .
			'codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0"' . "\n" .
			'" width="'.$width.'" height="'.$height.'"'.
			'id="a_suppr" align="middle>' . "\n" .
			"\t" . '<param name="allowScriptAccess" value="sameDomain" />' . "\n" .
			"\t" . '<param name="movie" value="'.$movieName.'" />' . "\n" .
			"\t" . '<param name="quality" value="high" />' . "\n" .
			"\t" . '<param name="bgcolor" value="#ffffff" />' . "\n" .
			"\t" . '<embed src="'.$movieName.'" quality="high" bgcolor="#ffffff" ' .
			'width="'.$width.'" height="'.$height.'"' .
			'name="'.$movieName.'" ' .
			'align="middle" allowScriptAccess="sameDomain" ' .
			'type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />' . "\n" .
			'</object>'
		);
	}
