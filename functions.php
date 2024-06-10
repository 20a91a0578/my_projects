<?php declare(strict_types=1);
function add($x,$y){//without type checking
    return $x+$y;
}
function add1(int $x,int $y){//with type checking
    return $x+$y;
}
function add2(float $x,float $y=9):float{//specifying return type explicitly
    return $x+$y;
}


//to pass a parameters with pass by reference
function increm(int &$x){//pass  by reference
    return $x++;
}
echo add(5,9)."\n";
// echo add1(5,"9")."\n";//if strict_types=1 this function will give an error
echo add2(8);//default parameters
$x=1;
echo $x."\n";
increm($x);
echo $x."\n";
?>