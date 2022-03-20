<div class="center full-screen">
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Salary</th>
        <th>Employment Type</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($employees as $employee):
          $employee = (object)$employee;
      ?>
        <tr>
          <td><?= $employee->first_name ?></td>
          <td><?= $employee->middle_name ?></td>
          <td><?= $employee->last_name ?></td>
          <td><?= $employee->salary ?></td>
          <td><?= $employee->employment_type ?></td>
        </tr>
      <?php
        endforeach;
      ?>
    </tbody>
  </table>
</div>