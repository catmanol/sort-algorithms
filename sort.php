<?php
/**
 * Description of sort
 *
 * @author cata
 */
class sort {
    /**Function for sorting an array with selection sort algorithm.
     * 
     * @param array $array
     * @return array
     */
    public static function selectionSort(array $array) {
        for ($i=0;$i<count($array);$i++) {
            $min=$i;
            $length=count($array);
            for ($j=$i+1;$j<$length;$j++) {
                if ($array[$j]<$array[$min]) {
                    $min=$j;
                }
            }
            $tmp=$array[$min];
            $array[$min]=$array[$i];
            $array[$i]=$tmp;
        }
        return $array;
    }
    /**Function for sorting an array with bubble sort algorithm.
     * 
     * @param array $array
     * @return array
     */
    public static function bubbleSort(array $array) {
        $swapped=true;
        $j=0;
        $length=count($array);
        while($swapped) {
            $swapped=false;
            $j++;
            $comp=$length-$j;
            for ($i=0;$i<$comp;$i++) {
                if ($array[$i]>$array[$i+1]) {
                    $tmp=$array[$i];
                    $array[$i]=$array[$i+1];
                    $array[$i+1]=$tmp;
                    $swapped=true;
                }
            }
        }
        return $array;
    }
     /**Function for sorting an array with insertion sort algorithm.
     * 
     * @param array $array
     * @return array
     */
    public static function insertionSort(array $array) {
        $length=count($array);
        for ($i=1;$i<$length;$i++) {
            $element=$array[$i];
            $j=$i;
            while($j>0 && $array[$j-1]>$element) {
                //move value to right and key to previous smaller index
                $array[$j]=$array[$j-1];
                $j=$j-1;
                }
            //put the element at index $j
            $array[$j]=$element;
            }
        return $array;
    }
     /**Function for sorting an array with shell sort algorithm.
     * 
     * @param array $array
     * @return array
     */
    public static function shellSort(array $array) {
        $gaps=array(701,301,132,57,23,10,4,1);
        $length=count($array);
        $lgap=count($gaps);
        for ($z=0;$z<$lgap;$z++) {
            $gap=$gaps[$z];
            for ($i=$gap;$i<$length;$i++) {
                $element=$array[$i];
                $j=$i;
                while($j>=$gap && $array[$j-$gap]>$element) {
                    //move value to right and key to previous smaller index
                    $array[$j]=$array[$j-$gap];
                    $j=$j-$gap;
                    }
                //put the element at index $j
                $array[$j]=$element;
            }
        }
        return $array;
    }
     /**Function for sorting an array with comb sort algorithm.
     * 
     * @param array $array
     * @return array
     */
    public static function combSort(array $array) {
        $swapped=false;
        $j=0;
        $length=count($array);
        $gap=$length;
        while($gap>1 || $swapped) {
            if ($gap>1) {
                $gap=floor($gap/1.2473);
            }
            $swapped=false;
            $j++;
            for ($i=0;$i+$gap<$length;$i++) {
                if ($array[$i]>$array[$i+$gap]) {
                    $tmp=$array[$i];
                    $array[$i]=$array[$i+$gap];
                    $array[$i+$gap]=$tmp;
                    $swapped=true;
                }
            }
        }
        return $array;
    }
     /**Function for sorting an array with gnome sort algorithm.
     * 
     * @param array $array
     * @return array
     */
    public static function gnomeSort(array $array) {
        $i=1;
        $length=count($array);
        while($i<$length) {
            if ($array[$i]>=$array[$i-1]){
                $i++;
            } else {
                //swap the elements
                $tmp=$array[$i];
                $array[$i]=$array[$i-1];
                $array[$i-1]=$tmp;
                if ($i>1) {
                    $i--;
                }
            }
        }
        return $array;
    }
     /**Function for sorting an array with quick sort algorithm.
     * 
     * @param array $array
     * @return array
     */
    public static function quickSort(array $array) {
        if (count($array)<2) 
            return $array;
        $low=array();
        $high=array();
        $length=count($array);
        $pivot=$array[0];
        for ($i=1;$i<$length;$i++) {
            if ($array[$i]<$pivot) {
                $low[]=$array[$i];
            } else {
                $high[]=$array[$i];
            }
        }
        return array_merge(self::quickSort($low),array($pivot),self::quickSort($high));
    }
    /**Function for sorting an array with optimized quick sort algorithm.
     * 
     * @param array $array
     * @return array
     */
    public static function optQuickSort(array $array) {
        if (count($array)<20) 
            return self::insertionSort($array);
        $low=array();
        $high=array();
        $length=count($array);
        $pivot=$array[0];
        for ($i=1;$i<$length;$i++) {
            if ($array[$i]<$pivot) {
                $low[]=$array[$i];
            } else {
                $high[]=$array[$i];
            }
        }
        return array_merge(self::optQuickSort($low),array($pivot),self::optQuickSort($high));
    }
}