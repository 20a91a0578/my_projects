<?php
$pattern="/bye/i";
$s="bye Once again to come to our Home. bye";
echo preg_match($pattern,$s)."\n";//to find whether pattern  exists or not
echo preg_match_all($pattern,$s)."\n";//to find no of occurenence of a pattern
echo preg_replace($pattern,"Welcome",$s);//to replace the string with other string
?>