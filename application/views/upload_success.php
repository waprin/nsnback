<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>untitled</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

     <?php foreach ($upload_data as $item => $value): ?>
     <li><?php echo $item;?>: <?php echo $value; ?></li>
 <?php endforeach; ?>
     </ul>
    
     <p><?php echo anchor('upload', 'Upload Another File!'); ?> </p>

</body>
</html>
