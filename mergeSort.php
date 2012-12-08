<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mergeSort
 *
 * @author cata
 */
class mergeSort {
    public $array=array();
    public function sort($array) {
        $count=count($array);
        if ($count<=1)
            return $array;
        $mid=(int)$count/2;
        $left=array();
        $right=array();
        for ($i=0;$i<$mid;$i++) {
            $left[]=$array[$i];
        }
        for ($i=$mid;$i<$count;$i++) {
            $right[]=$array[$i];
        }
        return $this->merge($this->sort($left),$this->sort($right));
    }
    private function merge($left,$right) {
        $sorted=array();
        while (count($left)>0 && count($right)>0) 
            if ($left[0]<$right[0]) {
                $sorted[]=$left[0];
                array_shift($left);
            } else {
                $sorted[]=$right[0];
                array_shift($right);
            }
            print_r($sorted);
            echo "<br/>";
        for ($i=0;$i<count($left);$i++) 
            $sorted[]=$left[$i];
        for ($i=0;$i<count($right);$i++) 
            $sorted[]=$right[$i];
        return $sorted;
    }
    public function fun($array) {
        $length=count($array);
        $count=1;
        while ($length!=$count) {
            $max=isset($max)?$max:$length;
            for ($i=0;$i<$max;$i=$i+2) {
                $array[$i]=is_array($array[$i])?$array[$i]:array($array[$i]);
                if (isset($array[$i+1])) {
                    $array[$i+1]=is_array($array[$i+1])?$array[$i+1]:array($array[$i+1]);
                    $array[(int)$i/2]=$this->merge($array[$i],$array[$i+1]);
                } else {
                    $array[(int)$i/2]=$array[$i];
                }
                unset($array[$i+1]);
                if ($i!=0) { unset($array[$i]); }
            }
            print_r($array[0]);
            $max=ceil($max/2);
            echo $max."<br/>";
            //$array=array_splice($array,$max-1);
            print_r($array);
            $count=count($array[0]);
        }
        return $array[0];
    }
}
