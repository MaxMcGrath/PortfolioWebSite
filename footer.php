<?php

$fileName="site_counter.txt";

$file = fopen($fileName, "r");

$value=fread($file,filesize($fileName));

fclose($file);

echo '<br>';

echo '<div style="width:50%;text-align:center;background-color:#333333;color:white;font-size: 12px;margin: 0 auto;box-shadow: 5px 5px 5px #555555;padding:7px;">'
	. 'Site developed by: Max McGrath, Date: Summer 2016'
	. '<br>'
	. 'Hit Counter: ';

echo $value;

echo ' times, Site Powered By: PHP'
	. '</div>'
	. '</body>'
	. '</html>';

echo "<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){"
	. "(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),"
	. "m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)"
	. "})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');"
	. "ga('create', 'UA-84769608-2', 'auto');"
	. "ga('send', 'pageview');"
	. "</script>";

?>