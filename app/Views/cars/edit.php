<?= $header;?>

<!-- Form -->
<div class="card mt-5">
    <div class="card-body">
      <h5 class="card-title">Modifique la información del automóvil</h5>
      <p class="card-text">
        <form action="<?= site_url('/update')?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $car['id'];?>">
          <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" value="<?= $car['marca'];?>" id="marca" class="form-control" name="marca">
          </div>
          <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" value="<?= $car['modelo'];?>" id="modelo" class="form-control" name="modelo">
          </div>
          <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input type="text" value="<?= $car['matricula'];?>" id="matricula" class="form-control" name="matricula">
          </div>
          <div class="form-group">
            <label for="cilindrada">Cilindrada</label>
            <input type="text" value="<?= $car['cilindrada'];?>" id="cilindrada" class="form-control" name="cilindrada">
          </div>
          <div class="form-group">
            <label for="potencia">Potencia</label>
            <input type="number" value="<?= $car['potencia'];?>" id="potencia" class="form-control" name="potencia">
          </div>
          <div class="form-group">
            <label for="color">Color</label>
            <input type="text" value="<?= $car['color'];?>" id="color" class="form-control" name="color">
          </div>
          <div class="form-group">
            <label for="motor">Motor</label>
            <input type="text" value="<?= $car['motor'];?>" id="motor" class="form-control" name="motor">
          </div>
          <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" value="<?= $car['precio'];?>" id="precio" class="form-control" name="precio">
          </div>
          <div class="form-group">
            <label for="imagen">Imagen</label>
            <br>
            <img class="img-thumbnail" 
            src="<?= base_url()?>/uploads/<?=$car['foto'];?>" 
            width="100"
            alt="">
            <input type="file" id="imagen" class="form-control" name="imagen">
          </div>
          <button class="btn btn-primary mt-3" type="submit">Actualizar</button>
          <a href="<?=base_url('list')?>" class="btn btn-info mt-3">Cancelar</a>
        </form>
      </p>
    </div>
  </div>
<?= $footer;?>