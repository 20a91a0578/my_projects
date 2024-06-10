<?php
//single line comment
#single line comment
/* Multi line
cooments*/

//to declare a variable we must use $
$txt="PHP";//Global variable
// echo "Hello World $txt";

//global variable are stored in $GLOBALS array  --$GLOBALS[index]

function hell(){
    $h=9;//Local variable
    global $txt;//we must use global to access global variable in function
    echo "hel ".$txt." h  ".$h."\n";
    echo $GLOBALS['txt'];
}

// hell();
echo $txt," hello";//multiple parameters
?>