<?php

namespace app\site\controller;
use app\core\Controller;

class CategoriaController extends Controller
{
  public function __construct()
  {

  }

  public function index(){
    $this->load('categoria/main');
  }

  public function adicionar(){
    $this->load('categoria/adicionar');
  }

  public function editar(){
    $this->load('categoria/editar');
  }

  /* =================================================== */

  public function insert(){
    $titulo = filter_input(INPUT_POST, 'txtTitulo', FILTER_SANITIZE_STRING);
    $slug = filter_input(INPUT_POST, 'txtSlug', FILTER_SANITIZE_STRING);

    if(strlen($titulo) < 2 || strlen($slug) < 3){
      $this->showMessage(
        'Formulário inválido',
        'Os dados fornecidos estão incompletos ou são inválidos.',
        'categoria/adicionar'
      );
      return;
    }
    echo 'valido';
  }
}