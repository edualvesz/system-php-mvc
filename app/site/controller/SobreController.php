<?php

namespace app\site\controller;
use app\core\Controller;

class SobreController extends Controller
{
  public function index(){
    $this->load('sobre/main');
  }

//   public function teste($name = ''){  the quotation marks must be put here because if won't the link will return with error in the browser
//     echo $name . 'teste!';
//   }
}