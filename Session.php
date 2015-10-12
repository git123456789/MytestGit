<?php
namespace Core;
class Session{
  public $config=[];

  public function get($key,$default=null){
    if(isSet(config[$key])){
      return $this->config[$default];
    }else{
      return $this->config[$key];
    }
  }
  
  public function set($key,$value){
  
    $this->config[$key]= $value;
  }

}