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

  public function lerPorId(int $categoriaId){
    $query = 'SELECT * FROM tb_categoria WHERE id = :id';

    $dr = $this->pdo->executeQueryOneRow($query, [':id' => $categoriaId]);

    return $this->collection($dr);
  }

  private function collection($arr){
    return (object)[
      'id'     => $arr['id'] ?? null,
      'titulo' => $arr['titulo'] ?? null,
      'slug'   => $arr['slug'] ?? null
    ];
  }

}