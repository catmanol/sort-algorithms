<?php
/*
for ($i=0;$i<1000;$i++) {
    $element=  floor(rand(0, 1000));
    $sir[]=$element;
}
$time1=microtime(true);
$sort=sort($sir);
$time2=microtime(true);
echo $time2-$time1;
 
 */
include "mergeSort.php";
$sir=array(3,5,120,65,34,7,2,1,0,14000);
$sort= new mergeSort();
//$sorted=$sort->fun($sir);
//print_r($sorted);
$merge=$sort->fun($sir);
echo "<br/>";
print_r ($merge);
echo "<hr/>";
$splice=array_shift($sir);
print_r($sir);
echo "<br/>";
print_r($splice);
?>
