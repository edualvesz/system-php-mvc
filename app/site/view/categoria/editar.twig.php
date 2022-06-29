{% extends "partials/body.twig.php" %}

{% block  title %}Editar Categoria - My Receitas {% endblock %}

{% block body %}
 <!-- the content here must be imported to the home/main.twig.php -->
 <h1>Editar Categoria</h1>

 <hr>
<form action="{{BASE}}categoria/update/{{categoriaId}}" onsubmit="return validar(true);" method="POST">
  <div class="row">
    <div class="col-md-06">
      <label for="txtTitulo">Título</label>
      <input type="hidden" value="{{categoriaId}}" id="txtId">
      <input type="text" id="txtTitulo" name="txtTitulo" class="form-control" placeholder="Título aqui">
    </div>

    <div class="col-md-06">
      <label for="txtSlug">Slug</label>
      <input type="text" id="txtSlug" name="txtSlug" class="form-control" placeholder="Título aqui">
    </div>
  </div>

  <div class="row mt-3"> 
    <div class="col-md-10">
      <div id="dvAlert">
        <div class="alert alert-info">Preencha corretamente todos os campos!</div>
      </div>
    </div>

    <div class="col-md-2 text-right">
      <input type="submit" value="Editar" class="btn btn-success w-100">
    </div>
  </div>
</form>
<script src="{{BASE}}js/categoria.js"></script>
{% endblock %}