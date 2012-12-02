<?php

for ($i=0;$i<1000;$i++) {
    $element=  floor(rand(0, 1000));
    $sir[]=$element;
}
$time1=microtime(true);
$sort=sort($sir);
$time2=microtime(true);
echo $time2-$time1;
?>
