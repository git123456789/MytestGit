<?php
namespace Core/Helper;

class Helper{
  //newArticle分支下修改helpert的oArray
  public function toArray($array=null){
    
    if(is_array($array)){
      return array_filter($array);
    }
    
  }
  public function toJson(){}
  public function ArrayToJson(){}
  public function JsontoArray(){}
}
