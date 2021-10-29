<?php include('header.php'); ?>


<form action="guardar.php" method="get">
  <div class="form-group row">
    <label for="idcontacto" class="col-4 col-form-label">Id Contacto</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-key"></i>
          </div>
        </div> 
        <input id="idcontacto" name="idcontacto" type="text" class="form-control" disabled>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nombre" class="col-4 col-form-label">Nombre</label> 
    <div class="col-8">
      <input id="nombre" name="nombre" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="apellidos" class="col-4 col-form-label">Apellidos</label> 
    <div class="col-8">
      <input id="apellido" name="apellidos" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="dni" class="col-4 col-form-label">DNI</label> 
    <div class="col-8">
      <input id="dni" name="dni" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="celular" class="col-4 col-form-label">Numero de Celular</label> 
    <div class="col-8">
      <input id="celular" name="celular" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php include('footer.php'); ?>