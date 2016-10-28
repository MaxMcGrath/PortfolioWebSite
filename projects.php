<?php

/*

http://max-mcgrath.net/project/other/microGFX/assignment/runninginCurves.html
http://max-mcgrath.net/project/other/microGFX/project/3dpong4.html
http://max-mcgrath.net/project/other/microGFX/project/
http://max-mcgrath.net/project/other/microGFX/project/presentation.html

*/

$projectDocSytle = 'align="middle" width="80%" height="400"';
$functionCounter = 0;
$imageURL = "project/image/";

$projectClass = [
	"CSCI 213 - Modern Software Development"
	,"CSCI 313 - Software Development for Games"
	,"CSCI 366 - Files For Database Systems"
	,"CSCI 371 - Web Scripting Languages"
	,"CSCI 413 – Principles of Software Engineering"
	,"CSCI 415 – Networking & Parallel Computation"
	,"CSCI 445 - Software Projects Capstone"
	,"CSCI 458 - Microcomputer Graphics"
	,"CSCI 479 - Introduction to Data Mining"
	,"CSCI 489 - Social Implications of Computers"
	];

$projectHold = [
	[
	['Design Document:', '<iframe src="https://docs.google.com/document/d/1lJUtlMHLtDPYtfgW_sJL6Ss0ZQeOsENuPd8_wNl2ufc/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	,['Software Requirements Specification:', '<iframe src="https://docs.google.com/document/d/1Hv_O0UBwkbC91_ltuY_BstrxxafgaJmbdbiglhSKXd0/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	]
	,[
	['Game Concept & Design Document:', '<iframe src="https://docs.google.com/document/d/1_UmJjUcfuKFz860tg_gH3GRUlDS-xQUgqmo_Bem1Ajk/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	,['Destroyers Final Hand-in and Instructions:', '<iframe src="https://docs.google.com/document/d/16cVkqgu7XSrJCrTbqcBLLZsJaezEJqe6_VyoQEXGoX0/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	]
	,[
	['Database Report:', '<iframe src="https://docs.google.com/document/d/1ARY0moB3uHHVWH8Lmkjgilyt2yACoQLVShTmjSB-9Ao/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	]
	,[ 
	//no documents to show :( 
	]
	,[
	['Project Deliverable 1:', '<iframe src="https://docs.google.com/document/d/1HU751DkSjc1Ka59Nv8L9TE4sWRYW7XuuGwekZc3uqtc/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	,['Project Deliverable 2:', '<iframe src="https://docs.google.com/document/d/16V2YV1sKE6GI49FHhlQEuWPcyllBn9o0BfBm0nJ9goA/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	,['Project Deliverable 3:', '<iframe src="https://docs.google.com/document/d/1bFeHQ1OsmvYw1WYUjt_1YqMpuu6fVekQiRlW_az6-7s/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	,['Code Inspection Document:', '<iframe src="https://docs.google.com/document/d/1Bz2l7W4sv-3YMm779Jmya4Vf_Iendsz_D2cYmOc4ccc/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	,['Project In-Class Presentation Slides:', '<iframe src="https://docs.google.com/presentation/d/1pVRTxhlYcLP_w6jCXMtAvdCgCuGbgBL1P9BlQddLaLU/embed?start=false&loop=false&delayms=3000" frameborder="0" ' . $projectDocSytle . ' allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>']
	]
	,[
	['Project In-Class Presentation Slides:', '<iframe src="https://docs.google.com/presentation/d/1JeLfsQ5UW7vVqFteCloW2KZi54osOrTU9PoHkCBTPwA/embed?start=false&loop=false&delayms=3000" frameborder="0" ' . $projectDocSytle . ' allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>']
	]
	,[
	['Project Video Description:', '<iframe src="https://drive.google.com/file/d/0B_h3OXwc-Ms2cGNqeUpKLTV0M1E/preview" ' . $projectDocSytle . '></iframe>']
	,['Project Mid-Term Presentation Slides:', '<iframe src="https://docs.google.com/presentation/d/1ci2QOkTOgHStqJ3JSrH9mBN9J9WxzsjvwodKM7vd23U/embed?start=false&loop=false&delayms=3000" frameborder="0" ' . $projectDocSytle . ' allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>']
	,['Project Final Presentation Slides:', '<iframe src="https://docs.google.com/presentation/d/1MZY0CfntFc90iIpvaN-9cKa8P-JIemS56xooYmShz9M/embed?start=false&loop=false&delayms=3000" frameborder="0" ' . $projectDocSytle . ' allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>']
	,['Project Specification Document:', '<iframe src="https://docs.google.com/document/d/1fCqjLsd2y3hsnNFuoP-F5a4n9EDExiuyX9-hIePQ1GA/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	]
	,[ 
	//no documents to show :( 
	]
	,[
	['Project Objective:', '<iframe src="https://docs.google.com/document/d/1JGUSMicAcfzZDvxN49U-dn4FgYKEr6VI-TF4nI70MAo/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	,['Project In-Class Presentation Slides:', '<iframe src="https://docs.google.com/presentation/d/1JMwbc_FweYN90Dt8M2oiiflWS7c5AtUOXntdjJeiLJU/embed?start=false&loop=false&delayms=3000" frameborder="0" ' . $projectDocSytle . ' allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>']
	,['Project Paper:', '<iframe src="https://docs.google.com/document/d/1bKIHJ4K5uvt3XfGB3o2SfMuSIS_fBU_IMctofUICuhY/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	]
	,[
	['Interim Report:', '<iframe src="https://docs.google.com/document/d/1LBT0lbFxPHlal8-a5uwuH8kgDSDcA-KrmRchuD77oSY/pub?embedded=true" ' . $projectDocSytle . '></iframe>']
	,['Project Final Presentation Slides:', '<iframe src="https://docs.google.com/presentation/d/1I8CV46FS-MtIHVxPYDv_xuFZYhqsQS-ZReKFutB0Oh8/embed?start=false&loop=false&delayms=3000" frameborder="0" ' . $projectDocSytle . ' allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>']
	]
	];

$projectImageName = [
	["garage001.png","garage002.png","garage003.png","garage004.png","garage005.png","garage006.png"]
	,["tempest.png","tempest2.png","tempest3.png","tempest4.png","tempest5.png","tempest6.png","tempest7.png","tempest8.png","tempest9.png"]
	,["gamedb00.png"]
	,["hotel00.png","hotel01.png","hotel02.png","hotel03.png"]
	,["battleship.png","battleship2.png","battleship3.png","battleship4.png","battleship5.png"]
	,["risk2.png","risk3.png","risk4.png"]
	,["softcap00.png"]
	,["microGFX00.png","microGFX01.png","microGFX02.png","microGFX03.png"]
	,["dataEEG00.png","dataEEG01.png","dataEEG02.png","dataEEG03.png"]
	,[ 
		//no images to show :( 
	]
	];

$groupMembers = [
	["Max McGrath"]
	,["Douglas Nelson","Matt Franzen","Max McGrath","Shahana Norton"]
	,["Matt Franzen","Daniel Johnson","Max McGrath"]
	,["Max McGrath"]
	,["Chris Bourdeaux","Pawan Katiyar","Anthony Kulzer","Max McGrath"]
	,["Matt Franzen","Max McGrath"]
	,["Chad Close","Dillon Dee","Dennis Heinle","Max McGrath"]
	,["Max McGrath"]
	,["Corey Grant","Max McGrath"]
	,["Weijiao Gu","Max McGrath","Tatenda Nhamu"]
	];

$classInfo = [
	["Fall 2012","Oksana Myronovych"]
	,["Spring 2013","Sameer Abufardeh"]
	,["Fall 2012","Anne Denton"]
	,["Fall 2012","Oksana Myronovych"]
	,["Fall 2012","Hyunsook Do"]
	,["Fall 2013","Juan Li"]
	,["Spring 2016","Dean Knudson"]
	,["Fall 2014","Otto Borchert"]
	,["Fall 2016","Saeed Salem"]
	,["Spring 2014","Sameer Abufardeh"]
	];

$projectDescription = [
	"This projects goal was to create a parking garage management system. The project was developed in C# using Visual Studios and its database to hold users registration information. The management system lets users: create accounts, login, search for available times, reserve times, cancel reservations, email users, and print receipt tickets."
	,"This probably has to be a project that I regret and like. The reasons for that statement is the project was just way to ambitious, for 4 undergraduate students, with only one person able to produce graphics. This project was developed in C# in Visual Studios using Microsoft's now deprecated XNA. The concept for the project was something similar to the PC game called XCOM, but set with in a World War 2 time period."
	,"Description coming soon!"
	,"Description coming soon!"
	,"Description coming soon!"
	,"Description coming soon!"
	,"Description coming soon!"
	,"Description coming soon!"
	,"Description coming soon!"
	,"Description coming soon!"
			];

echo '<table style="align: center;width:90%;margin: 0 auto;"><tr><td>';

for($x=0;$x!=count($projectClass);++$x){
	echo '<br><div class="classProject">&nbsp;' . $projectClass[$x] . '</div>'
		. '<div style="width:100%;text-align:center;">'
		. '<table style="width:90%;text-align:center;margin: 0 auto;"><tr>'
		. '<td style="border-right:medium solid #133a26;width:1%;text-align:left;vertical-align:text-top;padding:15px;white-space: nowrap;">Team Members:<font size="2">';

	for($z=0;$z!=count($groupMembers[$x]);++$z){
		echo '<br>&nbsp;&bull;' . $groupMembers[$x][$z];
	}

	echo '</font><br>Instructor:<br><font size="2">&nbsp;&bull;' . $classInfo[$x][1] . '</font><br>Date:<br><font size="2">&nbsp;&bull;' . $classInfo[$x][0]
		. '</font></td><td style="width:99%;text-align:left;vertical-align:text-top;padding:15px;">Project Description:<br><font size="2" style="white-space:normal;">';

	echo $projectDescription[$x];

	echo '</font></td></tr></table>';

	if(count($projectImageName[$x])>0){
		echo '<font size="3">Screenshots Showing Project:</font><br>';
	}

	for($z=0;$z!=count($projectImageName[$x]);++$z){
		echo '<img src="' . $imageURL . $projectImageName[$x][$z] 
			. '" onClick=window.open("' . $imageURL . $projectImageName[$x][$z] 
			. '","Image","width=500,height=500,left=10,top=10,resizable=yes,toolbar=0,status=0,");'
			. ' class="imageProject">&nbsp;&nbsp;&nbsp;';
	}
	if(count($projectImageName[$x])>0){
		echo '<font size="3"><br>Left Click: Enlarge Image (Opens In New Window)</font>';
	}

	echo '</div>';

	echo '<div style="width:95%; margin:0 auto;">';
	for($y=0;$y!=count($projectHold[$x]);++$y){
		echo '<div onclick="embedHold' . $functionCounter . 'Show();" class="clickBar" style="white-space: nowrap;display:inline-block;white-space: normal;z-index: -10;">&nbsp;'
			. $projectHold[$x][$y][0]
			. '<span style="float:right;">Click Bar To Open/Close Document&nbsp;</span>'
			. '</div>'
			. '<div id="docHolder' . $functionCounter . '" name="docHolder' . $functionCounter 
			. '" style="border:1px solid #001a33;text-align:center;background-color:#ffeb99;box-shadow: 10px 10px 5px #888888;position: relative;z-index: 10;"></div>';

		echo '<script>'
			. 'var embedHold' . $functionCounter . ' = \'' . $projectHold[$x][$y][1] . '\';'
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
	echo '</div>'
		. '<br>';
}

echo '</td></tr></table>';

?>
