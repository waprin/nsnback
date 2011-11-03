<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Login View</title>
</head>
<body>

  <?php echo $error;
        echo $message;
  ?>

   <?php echo form_open('login/submit');
         echo form_label('Name: ', 'name');
         echo form_input('name', set_value('name'), 'id="name" autofocus');
         echo form_submit('submit', 'Login');
         echo form_close();
    ?>

</body>
</html>
