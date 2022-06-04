<?php

namespace app\site\controller;

class AboutController
{
  public function __construct()
  {

  }

  public function index(){
    echo 'estamos na index da about';
  }

  public function teste($name = ''){ /* the quotation marks must be put here because if won't the link will return with error in the browser*/
    echo $name . 'teste!';
  }
}