<?php
$t=date("H");
if($t<"5")
echo "Have a good day";
elseif($t<10)
echo "Have a nice day";
elseif($t<15)
echo "Have a pleasent day";
elseif($t<20)
echo "Have a wonderful day";
else
echo "You are done for the day";

$favcolor = "green";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>