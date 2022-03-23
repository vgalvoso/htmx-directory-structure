<table id="employees_tbl">
    <caption>
      <input type="text" placeholder="Search" onkeyup="filterTable(this,'employees_body')">
    </caption>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Salary</th>
        <th>Employment Type</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="employees_body">
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
          <td>
            <form hx-post="ManageEmployee/deleteEmployee" 
              hx-target="#employees_tbl" 
              hx-confirm="Confirm Delete"
              hx-swap="outerHTML">
              <input type="text" class="none" name="id" value="<?= $employee->id?>">
              <input type="submit" class="bg-red white pad-small m-0" value="Delete">
            </form>
          </td>
        </tr>
      <?php
        endforeach;
      ?>
    </tbody>
  </table>