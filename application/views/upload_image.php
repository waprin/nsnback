<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>untitled</title>
</head>
<body>

  <?php echo $error; ?>
     
  <?php echo form_open_multipart('upload/do_upload'); ?>
  <input type="file" name="userfile" size="20" />
  <br /> <br />
  <input type="submit" value="upload"/>

</body>
</html>
