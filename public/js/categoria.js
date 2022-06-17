function validar(validateId){
  
  getById('dvAlert').innerHTML = ''

  var valid = true
  if(getValueById('txtTitulo').length < 2){
    appendHtmlById('dvAlert', '<div class="alert alert-warning">Título inválido .min2</div>')
    valid = false
  }

  if(getValueById('txtSlug').length < 3){
    appendHtmlById('dvAlert', '<div class="alert alert-warning">Slug inválido .min3</div>')
    valid = false
  }

  if(validateId && getValueById('txtId') <= 0){
    appendHtmlById('dvAlert', '<div class="alert alert-warning">ID não encontrado</div>')
    valid = false
  }
return valid
}