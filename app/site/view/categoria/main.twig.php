{% extends "partials/body.twig.php" %}

{% block  title %} Categorias - My Receitas {% endblock %}

{% block body %}
 <!-- the content here must be imported to the home/main.twig.php -->
<h1>Categorias</h1>
<a href="{{BASE}}categoria/adicionar/" class="btn btn-primary">Nova categoria</a>

<hr>

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
{% endblock %}