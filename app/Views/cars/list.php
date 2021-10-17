<?=$header;?>

<!-- Search bar -->
<h2>Buscar automóvil:</h2>
<form action="<?= site_url('/search')?>" method="post">
  <div class="input-group mb-3 mt-3">
    <input name="buscar" type="text" class="form-control" placeholder="Escriba la marca del automóvil" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-primary" type="submit" id="button-addon2">Buscar</button>
  </div>
</form>
<!-- Table list -->
<a class="btn btn-success mb-3 mt-3" href="<?= base_url('create')?>">Registrar nuevo auto</a>
    <table class="table table-light">
      <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Matrícula</th>
          <th>Cilindrada</th>
          <th>Potencia</th>
          <th>Color</th>
          <th>Motor</th>
          <th>Precio</th>
          <th>Imagen</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($cars as $car):?>
        <tr>
          <td><?=$car['id'];?></td>
          <td><?=$car['marca'];?></td>
          <td><?=$car['modelo'];?></td>
          <td><?=$car['matricula'];?></td>
          <td><?=$car['cilindrada'];?></td>
          <td><?=$car['potencia'];?></td>
          <td><?=$car['color'];?></td>
          <td><?=$car['motor'];?></td>
          <td><?=$car['precio'];?></td>
          <td>
            <img class="img-thumbnail" 
            src="<?= base_url()?>/uploads/<?=$car['foto'];?>" 
            width="100"
            alt="">
          </td>
          <td>
            <a href="<?= base_url('edit/'.$car['id'])?>" class="btn btn-info">Editar</a> |
            <a href="<?= base_url('delete/'.$car['id'])?>" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?=$footer;?>
