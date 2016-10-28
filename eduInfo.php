<?php
$imageURL = "education/";

$functionCounter = 0;

$schoolName = ["North Dakota State University","Middlesex Community College","Allan Hancock College","Greene County Career Center","Beavercreek High School"];

$schoolDates = ["2013-2016","2010-2012","2009-2010","2003-2005","2001-2003"];

$schoolDisc = [
	'<b>Web Site:</b> <a href="https://www.ndsu.edu/" target="_blank">ndsu.edu</a>'
	. '<br><b>Address:</b> 1340 Administration Ave, Fargo, ND 58102'
	. '<br><b>Awarded:</b> Bachelor of Science Degree: Computer Science'
	, '<b>Web Site:</b> <a href="https://www.middlesex.mass.edu/" target="_blank">middlesex.mass.edu</a>'
	. '<br><b>Address:</b> 591 Springs Rd, Bedford, MA 01730'
	. '<br><b>Objective:</b> second year classes'
	, '<b>Web Site:</b> <a href="http://hancockcollege.edu/" target="_blank">hancockcollege.edu</a>'
	. '<br><b>Address:</b> 800 S College Dr, Santa Maria, CA 93454'
	. '<br><b>Objective:</b> first year classes'
	, '<br><b>Web Site:</b> <a href="http://greeneccc.com/" target="_blank">greeneccc.com</a>'
	. '<br><br><b>Address:</b> 2960 W Enon Rd, Xenia, OH 45385'
	. '<br><br><b>Awarded:</b> Certificate of Completion: Precision Machining'
	. '<br><br><b>Objective:</b> precision machining curriculum and general education '
	, '<br><b>Web Site:</b> <a href="http://www.beavercreek.k12.oh.us/" target="_blank">beavercreek.k12.oh.us</a>'
	. '<br><br><b>Address:</b> 2660 Dayton Xenia Road, Beavercreek, OH 45434'
	. '<br><br><b>Awarded:</b> High School Diploma'
	. '<br><br><b>Objective:</b> general high school nonsense'
];

$schoolClass = [
[
	"COMM 110: Fundamentals/ Public Speaking","CSCI 213: Modern Software Development","CSCI 222: Discrete Mathematics","CSCI 313: Software Development for Games"
	,"CSCI 336: Theoretical Computer Sci II","CSCI 366: Files For Database Systems","CSCI 371: Web Scripting Languages","CSCI 372: Comparative Programming Languages"
	,"CSCI 374: Computer Organization and Architechure","CSCI 413: Principles of Software Engineering","CSCI 415: Networking and Parallel Computation"
	,"CSCI 445: Software Projects Capstone","CSCI 458: Microcomputer Graphics","CSCI 467: Algorithm Analysis","CSCI 474: Operating Systems Concepts"
	,"CSCI 479: Inro/Data Mining","CSCI 489: Social Implications of Computers","ENGL 120: College Composition II","ENGL 321: Writing in the Technical Professions"
	,"GEOL 105: Physical Geology & GEOL 105L: Lab","GEOL 106: The Earth Through Time & GEOL 106L: Lab","MUSC 100: Music Appreciation","STAT 367: Probability"
	,"STAT 368: Statistics"
],
[
	"CAD 169: Basic Solid Modeling 3D (CAD)","CSC 151: Programming 1","CSC 252: Programming 2","EGR 101: Introduction to Engineering Design","ENG 071: Basic Writing"
	,"ENG 101: English Composition I","ETH 101: Ethics and Society","MAT 190: Precalculus II","MAT 165: Calculus I","MAT 168: Calculus II","PHY 171: Physics I"
],
[
	"ART  101: Art Appreciation","CEL  104: 104-Introduction to robotics and mechatronics","ET   100: Computer Aided Drafting and Design"
	,"HED  100: Health and Wellness","HIST 118: U S History","HUM  101: Intro to Humanities","MATH 131: College Algebra","MATH 141: Precalculus"
	,"MATH 311: Algebra 1","MATH 321: First Year Geometry","MATH 331: Algebra 2","POLS 101: Intro to Political Science","PSY  101: Introduction to Psychology"
]
];

$schoolPaper = ["ndsu.bmp","","","gccc.bmp","beaver.bmp"];

$schoolImage = ["ndsu.jpg","middlesex.jpg","allenhancock.jpg","gccc.png","beaverscreekhigh.JPG"];

for($x=0;$x!=count($schoolName);++$x){
	echo '<table style="text-align:center;width:95%;margin: 0 auto;"><tr><td>';

	echo '<br><div class="classProject" style="width:100%;text-align:left;white-space: nowrap;display:inline-block;white-space: normal;">&nbsp;'
			. $schoolName[$x]
		. '<span style="float:right;">Attended:&nbsp;'
			. $schoolDates[$x]
		. '&nbsp;</span></div>';

	echo '</td></tr></table>';

	echo '<table style="text-align:center;width:90%;margin: 0 auto;"><tr><td style="text-align:left;font-size: 12px;vertical-align: text-top;">';
	
	echo $schoolDisc[$x];

	if($x<3){
		echo '<div style="font-size: 14px;width:100%;text-align:left;border-top: solid #133a26;"><b>Courses Taken:</b></div>';

		echo '<table style="width:100%;"><tr><td style="text-align:left;font-size: 12px;vertical-align: text-top;">';
		for($y=0;$y!=count($schoolClass[$x]);++$y){
			echo $schoolClass[$x][$y] . "<br>";
			if($y % 8 == 7 && $y != count($schoolClass[$x])-1 ){
				echo '</td><td style="text-align:left;font-size: 12px;vertical-align: text-top;border-left: solid #133a26;">';
			}
		}
		echo '</td></tr></table>';
		
	}

	echo '</td><td style="text-align:right;">';
	echo '<img src="' . $imageURL . $schoolImage[$x] . '">';

	echo '</td></tr></table>';

	echo '<br>';

	echo '<div style="width:85%; margin:0 auto;">';
	if( $schoolPaper[$x] != "" ){
		echo '<div onclick="embedHold' . $functionCounter . 'Show();" class="clickBar" style="white-space: nowrap;display:inline-block;white-space: normal;z-index: -10;">&nbsp;'
			. 'Award Received'
			. '<span style="float:right;">Click Bar To Open/Close Document&nbsp;</span>'
			. '</div>'
			. '<div id="docHolder' . $functionCounter . '" name="docHolder' . $functionCounter 
			. '" style="width:100%; margin:0 auto;border:1px solid #001a33;text-align:center;background-color:#ffeb99;box-shadow: 10px 10px 5px #888888;position: relative;z-index: 10;"></div>';

		echo '<script>'
			. 'var embedHold' . $functionCounter . ' = \'<br><img src="' . $imageURL . $schoolPaper[$x] . '">\';'
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

		++$functionCounter;
	}
	echo '</div>';
	echo '<br><br>';

}

?>