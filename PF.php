<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Function of Initializing array </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Function of initializaing array using foreach array</h1>
    <?php
    function showstring($str) {
    $result = array();

    foreach ($str as $name) {
        $string = array();

        for ($i = 1; $i <= strlen($name); $i++) {
            $string[] = $i;
        }
        $result[$name] = $string;
    }
    return $result;
    }
   $str = array("hamza","ibrahim","Faheem","Ali");
   $result = showstring($str);
   print_r($result);


    ?>
  </body>
</html>