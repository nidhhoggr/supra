<div id="jobs">
<h1>Employees</h1>
<table>
  <thead>
    <tr>
      <th>Employee</th>
      <th>Title</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($staffs as $staff): ?>
    <tr>
      <td><?php echo $staff ?></td>
      <td><?php echo $staff->getTitle() ?></td>
      <td>
          <?php echo link_to('show','staff/show?id='.$staff->getId()) ?>
          <?php echo link_to('edit','staff/edit?id='.$staff->getId()) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('staff/new') ?>">New</a>
</div>
