<?php

namespace app\site\controller;
use app\core\Controller;
use app\site\model\CategoriaModel;

class CategoriaController extends Controller
{
  private $categoriaModel;
  public function __construct()
  {
    $this->categoriaModel = new CategoriaModel();
  }

  public function index(){
    $this->load('categoria/main');
  }

  public function adicionar(){
    $this->load('categoria/adicionar');
  }

  public function editar($categoriaId = 0){
    $this->load('categoria/editar', [
      'categoria' => $this->categoriaModel->lerPorId($categoriaId)
    ]);
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

    $result = $this->categoriaModel->inserir($titulo, $slug);
    if($result <= 0){
      $this->showMessage(
        'Erro',
        'Houve um erro ao tentar cadastrar, tente novamente mais tarde.',
        'categoria/adicionar'
      );
      return;
    }
    redirect(BASE . 'categoria/editar/' . $result);
  }
}