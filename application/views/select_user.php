<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>untitled</title>
</head>
<body>

  <?php echo form_open('display/user');
        echo form_dropdown('user', $users, array());
  ?>
  <br /> <br />
  <input type="submit" value="view"/>

</body>
</html>







