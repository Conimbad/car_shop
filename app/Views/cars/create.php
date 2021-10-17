<?=$header;?>


  <div class="card mt-5">
    <div class="card-body">
      <h5 class="card-title">Ingrese información de automóvil</h5>
      <p class="card-text">
        <form action="<?= site_url('/save')?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" value="<?= old('marca')?>" id="marca" class="form-control" name="marca">
          </div>
          <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" value="<?= old('modelo')?>" id="modelo" class="form-control" name="modelo">
          </div>
          <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input type="text" value="<?= old('matricula')?>" id="matricula" class="form-control" name="matricula">
          </div>
          <div class="form-group">
            <label for="cilindrada">Cilindrada</label>
            <input type="text" id="cilindrada" class="form-control" name="cilindrada">
          </div>
          <div class="form-group">
            <label for="potencia">Potencia</label>
            <input type="number" id="potencia" class="form-control" name="potencia">
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input type="text" value="<?= old('color')?>" id="color" class="form-control" name="color">
          </div>
          <div class="form-group">
            <label for="motor">Motor</label>
            <input type="text" id="motor" class="form-control" name="motor">
          </div>
          <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" value="<?= old('precio')?>" id="precio" class="form-control" name="precio">
          </div>
          <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" class="form-control" name="imagen">
          </div>
          <button class="btn btn-primary mt-3" type="submit">Guardar</button>
          <a href="<?=base_url('list')?>" class="btn btn-info mt-3">Cancelar</a>
        </form>
      </p>
    </div>
  </div>
  
<?=$footer;?>