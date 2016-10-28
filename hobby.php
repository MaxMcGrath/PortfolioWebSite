<?php
$imageURL = "hobby/";

$functionCounter = 0;

$hobbyName = ["MadHQ's Graveyard","Simple Game Development","YouTube"];

$hobbyImage = ["grave.jpg","simplegame.jpg","youtube.jpg"];

$hobbyDisc = [
	'<b><br>Web Site URL:</b> <a href="http://zombapro.ppmsite.com/" target="_blank">zombapro.ppmsite.com</a>'
	. '<br>As the title of the site would suggest, this resource site is a reminisce of my modding/gaming past. I do not play or mod Ra2/YR to'
	. ' much if at all anymore, but I do still make maps. Now days, I like the idea of keeping all the material I made/make in a single neat'
	. ' and organized location. And with this material I have used it for programing practice/experimentation.'
	. '<br><br><b>WebGL point cloud rendering:</b> I started working on this to do a kind of live demo for my voxel resources. So far it is showing'
	. ' decent results. This is useing <a href="http://threejs.org/" target="_blank">three.js</a> to help simplify the WebGL complexity. A example can be found below.'
	. '<br><br><b>HTML 5 Canves shape draw:</b> I started working on this to do a kind of live demo for my shape resources. So far it is showing'
	. ' decent results. A example can be found below.'

	, '<br>Over the past few years I have been making simple games for personal use and gain. Unfortunately, most never get finished. However,'
	. ' every attempt has left me with a substantial amount of knowledge gain to improve my next project. As I always seem to think/find'
	. ' better ways to handle game mechanics.'
	. '<br><br><br>C#\'s XNA:</b> Pretty much all the simple games I have developed have have been in this environment.'

	, '<br><b>YouTube URL:</b> <a href="https://www.youtube.com/channel/UC5Rql-t08SuitrA3yM-ZEmg" target="_blank">My Channel</a>'
	. '<br>My YouTube channel is very new, and is not blowing up with viewers or subscribers. It does have some benefits like: showing off some of my programming'
	. ' projects, along with my casual gaming hobby. I do not know how long I will keep adding new videos, but for now it\'s kind of fun.'
];

$hobbyHold = [
	[
		['WebGL Point-Cloud Voxel Render: Mouse Button controls; Left-Rotate, Right-Pan, Middle-Zoom', '<iframe src="http://zombapro.ppmsite.com/vxlrender/vxlrender.php?zipName=odymhk.zip&fileName=ody.vxl" align="middle" width="80%" height="600"></iframe>']
		,['HTML 5 Canves SHP Draw:', '<iframe src="http://zombapro.ppmsite.com/shapedraw/drawshape.php?zipName=yurrfn.zip&fileName=ygrirefnmk.shp" align="middle" width="80%" height="600"></iframe>']
	]
	,[
		['MineSweeper: (Javescript Game)', '<iframe src="' . $imageURL . 'mine.html" align="middle" width="80%" height="600"></iframe>']
		,['Simple Game Development: Side Scroller: (YouTube video)', '<iframe src="https://www.youtube.com/embed/5zUgTV9blb4" align="middle" width="80%" height="600"></iframe>']
		,['Simple Game Development: Clue - Classic Detective Game WIP Ver 1.0: (YouTube video)', '<iframe src="https://www.youtube.com/embed/_IUuMbAUyWk" align="middle" width="80%" height="600"></iframe>']
	]
	,[
		['Simple Game Development: BattleShip: (YouTube video)', '<iframe src="https://www.youtube.com/embed/52Gd1ju08Oo" align="middle" width="80%" height="600"></iframe>']
		,['Let\'s Build - Yuri\'s Revenge: In The Seam (2-6): (YouTube video)', '<iframe src="https://www.youtube.com/embed/g9hc0HLgKo4" align="middle" width="80%" height="600"></iframe>']
	]
	];

$hobbyImageCollection = [
	[
		//no images to show :( 
	]
	,["game1.jpg","game2.jpg","game3.jpg","game4.jpg","game5.jpg","game6.jpg","game7.jpg","game8.jpg"]
	,[
		//no images to show :( 
	]
	];

for($x=0;$x!=count($hobbyName);++$x){
	echo '<table style="text-align:center;width:95%;margin: 0 auto;"><tr><td>';

	echo '<br><div class="classProject" style="width:100%;text-align:left;white-space: nowrap;display:inline-block;white-space: normal;">&nbsp;'
			. $hobbyName[$x]
		. '</div>';

	echo '</td></tr></table>';

	echo '<table style="text-align:center;width:90%;margin: 0 auto;"><tr><td style="text-align:left;font-size: 12px;vertical-align: text-top;">';
	
	echo $hobbyDisc[$x];

	echo '</td><td style="text-align:right;">';
	echo '<img src="' . $imageURL . $hobbyImage[$x] . '">';

	echo '</td></tr></table>';

	echo '<div style="width:100%;text-align:center;">';

	if(count($hobbyImageCollection[$x])>0){
		echo '<font size="3">Screenshots Showing Project\'s:</font><br>';
	}

	for($z=0;$z!=count($hobbyImageCollection[$x]);++$z){
		echo '<img src="' . $imageURL . $hobbyImageCollection[$x][$z] 
			. '" onClick=window.open("' . $imageURL . $hobbyImageCollection[$x][$z] 
			. '","Image","width=500,height=500,left=10,top=10,resizable=yes,toolbar=0,status=0,");'
			. ' class="imageProject">&nbsp;&nbsp;&nbsp;';
	}
	if(count($hobbyImageCollection[$x])>0){
		echo '<font size="3"><br>Left Click: Enlarge Image (Opens In New Window)</font>';
	}
	echo '</div>';
	echo '<br>';

	echo '<div style="width:85%; margin:0 auto;">';

	for($y=0;$y!=count($hobbyHold[$x]);++$y){
		echo '<div onclick="embedHold' . $functionCounter . 'Show();" class="clickBar" style="white-space: nowrap;display:inline-block;white-space: normal;z-index: -10;">&nbsp;'
			. $hobbyHold[$x][$y][0]
			. '<span style="float:right;">Click Bar To Open/Close Document&nbsp;</span>'
			. '</div>'
			. '<div id="docHolder' . $functionCounter . '" name="docHolder' . $functionCounter 
			. '" style="border:1px solid #001a33;text-align:center;background-color:#ffeb99;box-shadow: 10px 10px 5px #888888;position: relative;z-index: 10;"></div>';

		echo '<script>'
			. 'var embedHold' . $functionCounter . ' = \'' . $hobbyHold[$x][$y][1] . '\';'
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