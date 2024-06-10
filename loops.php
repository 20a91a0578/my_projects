<?php
$i=0;
echo "While loop\n";
while($i<=5){
    echo "i value = $i\n";
    $i++;
}
$i=0;
echo "Do..While loop\n";
do{
    echo "i value = $i\n";
    $i++;
}while($i<=4);
echo "For Loop\n";
for($i=0;$i<=5;$i++)
echo "i value = $i\n";
echo "ForEach.. loop\n";
$a=array(1,2,3,4,5);
foreach($a as $v){
    echo $v."\n";
}
?>
