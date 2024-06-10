<?php
//Indexed arrays
$a=array(1,2,3,4,5);
echo "array length = ".count($a)."\n";
// echo $a[3];//array accessing
$a[5]=9;
// $a[8]=103; it will cause error if we try to add element other than size or 1+array size
#to iterate over array using for loop
for($i=0;$i<count($a);$i++)
echo $a[$i]." ";


#associate arrays
echo "\nAssociative Array\n";
$ar=array("A"=>1,"B"=>2,"C"=>3);
foreach($ar as $x=>$x_v)
echo "key = ".$x." value = ".$x_v."\n";

//multi dimenisonal array's
$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));
for($i=0;$i<count($arr);$i++)
{
    for($j=0;$j<count($arr[0]);$j++){
        echo $arr[$i][$j]." ";
    }
    echo "\n";
}
?>
