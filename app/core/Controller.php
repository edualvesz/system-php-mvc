<?php

namespace app\core;

class Controller 
{
  protected function load(string $view, $params = []){
    // $loader = new \Twig\Loader\FilesystemLoader('../site/view/');
    // $twig = new \Twig\Environment($loader, []);
    $twig = new \Twig\Environment((new \Twig\Loader\FilesystemLoader('../app/site/view/')),
    ['debug' => false]
  );
      $twig->addGlobal('BASE', BASE);
      echo $twig->render($view . '.twig.php', $params);
  }
}