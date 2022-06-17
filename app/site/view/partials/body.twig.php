<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{BASE}}img/favicon.ico">
    <link rel="stylesheet" href="{{BASE}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{BASE}}css/style.css">
    <title>{% block title %} {% endblock %}</title>

    {% block head %} {% endblock %}

  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="max-width">
        <div class="row">
          <div class="col-md-2">
            <a class="navbar-brand" href="{{BASE}}">
               <!-- <img src="img/logo.png" alt="My Receitas">  -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
          </div>

          <div class="col-md-10">
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="{{BASE}}">Home
                    <span class="visually-hidden">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{BASE}}categoria/">Categorias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{BASE}}receita/">Nova receita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{BASE}}sobre">Sobre</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-sm-2" type="text" placeholder="Pesquisar">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Ir</button>
              </form>
            </div>
          </div>
        </div> 
      </div>
    </nav>

  <div class="max-width">
    {% block body %} {% endblock %}
  </div>

  <script src="{{BASE}}js/script.js"></script>

</body>
</html>