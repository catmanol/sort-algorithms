<?php
include 'sort.php';
include 'heapSort.php';
include 'mergeSort.php';
$heap=new heapSort();
$mergeSort=new mergeSort();
for ($i=0;$i<1400;$i++) {
    $element=  floor(rand(0, 1000));
    $sir[]=$element;
}
//print_r($sir);
echo "<hr/>";
//$sort=new sort();
$time1=  microtime(true);
$selection=sort::selectionSort($sir);
$time2=microtime(true);
$bubble=sort::bubbleSort($sir);
$time3=microtime(true);
$insert=sort::insertionSort($sir);
$time4=microtime(true);
$shell=sort::shellSort($sir);
$time5=microtime(true);
$comb=sort::combSort($sir);
$time6=microtime(true);
$gnome=sort::gnomeSort($sir);
$time7=microtime(true);
$quick=sort::quickSort($sir);
$time8=microtime(true);
$oquick=sort::optQuickSort($sir);
$time9=microtime(true);
$arheap=$heap->heap($sir);
$time10=microtime(true);
$merge=$mergeSort->sort($sir);
$time11=microtime(true);
$fun=$mergeSort->fun($sir);
$time12=microtime(true);
echo "Selection Sort<br/>";
echo $time2-$time1;
//print_r($selection);
echo "<hr/>";
echo "Bubble Sort<br/>";
echo $time3-$time2;
//print_r($bubble);
echo "<hr/>";
echo "Insertion Sort<br/>";
echo $time4-$time3;
//print_r($insert);
echo "<hr/>";
echo "Shell Sort<br/>";
echo $time5-$time4;
//print_r($shell);
echo "<hr/>";
echo "Comb Sort<br/>";
echo $time6-$time5;
//print_r($comb);
echo "<hr/>";
echo "Gnome Sort<br/>";
echo $time7-$time6;
//print_r($gnome);
echo "<hr/>";
echo "Quick Sort<br/>";
echo $time8-$time7;
//print_r($quick);
echo "<hr/>";
echo "Little Optimum Quick Sort<br/>";
echo $time9-$time8;
//print_r($oquick);
echo "<hr/>";
echo "Heap Sort<br/>";
echo $time10-$time9;
//print_r($arheap);
echo "<hr/>";
echo "Merge Sort<br/>";
echo $time11-$time10;
//print_r($merge);
echo "<hr/>";
echo "Fun Sort<br/>";
echo $time12-$time11;
print_r($fun);
?>
