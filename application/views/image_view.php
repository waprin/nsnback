<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Image View</title>
</head>
<body>

  <?php for ($i = 1; $i <= 30; $i++)
        {
            if (isset($images[$i]))
            {
                echo "<h1> Day " . $i . " </h1>";
                echo "<img src=\"" . base_url("/uploads/") . '/' . $images[$i] . "\" />";
                echo "<br />";
            }
        }
    ?>

</body>
</html>
