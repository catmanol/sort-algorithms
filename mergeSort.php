<?php
/**
 * Description of mergeSort
 *
 * @author cata
 */
class mergeSort {
    /**
     * splitting the array recursively until has max two elements
     * merging and sorting recursively until sorted array is built
     * 
     * @param type $array
     * @return array Sorted input array
     */
    public function sort($array) {
        //if array has 1 element return that element
        $count=count($array);
        if ($count<=1)
            return $array;
        //split array and build left and right arrays
        $mid=(int)$count/2;
        $left=array();
        $right=array();
        for ($i=0;$i<$mid;$i++) {
            $left[]=$array[$i];
        }
        for ($i=$mid;$i<$count;$i++) {
            $right[]=$array[$i];
        }
        //recursively split the left and right arrays
        //sort and merge recursively left and right arrays
        return $this->merge($this->sort($left),$this->sort($right));
    }
    /**
     * merge left and right arrays sorting elements
     * 
     * @param array $left
     * @param array $right
     * @return array
     */
    private function merge($left,$right) {
        $sorted=array();
        //compare first element from left with first element from right
        //add the lowest to $sorted and erase it from parent array
        while (count($left)>0 && count($right)>0) 
            if ($left[0]<$right[0]) {
                $sorted[]=$left[0];
                array_shift($left);
            } else {
                $sorted[]=$right[0];
                array_shift($right);
            }
        //after one of right and left arrays is empty is added elements from
        //remaining to $sorted
        for ($i=0;$i<count($left);$i++) 
            $sorted[]=$left[$i];
        for ($i=0;$i<count($right);$i++) 
            $sorted[]=$right[$i];
        return $sorted;
    }
}
