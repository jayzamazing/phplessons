<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="GET">
      <input type="text" name="person" value="">
      <button type="submit" name="button">Submit</button>
    </form>
    <?php
      //get data from the input field in the form
      $name = $_GET['person'];
      echo $name." is hungry!!";
     ?>
  </body>
</html>
