<?php

namespace app\site\model;
use app\core\Model;

class CategoriaModel
{

private $pdo;

public function __construct(){
  $this->pdo = new Model();
}


  public function inserir(string $titulo, string $slug){
    $query = 'INSERT INTO db_receitas.tb_categoria (titulo, slug) VALUES (:titulo, :slug)';
    $params = [
      ':titulo' => $titulo,
      ':slug' => $slug
    ];
    if(!$this->pdo->executeNonQuery($query, $params)){
    return -1; //erro

    return $this->pdo->getLastId();
    }
  }
}