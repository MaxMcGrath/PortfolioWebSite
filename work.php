<?php
$imageURL = "work/";

$functionCounter = 0;

$workName = ["North Dakota State University","North Dakota State University","Hornbachers","Toys\"R\"Us","Fitness Center","Triangle Precision Industries"];

$workDates = ["2015-2016","Spring 2016","2012-2014","2010-2012","Summer 2009","2004-2007"];

$workDisc = [
	'<br><b>Title</b>: Undergraduate Research Assistant'
	. '<br><b>Type:</b> Part-Time/Flex'
	. '<br><b>Location:</b> Fargo, North Dakota'
	. '<br><b>Responsibilities:</b> create/edit database of graphics resources'
	. '<br><b>Summation:</b> This was a very nice flexible job for when I was in college. The project also had a publication.'
	. '<br><b>Publication:</b>'
	. '&nbsp;McGrath, Max, Anna Munns, Otto Borchert, Guy Hokanson, Jeffrey Clark, Kathleen T. Cox, and Brian M. Slator. (2015). Unearthing Digital Artifacts for Public Archaeology. Proceedings of the 48th Annual Midwest Instruction and Computing Symposium. University of North Dakota, Grand Forks, ND, April 10-11. http://www.micsymposium.org/mics2015/proceedings.html'
	,'<br><b>Title:</b> Website Calculator designer/developer'
	. '<br><b>Type:</b> Contract'
	. '<br><b>Location:</b> Fargo, North Dakota'
	. '<br><b>Responsibilities:</b> design and develop website calculator for sunflower nitrogen requirement'
	. '<br><b>Summation:</b> A simple contract job for NDSU\'s soil science department, a screenshot of the site can be seen below.'
	,'<br><b>Title:</b> Produce Clerk'
	. '<br><b>Type:</b> Part-Time'
	. '<br><b>Location:</b> Fargo, North Dakota'
	. '<br><b>Responsibilities:</b> quality control, customer service, stock sales floor'
	. '<br><b>Summation:</b> Not my most favorite job, it contained many childish games with the staff. However, it help bring in some cash while in college.'
	,'<br><b>Title:</b> Assembler/Sales Associate/Backroom Associate'
	. '<br><b>Type:</b> Part-Time'
	. '<br><b>Location:</b> Woburn, Massachusetts'
	. '<br><b>Responsibilities:</b> assemble products, inventory maintenance, sales associate'
	. '<br><b>Summation:</b> This was not a horrible experience, I dabbled in all types of tasks here, except for cashier work.'
	,'<br><b>Title:</b> General staff'
	. '<br><b>Type:</b> Part-Time'
	. '<br><b>Location:</b> Vandenberg Air Force Base'
	. '<br><b>Responsibilities:</b> service counter, reservations, safety, general maintenance'
	. '<br><b>Summation:</b> Probably the worst job I have had, it was just gross. Thankfully, it did not last long.'
	,'<br><b>Title:</b> CNC Machine Operator'
	. '<br><b>Type:</b> Part-Time/Full-Time'
	. '<br><b>Location:</b> Kettering, Ohio'
	. '<br><b>Responsibilities:</b> tight tolerance machining, quality control, machine maintenance'
	. '<br><b>Summation:</b> I really enjoyed this job, I got to work with my brain and my hands. It was also the reason I ended up pursuing higher education.'
];

$workPaper = [
[
	['Publication: Unearthing Digital Artifacts for Public Archaeology:','<iframe src="https://docs.google.com/document/d/1NqDj0mB7GvO_pySNezFfzyVSXhAmB6a9kRQ4XAD252U/pub?embedded=true" align="middle" width="80%" height="400"></iframe>']
	,['Presentation: Unearthing Digital Artifacts for Public Archaeology:','<iframe src="https://docs.google.com/presentation/d/1r7rQJMzMSF6yqOzwZW44AQ4fph_iSEeeImwIXkk-fvg/embed?start=false&loop=false&delayms=3000" frameborder="0" width="80%" height="400" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>']
	,['Final Write Up: The Digital Archive Database for Archeology:','<iframe src="https://docs.google.com/document/d/18_XTvucFNyt1Ax5UdLyosuKidSCKFsgtyZP-5zrhROY/pub?embedded=true" align="middle" width="80%" height="400"></iframe>']
	,['Final Write Up: On-A-Slant World Builder:','<iframe src="https://docs.google.com/document/d/1Wx3-tvqBfHfK6khJRAmXkokIbt3WTC3wBFE6NgNxruU/pub?embedded=true" align="middle" width="80%" height="400"></iframe>']
]
,[
	['Screenshot of Website:','<img src="work/flower.png" width="95%">']
]
,[
	//no documents to show :( 
]
,[ 
	//no documents to show :( 
]
,[
	//no documents to show :( 
]
,[
	//no documents to show :( 
]
,[
	//no documents to show :( 
]
,[ 
	//no documents to show :( 
]
,[
	//no documents to show :( 
]
,[
	//no documents to show :( 
]
];

$workImage = ["qbb.jpg","walster.jpg","hornbachers.jpg","toys.jpg","fitness.jpg","tpi.png"];

for($x=0;$x!=count($workName);++$x){
	echo '<table style="text-align:center;width:95%;margin: 0 auto;"><tr><td>';

	echo '<br><div class="classProject" style="width:100%;text-align:left;white-space: nowrap;display:inline-block;white-space: normal;">&nbsp;' . $workName[$x] . '<span style="float:right;">Employed:&nbsp;' . $workDates[$x] . '&nbsp;</span></div>';

	echo '</td></tr></table>';

	echo '<table style="text-align:center;width:90%;margin: 0 auto;"><tr><td style="text-align:left;font-size: 12px;vertical-align: text-top;">';
	
	echo $workDisc[$x];

	echo '</td><td style="text-align:right;">';
	echo '<img src="' . $imageURL . $workImage[$x] . '">';

	echo '</td></tr></table>';

	echo '<div style="width:85%; margin:0 auto;">';
	for($y=0;$y!=count($workPaper[$x]);++$y){
		echo '<div onclick="embedHold' . $functionCounter . 'Show();" class="clickBar" style="white-space: nowrap;display:inline-block;white-space: normal;z-index: -10;">&nbsp;'
			. $workPaper[$x][$y][0]
			. '<span style="float:right;">Click Bar To Open/Close Document&nbsp;</span>'
			. '</div>'
			. '<div id="docHolder' . $functionCounter . '" name="docHolder' . $functionCounter 
			. '" style="border:1px solid #001a33;text-align:center;background-color:#ffeb99;box-shadow: 10px 10px 5px #888888;position: relative;z-index: 10;"></div>';

		echo '<script>'
			. 'var embedHold' . $functionCounter . ' = \'' . $workPaper[$x][$y][1] . '\';'
			. 'var embedOpen' . $functionCounter . ' = true;'
			. 'function embedHold' . $functionCounter . 'Show(){'
			. 'if(embedOpen' . $functionCounter . '){'
			. 'embedOpen' . $functionCounter . ' = false;'
			. 'document.getElementById("docHolder' . $functionCounter . '").innerHTML = embedHold' . $functionCounter . ';'
			. '} else {'
			. 'embedOpen' . $functionCounter . ' = true;'
			. 'document.getElementById("docHolder' . $functionCounter . '").innerHTML = "";'
			. '}'
			. '}'
			. '</script>';

		echo '<br>';

		++$functionCounter;
	}
	echo '</div>';

	echo '<br>';

}

?>