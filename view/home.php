<nav>
  <a href="home" class="nav-logo">
    <img src="res/logo.png" alt="Logo">
  </a>
  <a hx-post="logout" hx-target="body">
    <button>Logout</button>
  </a>
</nav>
<div class="center pad-big column">
    <?= api("ManageEmployee/getEmployees") ?>
  <form hx-post="ManageEmployee/addEmployee" hx-target="#employees_tbl" hx-swap="outerHTML">
    <h2>Add Employee</h2>
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="middle_name" placeholder="Middle Name">
    <input type="text" name="last_name" placeholder="Last Name" requirerd>
    <input type="text" name="salary" placeholder="Salary">
    <input type="text" name="emp_type" placeholder="Employee Type">
    <input type="submit" value="Save">
  </form>
</div>