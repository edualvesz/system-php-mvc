<?php

namespace app\core;

class Router
{
  
    private $UriEx;
    
    public function __construct(){

      $this->init();
      $this->execute();
    }

    private function init(){
      $uri = $_SERVER['REQUEST_URI'];

      $uri = str_replace('?', '/', $uri); /* in this case str_replace will change the question mark to a slash */

      $ex = explode('/', $uri);

      $ex = array_values(array_filter($ex)); /* array_filter remove blank fields */

      for($i = 0; $i < UNSET_COUNT; $i++){
        unset($ex[$i]);                         /* unset removes the array's index */    
      }

      $this->uriEx = $ex = array_values(array_filter($ex));    /* array_values put the array in order*/
    }

    private function execute(){
      $class = 'HomeController';
      $method = 'index';

      if(isset($this->uriEx[0])){
        $c = ('app\\site\\controller\\' . ucfirst($this->uriEx[0]) . 'Controller');
        if(class_exists($c)){
          $class = ucfirst($this->uriEx[0]) . 'Controller';
        }
      }

      $controller = 'app\\site\\controller\\' . $class;

    if(isset($this->uriEx[1])){
      if(method_exists($controller, $this->uriEx[1])){
        $method = $this->uriEx[1];
      }
    }

    call_user_func_array(
      [
      new $controller(),
      $method
      ], 
      
      $this->getParams()
        
    );
  }

    private function getParams(){
      $p = [];

      if(count($this->uriEx) > 2){
        for($i = 2; $i < count($this->uriEx); $i++){
          $p[] = $this->uriEx[$i];
        }
      }
      return $p;
    }
}
