<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
?><div class="panel panel-primary filterable">
  <div class="panel-heading">
    <h3 class="panel-title">Abductees</h3>
    <div class="pull-right">
      <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr class="filters">
        <th><input type="text" class="form-control" placeholder="Name" disabled></th>
        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
        <th><input type="text" class="form-control" placeholder="Age" disabled></th>
        <th><input type="text" class="form-control" placeholder="Gender" disabled></th>
        <th><input type="text" class="form-control" placeholder="Description" disabled></th>
        <th><input type="text" class="form-control" placeholder="Photo" disabled></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($abductees->result() as $abductee) { ?>
      <tr>
        <td><?php echo $abductee->name; ?></td>
        <td><?php echo $abductee->email; ?></td>
        <td><?php echo $abductee->age; ?></td>
        <td><?php echo ($abductee->gender) ? 'Male' : 'Female'; ?></td>
        <td><?php echo substr($abductee->description, 0, 50) . '&#8230;'; ?></td>
        <td><a href="<?php echo base_url() . 'uploads/' . $abductee->photo; ?>">VIEW</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>