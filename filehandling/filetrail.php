<?php
#1st way
// echo readfile("webdictionary.txt");//to read file one method

#2nd ways
// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);

#3rd way
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>