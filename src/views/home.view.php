<?php
require_once ("controllers/person.controller.php");
$controler = new PersonController();
$persons = $controler->getAllPerson();
$keys = array_keys((array) $persons[0]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    th, td {
      padding: 0 8px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="box">
    <div id="header">
      <!-- Image -->
      <img width="300" src="https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png" alt="">
    </div>
    <div id="container">
      <!-- Content -->
      <p>All data about person. I hold</p>
      <!-- Table data -->
      <table>
        <tbody>
          <tr>
            <?php
              foreach($keys as $item) {
                echo "<th>$item</th>";
              }
              echo "<th>Edit</th>";
              echo "<th>Delete</th>";
            ?>
          </tr>
          <?php
            foreach($persons as $item) {
              $row = "<tr>";
              foreach((array) $item as $field) {
                $row .= "<td>$field</td>";
              }
              $row .= "<td><button><a href='/?view=update&id=$item->idPerson'>Edit</a></button></td>";
              $row .= "<td><button><a href='/?view=delete&id=$item->idPerson'>Delete</a></button></td>";
              $row .= "</tr>";
              echo $row;
            }
          ?>
        </tbody>
      </table>
      <!-- Control -->
      <div class="container_control">
        <button><a href="/?view=add">Add new person</a></button>
      </div>
    </div>
    <div id="footer">
      <!-- License -->
      <span>Create by Qwerty9927</span>
    </div>
  </div>
</body>

</html>