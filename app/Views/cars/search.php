<?= $header;?>



<!-- Results -->
<div>
  <h1>Resultados de búsqueda...</h1>
</div>
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
      <?php foreach($result as $res):?>
        <tr>
          <td><?=$res['id'];?></td>
          <td><?=$res['marca'];?></td>
          <td><?=$res['modelo'];?></td>
          <td><?=$res['matricula'];?></td>
          <td><?=$res['cilindrada'];?></td>
          <td><?=$res['potencia'];?></td>
          <td><?=$res['color'];?></td>
          <td><?=$res['motor'];?></td>
          <td><?=$res['precio'];?></td>
          <td>
            <img class="img-thumbnail" 
            src="<?= base_url()?>/uploads/<?=$res['foto'];?>" 
            width="100"
            alt="">
          </td>
          <td>
            <a href="<?= base_url('edit/'.$res['id'])?>" class="btn btn-info">Editar</a> |
            <a href="<?= base_url('delete/'.$res['id'])?>" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <a href="<?=base_url('list')?>" class="btn btn-success mt-3"><- Ir atrás</a>

<?= $footer;?>