<?php

$fileName="site_counter.txt";

$file = fopen($fileName, "r");

$value=fread($file,filesize($fileName));

fclose($file);

++$value;

$file2 = fopen($fileName, "w");

fwrite($file2, $value);

fclose($file2);

$message = [
	'<br><font size="5">Welcome to my personal and professional website portfolio!</font>'
		. '<br>This site contains information about: my education, work experience, hobbies, resume, and contact information.'
	, '<br>I am a graduate from North Dakota State University, I graduate spring 2016 with a Bachelor of Science degree in Computer Science.'
		. '<br><br>Currently I am looking for full time employment in software development or IT.'

];


for($x=0;$x!=count($message);++$x)
{

	echo '<table style="text-align:center;width:90%;margin: 0 auto;"><tr><td>';

	echo '<br><div class="classProject" style="width:100%;text-align:left;white-space: nowrap;display:inline-block;white-space: normal;">'
		. '&nbsp;Posted By: Max McGrath <span style="float:right;">Date: Summer 2016&nbsp;</span></div><br>';

	echo $message[$x];

	echo '</td></tr></table>';

	echo '<br>';

}

?>