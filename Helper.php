<?php
namespace Core/Helper;

class Helper{
  public function toArray($arr){
    
    if(is_array($arr)){
      return $arr;
    }elseif(is_object($arr)){
      return get_object_vars($arr);
    }else{
      return null;
    }
  }
  public function toJson(){}
  public function ArrayToJson(){}
  public function JsontoArray(){}
}
