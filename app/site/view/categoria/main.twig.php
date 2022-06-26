{% extends "partials/body.twig.php" %}

{% block  title %} Categorias - My Receitas {% endblock %}

{% block body %}
 <!-- the content here must be imported to the home/main.twig.php -->
<h1>Categorias</h1>
<!-- <a href="{{BASE}}categoria/adicionar/" class="btn btn-primary" onclick="salvaCategoria()">Nova categoria</a> -->
<button type="submit" class="btn btn-primary" onclick="salvaCategoria()">Nova Categoria</button>


<hr>
<script> 
  function salvaCategoria(){
    $('#salvaCategoria').modal('show')
    document.getElementById('id')
  }
</script>

<div class="overflow-auto"></div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Slug</th>
        <th></th>
      </tr>
    </thead>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="salvaCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{% endblock %}