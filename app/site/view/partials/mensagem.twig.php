{% extends "partials/body.twig.php" %}

{% block  title %} {{titulo}} - My Receitas {% endblock %}

{% block body %}
 <!-- the content here must be imported to the home/main.twig.php -->
 <h1>{{titulo}}</h1>

<div>
  {{mensagem}}

  <hr>
  
  <a href="{{BASE}}{{link}}" class="btn btn-primary">Voltar</a>

</div>

{% endblock %}