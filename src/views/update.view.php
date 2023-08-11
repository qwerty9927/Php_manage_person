<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Person</title>
</head>
<body>
  <h2>Update page</h2>
  <form action="/?action=update&id=<?php echo $_GET["id"]?>" method="post">
    <input type="text" placeholder="Name" name=person_name></br>
    <input type="text" placeholder="Age" name=person_age></br>
    <input type="text" placeholder="Address" name=person_address></br>
    <input type="text" placeholder="Birthday" name=person_birthday></br>
    <input type="text" placeholder="Job" name=person_job></br>
    <input type="submit">
  </form>
</body>
</html>